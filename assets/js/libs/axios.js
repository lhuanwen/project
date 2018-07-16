import axios from 'axios';

const Axios = axios.create({
    timeout: 5000,
    responseType: 'json',
    withCredentials: true,
    headers: {
        'Content-Type': 'application/json;charset=utf-8',
        'X-Requested-With': 'XMLHttpRequest',
    },
    validateStatus(status) {
        return status >= 200 && status < 300;
    },
});

Axios.interceptors.response.use(response => response.data, error => Promise.reject(error));

export default Axios;
