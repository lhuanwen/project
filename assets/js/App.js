import React from 'react';
import ReactDOM from 'react-dom';
import { LocaleProvider } from 'antd';
import zhCN from 'antd/lib/locale-provider/zh_CN';
import AppRouter from './AppRouter'
import Login from './pages/Security/Login';
// import '../css/app.less';

const App = () => {
    return (
        <LocaleProvider locale={zhCN}>
            <Login/>
        </LocaleProvider>
    );
};

ReactDOM.render(
    <App/>,
    document.getElementById('root')
);