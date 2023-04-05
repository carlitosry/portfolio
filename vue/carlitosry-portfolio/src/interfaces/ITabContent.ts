import type { IDataApi } from "./IDataApi";

export interface ITabContent extends IDataApi {
    _id: string,
    isActive: boolean,
    leftSide: object,
    rightSide: object,
}