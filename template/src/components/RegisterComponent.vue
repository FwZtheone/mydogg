<template>

    <div class="card">
        <div class="container">
            <form
            @submit="checkForm"
            method="post">
                <div class="inputName">
                    <label>Nom</label>
                    <input type="text" placeholder="nom" v-model="name" />
                </div>
                <div class="inputFirstname">
                    <label>Prenom</label>
                    <input type="text" placeholder="prenom" v-model="firstname" />
                </div>
                <div class="inputEmail">
                    <label>Email</label>
                    <input type="text" placeholder="email" v-model="email"/>
                </div>

                <div class="inputEmail">
                    <label>Mot de passe</label>
                    <input type="text" placeholder="mot de passe"  v-model="password"  />
                </div>


                <button  type="submit" class="btn btn-primary" >valider</button>

            </form>

        </div>

    </div>

</template>

<script>


    import axios from 'axios';

    export default {
        name: "RegisterComponent",
        data: () => {
            return {
                name : '',
                firstname : '',
                email : '',
                password: '',
                erros: []
            }
        }, //
        methods: {
            checkForm: function(e){
                if(this.name && this.firstname && this.email && this.password){
                    console.log(`nom : ${this.name}   prenom : ${this.firstname}   email : ${this.email}   password : ${this.password} `);
                    axios.post('http://localhost:8000/api/register', {
                      name: this.name
                    })
                            .then( (data) =>{
                                console.log(data);
                                console.log(this.name);
                            })
                            .catch( e => console.log(e) )
                }
                e.preventDefault();
            },

            bonjour: () => {
                console.log('salut');
            }
        }

    }
</script>

<style scoped>

    .card{
        width: 500px;
        height: 600px;
        background: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .btn{
        padding: 10px;
        width: 100px;
    }

    .btn-primary{
        background: #1e55cd;
        color: white;
        font-size: 1rem;
        border-color: #1e55cd;
        border-radius: 5px;

    }


    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }

    .inputEmail, .inputName, .inputFirstname{
        display: flex;
        flex-direction: column;


    }
    /* On mouse-over, add a deeper shadow */


    form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;


    }

    input{
        margin: 1rem 0;
        padding: 5px;
        border-radius: 10px;
    }
    input:focus{
        margin: 1rem 0;
        padding: 5px;
        border-radius: 10px;

    }

</style>
