import React, { Component } from 'react';
import { BrowserRouter as Router, Link, Route } from 'react-router-dom';
import Home from '../Home'
import ReactDOM from 'react-dom';
import './TopMenu.scss';

export default class TopMenu extends Component {
    render() {
        return (
            <nav id="top-menu" className="navbar navbar-light navbar-expand w-100">
                <Router>
                    <Link to={'/'} className="navbar-brand w-15"><img src="/img/micnoi-logo.png" alt=""/></Link>
                    <ul className="navbar-nav items-menu registro-header w-50">
                    <li className="nav-item">
                        <Link to={'register'} className="nav-link">REGISTRATE<br></br><span className="exp-txt10">GRATIS</span>
                    </Link>
                    </li>
                    </ul>
                    <div className="d-flex flex-column w-100">
                        <ul className="navbar-nav items-menu d-flex flex-row justify-content-between">
                            <li className="p-2 nav-item">
                                {/*<Link to={'/'} className="nav-link"># INICIO</Link>*/}
                                <a href="/" className="nav-link"># INICIO</a>
                            </li>
                            <li className="p-2 nav-item">
                                {/*<Link to={'/musician-list'} className="nav-link"># MUSICXS</Link>*/}
                                <a href="/musician-list" className="nav-link"># MUSICXS</a>
                            </li>
                            <li className="p-2 nav-item">
                                {/*<Link to={{pathname: '/offer-list'}} className="nav-link" target="_self"># OFFERS</Link>*/}
                                <a href="/offer-list" className="nav-link"># OFFERS</a>
                            </li>
                            <li className="p-2 nav-item">
                                {/*<Link to={'/help'} className="nav-link"># AYUDA</Link>*/}
                                <a href="/help" className="nav-link"># AYUDA</a>
                            </li>
                        </ul>
                        <ul className="navbar-nav items-menu d-flex flex-row justify-content-between">
                            <li className="p-2 nav-item">
                                {/*<Link to={'/about-us'} className="nav-link" href="/about-us"># QUIENES SOMOS</Link>*/}
                                <a href="/about-us" className="nav-link"># QUIENES SOMOS</a>
                            </li>
                            <li className="p-2 nav-item">
                                {/*<Link to={'#'} className="nav-link"># FANS</Link>*/}
                                <a href="/#" className="nav-link"># FANS</a>
                            </li>
                            <li className="p-2 nav-item">
                                <Link to={'#'} className="nav-link"># BLOG</Link>
                            </li>
                            <li className="p-2 nav-item">
                                <Link to={'#'} className="nav-link"># PUBLICIDAD</Link>
                            </li>
                        </ul>
                    </div>
                </Router>
            </nav>
        );
    }
}
