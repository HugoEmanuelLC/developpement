<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <ListMenus msg="List menus"/>
  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue';
import ListMenus from '@/components/ListMenus.vue';

export default {
  name: 'AboutView',
  components: {
    // HelloWorld,
    ListMenus,
  }
}
</script>