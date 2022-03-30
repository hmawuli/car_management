<template>
  <div>
      <p>This is Dashboard, welcome {{ fcar }},{{ lcar }} </p>
  </div>
</template>

<script>
//import { component } from 'vue/types/umd'
import Layout from "./../../Shared/Layout.vue";
export default {

    components:{
      Layout
    },
    props: ['fcar','lcar']
}
</script>

<style>

</style>
