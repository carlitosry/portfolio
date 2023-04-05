import axios, { type AxiosInstance, type AxiosResponse } from 'axios';
import type { IDataApi } from '../interfaces/IDataApi';


export class HttpClient {
    private readonly apiClient: AxiosInstance;

    constructor() {
        axios.defaults.headers.common['api-key'] = import.meta.env.VITE_APP_API_KEY;
        this.apiClient = axios.create({
          baseURL:  import.meta.env.VITE_APP_API_BASE_URL, // Cambiar por la URL de la API que se quiera consumir
          headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json'
          }
        });
    }

    getAllData(path: string): Promise<AxiosResponse> {
      return this.apiClient.get(path);
    }

    createData(path: string, data: IDataApi): Promise<AxiosResponse> {
      return this.apiClient.post(path, data);
    }

    updateData(path: string, id: number, data: IDataApi): Promise<AxiosResponse> {
      return this.apiClient.put(path, data);
    }

    deleteData(path: string, id: number): Promise<AxiosResponse> {
      return this.apiClient.delete(path);
    }
}