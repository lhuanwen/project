import React from 'react';
import ReactDOM from 'react-dom';
import {LocaleProvider, DatePicker, message} from 'antd';
import zhCN from 'antd/lib/locale-provider/zh_CN';
import moment from 'moment';
import AppRouter from './AppRouter'
import 'moment/locale/zh-cn';
import '../css/app.scss';

moment.locale('zh-cn');

class App extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            date: '',
        };
    }

    handleChange(date) {
        message.info('您选择的日期是: ' + (date ? date.toString() : ''));
        this.setState({date});
    }

    render() {
        return (
            <LocaleProvider locale={zhCN}>
                {/*<div style={{width: 400, margin: '100px auto'}}>*/}
                    {/*<DatePicker onChange={value => this.handleChange(value)}/>*/}
                    {/*<div style={{marginTop: 20}}>当前日期：{this.state.date && this.state.date.toString()}</div>*/}
                {/*</div>*/}
                <AppRouter />
            </LocaleProvider>
        );
    }
}

ReactDOM.render(<App />, document.getElementById('root'));