import type { IDataApi } from "./IDataApi";

export interface IMainMenu extends IDataApi {
    icon: string,
    href: string,
    title: string,
    isActive: boolean
}