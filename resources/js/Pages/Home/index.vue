<template>
     <AppLayouts>
        <div class="g-sidenav-show   bg-gray-100">

      <Sidebar/>
      <div>
        <Navbar />
      </div>

      <div class="main-content position-relative border-radius-lg ">
    <Footer/>
    </div>
    </div>
     </AppLayouts>

</template>


<script>
  import AppLayouts from '@/Layouts/App.vue';

export default {
    components: {
      AppLayouts
    },
};


</script>


