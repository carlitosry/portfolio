import type { ITabContent } from "./ITabContent";
import type { IThumnail } from "./IThumnail";

export default interface ISection extends ITabContent {
    title: string,
    tabName: string,
    description: string,
    thumbnail: IThumnail
}

