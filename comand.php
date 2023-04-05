<?php

namespace Application\FrontendBundle\Command;

use Application\FrontendBundle\Entity\Abstracts\AbstractTrf;
use Application\FrontendBundle\Entity\TestResultsStatus;
use Application\FrontendBundle\Entity\TrfStateHistory;
use Application\FrontendBundle\Repository\AbstractTrfRepository;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CloseTrfStateCommand extends ContainerAwareCommand
{
    const LAST_ID_OPTION = 'last-id';

    protected function configure()
    {
        $this
            ->setName('app:trf-states-closed:transform')
            ->addOption(
                self::LAST_ID_OPTION,
                'lid',
                InputOption::VALUE_REQUIRED,
                'Enter last id ption to start process from this id'
            )
            ->setDescription('Add closed at timestamp to trf closed')
            ->setHelp('This command allows you to add close at timestamp to trf`s closed');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $lastId = $input->getOption(self::LAST_ID_OPTION) ?: 0;

        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $trfRepository = $em->getRepository(AbstractTrf::class);
        $trfTotal = $this->getTotalClosedTrf($trfRepository, $lastId);

        $progress = new ProgressBar($output, $trfTotal);
        $progress->setFormatDefinition(
            'custom',
            ' %current%/%max% [%bar%] %message% %percent:3s%% %elapsed:6s%/%estimated:-6s%'
        );
        $progress->setFormat('custom');

        while ($trfAll = $this->getNextClosedIteration($trfRepository, $lastId)) {
            foreach ($trfAll as $trf) {

                /** @var AbstractTrf $trf * */

                $trfHistory = $trf->getStatesHistory();
                /** @var TrfStateHistory $trfHistory * */
                if (
                    end($trfHistory)->getState() == 'completed' ||
                    end($trfHistory)->getState() == 'closed'
                ) {
                    $dateTime = end($trfHistory)->getTimestamp();
                    $trf->setClosedAt($dateTime);
                    $lastId = $trf->getId();
                }
                $progress->advance();
                $progress->setMessage("Success!! Last Id processed ".$lastId);
            }
            $em->flush();
            $em->clear();
        }
        $progress->finish();
        $output->writeln("\n<info>Success!!</info> All records complete!");
    }

    protected function getTotalClosedTrf(AbstractTrfRepository $trfRepository, $lastId)
    {
        return $trfRepository->createQueryBuilder('t')
            ->select('count(t.id)')
            ->leftJoin('t.testResultsStatus', 'r')
            ->andWhere('r.status = :status')
            ->andWhere('t.closedAt IS NULL')
            ->andWhere('t.id > :id')
            ->setParameter('status', AbstractTrf::RESULT_STATUS_CLOSED)
            ->setParameter('id', $lastId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    protected function getNextClosedIteration(AbstractTrfRepository $trfRepository, $lastId)
    {
        return $trfRepository->createQueryBuilder('t')
            ->leftJoin('t.testResultsStatus', 'r')
            ->andWhere('r.status = :status')
            ->andWhere('t.closedAt IS NULL')
            ->andWhere('t.id > :id')
            ->setParameter('status', AbstractTrf::RESULT_STATUS_CLOSED)
            ->setParameter('id', $lastId)
            ->setMaxResults(200)
            ->getQuery()
            ->getResult();
    }
}
