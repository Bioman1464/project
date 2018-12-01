import axios from 'axios';

export const API = axios.create({
    baseURL: '/api/', // URL, относительно которого будут происходить запросы
    headers: {
        // заголовки 
    }
});
