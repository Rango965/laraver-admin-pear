// 请求拦截器
axios.interceptors.request.use(config => {
    // Do something before request is sent
    return config;
}, error => {
    // Do something with request error
    return Promise.reject(error);
});
// 响应拦截器
axios.interceptors.response.use(response => {
    // Do something before response is sent
    return response?.data ?? response;
}, error => {
    // Do something with response error
    return Promise.reject(error);
});
