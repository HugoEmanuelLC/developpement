<template>
  <nav>
    <router-link to="/">Home</router-link>
    <router-link to="/about">About</router-link>
  </nav>
  <router-view/>
</template>



<style lang="scss">
*{
  color: white;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  transition: 300ms;
}
body{
  background-color: rgba(25, 25, 25);
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  min-height: 100vh;
  border: solid 2px white;
}
.contener{
  background-color: gray;
  min-height: 100%;
}

nav {
  border-bottom: solid 2px red;
  padding: 30px;

  a:first-child{
    border-left: solid 2px yellow;
  }
  a{
    text-decoration: none;
    font-weight: bold;
    color: yellow;
    padding: 10px 20px;
    border-right: solid 2px yellow;

    &.router-link-exact-active {
      color: red;
      text-decoration: underline 2px;
    }
  }
  a:hover{
    color: red;
    background-color: rgb(255, 255, 0,0.6);
  }
}
</style>
