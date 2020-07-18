<template>

    <div class="container-nav">
        <h1 id="title">Doggy dog</h1>
        <div class="container-liste">
            <ul>
                <li><a href="connexion">connexion</a></li>
                <li><a href="home">home</a></li>
                <li><a href="contact">contact</a></li>
            </ul>
        </div>
    </div>






</template>

<script>
    export default {
        name: "HomeComponent",
    }
</script>

<style scoped>
    #title{
        margin-left: 1em;
    }

    li{
        list-style: none;
    }
    a {
        text-decoration: none;
        color: #2c3e50;
        font-size:2rem;
    }

    .container-nav{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background: #d7cca5;
        align-items: center;
    }
    ul{
        display: flex;


    }
    .container-liste{
        padding-right: 5rem;
    }
    li  {
            padding-left: 5rem;
    }

</style>
