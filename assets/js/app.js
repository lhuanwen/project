import React from 'react';
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

export default App;