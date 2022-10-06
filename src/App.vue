<template>
  <nav>
    <router-link to="/">Home</router-link>
    <router-link to="/about">About</router-link>
    <router-link to="/dashboard">Dashboard</router-link>
  </nav>
  <router-view/>
</template>

<style lang="scss">
  
/*  GENERAL  */

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
// body{
//   border: solid 2px red;
// }
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}


/*NAVBAR*/

nav {
  background-color: blue;
  border-bottom: solid 4px red;
  display: flex;
  justify-content: center;
  align-items: center;

  a:first-child{
    border-left: 1px solid gray ;
  }
  a {
    font-weight: bold;
    color: white;
    padding: 20px 30px;
    border-right: 1px solid gray ;
    text-decoration: none;

    &.router-link-exact-active {
      background-color: darkblue;
      transition: 300ms;
      color: #42b983;
      text-decoration: underline;
    }
  }
}
</style>
