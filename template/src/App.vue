<template>
  <div id="app">
    <HomeComponent/>
    <div class="container-connexion">
      <RegisterComponent />
    </div>
  </div>
</template>

<script>
  import HomeComponent from "./components/HomeComponent";
  import RegisterComponent from "./components/RegisterComponent";
  export default {
    name: 'App',
    components: {
      RegisterComponent,
      HomeComponent

    }
  }
</script>

<style>
  #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;

}
  body{
    font-size: 30px;
    margin: 0;
  }


  .container-connexion{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 700px;
  }
</style>
