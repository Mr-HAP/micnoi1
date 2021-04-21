import React, { Component } from 'react';
import { BrowserRouter as Router } from 'react-router-dom';

export default class LoginMenu extends Component {
    render() {
        return (
            <nav>
                <Router>
                    {/*if is a guess */}
                    <a className="btn btn-xl accentColor" href="/login" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">Login</a>
                    <a className="btn btn-xl accentColor" href="/register" data-whatever="@mdo">Register</a>
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
                                <form method="POST" action="/login">
                                    <div className="modal-body">

                                        {/*@csrf*/}

                                        <div className="form-group row">
                                            <label htmlFor="email" className="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                            <div className="col-md-6">
                                                <input id="email" type="email" className="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autoFocus/>

                                                {/*@if ($errors->has('email'))*/}
                                                <span className="invalid-feedback" role="alert">
                                                        {/*<strong>{{$errors->first('email')}}</strong>*/}
                                                    </span>
                                                {/*@endif*/}
                                            </div>
                                        </div>

                                        <div className="form-group row">
                                            <label htmlFor="password"
                                                   className="col-md-4 col-form-label text-md-right">Password</label>
                                            <div className="col-md-6">
                                                <input id="password" type="password" className="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
                                                {/*@if ($errors->has('password'))*/}
                                                <span className="invalid-feedback" role="alert">
                                                        {/*<strong>{{$errors->first('password')}}</strong>*/}
                                                    </span>
                                                {/*@endif*/}
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
                    {/*if is not a guess*/}
                </Router>
            </nav>
        );
    }
}
