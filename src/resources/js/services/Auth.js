import Axios from 'axios';

export class User {
    id;
    name;
    email;
}

export default class Auth {
    static user;

    static login(email, password) {
        return Axios.post(
            '/login',
            { email: email, password: password },
        )
            .then(response => {
                console.log('response /login===>', response);
                console.log('response.data /login===>', response.data);
                return response.data;
            }).catch(error => {
                return error.response.data;
        });
    }

    static async check(){
        return Axios.get('/check-auth').then(response => {
            return response.data;
        });
    }

    static async getUser() {
        if (this.user) {
            return this.user;
        }
        return Axios.get('/user').then(response => {
            this.user = new User();
            this.user.id = response.data.id;
            this.user.name = response.data.name;
            this.user.email = response.data.em
            return this.user;
        });
    }
}
