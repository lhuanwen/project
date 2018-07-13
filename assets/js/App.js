import React from 'react';
import ReactDOM from 'react-dom';
import { LocaleProvider } from 'antd';
import zhCN from 'antd/lib/locale-provider/zh_CN';
import AppRouter from './AppRouter'
import '../css/app.scss';

const App = () => {
    return (
        <LocaleProvider locale={zhCN}>
            <AppRouter/>
        </LocaleProvider>
    );
};

ReactDOM.render(
    <App/>,
    document.getElementById('root')
);