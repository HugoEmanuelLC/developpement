<template>
  <div class="home">
    <!--<img alt="Vue logo" src="../assets/logo.png">-->
    <HelloWorld msg="Welcome to Your Vue.js App"/>
    <ListMenus msg="List menus"/>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue';
import ListMenus from '@/components/ListMenus.vue';

export default {
  name: 'HomeView',
  components: {
    HelloWorld,
    ListMenus,
  }
}
</script>



<style scoped lang="scss">



</style>