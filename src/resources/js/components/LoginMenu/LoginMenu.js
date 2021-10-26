import React, { Component } from 'react';
import { BrowserRouter as Router, Redirect } from 'react-router-dom';
import LoginForm from '../LoginForm/LoginForm';
import Auth from '../../services/Auth';

export default class LoginMenu extends Component {
    constructor(props) {
        super(props);
        this.state = {
            isAuthenticated: null,
            user: {
                id: null,
                name: null,
                email: null,
            },
        }

        this.isAuthenticated = this.isAuthenticated.bind(this);
        this.getUser = this.getUser.bind(this);
    }

    async componentDidMount() {
        await this.isAuthenticated();
        await this.getUser();
    }

    async isAuthenticated() {
        if (this.state.isAuthenticated !== null) {
            return this.state.isAuthenticated
        }

        this.setState({
            isAuthenticated: await Auth.check(),
        });
    }

    async getUser() {
        this.setState({
            user: await Auth.getUser(),
        })
    }

    render() {
        return (
            <nav>
                <Router>
                    { !this.state.isAuthenticated ?
                        <div>
                            <a className="btn btn-xl accentColor" href="/login" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">Login</a>
                            <a className="btn btn-xl accentColor" href="/register" data-whatever="@mdo">Register</a>
                        </div>
                        :
                        <div>
                            <a href="#" className="dropdown-toggle accentColor" id="dropdownMenuOffset"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                { this.state.user.name }
                            </a>
                            <div className="dropdown-menu dropdown-menu-top" aria-labelledby="dropdownMenuOffset">
                                <a className="dropdown-item" href="/my-profile">Mi Perfil</a>
                                <a className="dropdown-item" href="/my-offers">Mis Avisos</a>
                                <a className="dropdown-item" href="/my-bands">Mis Bandas/Musicxs</a>
                            </div>
                            <a className="ml-3 text-dark accentColor" href="/logout">
                                Logout
                            </a>
                        </div>
                    }
                    <LoginForm />
                </Router>
            </nav>
        );
    }
}
