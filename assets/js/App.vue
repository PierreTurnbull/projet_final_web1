<template>
  <div id="app">
    <navigation></navigation>
    <router-view></router-view>
  </div>
</template>

<script>
import Navigation from "./components/navigation/Navigation";

export default {
  name: 'app',
  components:{
    Navigation
  }
};
</script>
<style>
body {
  background: #000000;
  color: #ffffff;
}
</style>

