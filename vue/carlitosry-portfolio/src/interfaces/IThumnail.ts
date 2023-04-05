import type { IDataApi } from "./IDataApi";

export interface IThumnail extends IDataApi {
    path: string,
    title: string,
    mime: string,
    type: string,
    description: string,
    tags: string[],
    size: number,
    colors: string[],
    width: number,
    height: number,
    _hash: string,
    folder: string, 
}

