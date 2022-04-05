<template>
  <layout>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <p>This is Dashboard, welcome {{ fcar }},{{ lcar }} </p>
              </div>
          </div>
        </div>
  </layout>
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
