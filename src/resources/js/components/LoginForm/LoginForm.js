import React, { Component } from 'react';
import { Redirect } from 'react-router-dom';
import Auth from '../../services/Auth';

export default class LoginForm extends Component {
    constructor(props) {
        super(props);
        this.state = {
            isAuthenticated: null,
            email: '',
            password: '',
            authErrors: {
                email: null,
                password: null,
            }
        }

        this.handleEmailInputChange = this.handleEmailInputChange.bind(this);
        this.handlePasswordInputChange = this.handlePasswordInputChange.bind(this);
        this.loginSubmit = this.loginSubmit.bind(this);
    }

    handleEmailInputChange(event) {
        this.setState({ email: event.target.value });
    }

    handlePasswordInputChange(event) {
        this.setState({ password: event.target.value });
    }

    async loginSubmit(event) {
        event.preventDefault();
        const result = await Auth.login(this.state.email, this.state.password);
        console.log('result==>', result);
        if (result.errors) {
            this.setState({
                authErrors: {
                    email: result.errors.email ?? null,
                    password: result.errors.password ?? null,
                }
            });
            return;
        }
        this.setState({
            authErrors: { email: null, password: null }
        });
        if (result.id) {
            window.location.href = '/offer-list';
        }
    }

    // async isAuthenticated() {
    //     return await Auth.check()
    // }

    render() {
        return(
            <div className="modal fade" id="loginModal" tabIndex="-1" role="dialog"
                 aria-labelledby="loginModalLabel"
                 aria-hidden="true">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5 className="modal-title" id="exampleModalLabel">Login</h5>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form onSubmit={ this.loginSubmit }>
                            <div className="modal-body">
                                <div className="form-group row">
                                    <label htmlFor="email" className="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                    <div className="col-md-6">
                                        <input id="email" type="email" className="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email"
                                               value={ this.state.email }
                                               onChange={ this.handleEmailInputChange }
                                               required autoFocus/>

                                        { this.state.authErrors.email ??
                                            <span className="invalid-feedback" role="alert">
                                                <strong>{ this.state.authErrors.email }</strong>
                                            </span>
                                        }
                                    </div>
                                </div>

                                <div className="form-group row">
                                    <label htmlFor="password"
                                           className="col-md-4 col-form-label text-md-right">Password</label>
                                    <div className="col-md-6">
                                        <input id="password" type="password" className="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password"
                                               value={ this.state.password }
                                               onChange={ this.handlePasswordInputChange }
                                               required/>
                                        { this.state.authErrors.password ??
                                        <span className="invalid-feedback" role="alert">
                                                <strong>{ this.state.authErrors.password }</strong>
                                            </span>
                                        }
                                    </div>
                                </div>

                                <div className="form-group row">
                                    <div className="col-md-6 offset-md-4">
                                        <div className="form-check">
                                            <input className="form-check-input" type="checkbox" name="remember" id="remember"/>{/*{old('remember') ? 'checked' : ''}*/}
                                            <label className="form-check-label" htmlFor="remember">
                                                Recordarme
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div className="form-group row mb-0">
                                    {/*@if (Route::has('password.request'))*/}
                                    <a className="btn btn-link">{/*href="{{ route('password.request') }}"*/}
                                        Olvidaste tu contraseña?
                                    </a>
                                    {/*@endif*/}
                                </div>

                            </div>
                            <div className="modal-footer">
                                <button type="button" className="btn btn-secondary" data-dismiss="modal">
                                    Cancelar
                                </button>
                                <button type="submit" className="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        );
    }
}
