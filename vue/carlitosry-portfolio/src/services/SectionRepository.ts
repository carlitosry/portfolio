import type { IDataApi } from '@/interfaces/IDataApi';
import type { ISection } from '@/interfaces/ISection';
import type { AxiosResponse } from 'axios';
import { HttpClient } from './httpClient';


export class SectionRepository extends HttpClient {
    private paths = JSON.parse(import.meta.env.VITE_APP_API_PATH).sections
    constructor() {
        super()
    }

    public getAll(): Promise<AxiosResponse<ISection[]>>
    {
      return this.getAllData(this.paths.get)
        .then(response => {
          let data = this.converIDataApiToISection(response.data)
          return new Promise(data)
        });
    }

    public getById(id:string): Promise<AxiosResponse<ISection[]>> 
    {
      let path = this.paths.getById.replace('::ID::', id);
      return this.getAllData(path);
    }

    public converIDataApiToISection(dataApi: any) : ISection
    {
      dataApi.map((data:any, index: number) => {
        data.isActive = index  == 0;
      })

      return dataApi;
    }

}