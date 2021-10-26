import React, { Component } from 'react';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';
import Home from './components/Home';
import TopMenu from './components/TopMenu/TopMenu';
import LoginMenu from './components/LoginMenu/LoginMenu';
import ReactDOM from 'react-dom';

export default class Index extends Component {
    render() {
        return (
            <header>
                <div className="nav justify-content-end">
                    <LoginMenu/>
                </div>
                <div id="cabecera" className="row">
                    <TopMenu />
                </div>
            </header>
        );
    }
}

if (document.getElementById('app-new')) {
    ReactDOM.render(<Index />, document.getElementById('app-new'));
}
