<template>
    <div>

      <Head :title="title ? title : 'Dashboard'">
      </Head>
      <Sidebar />
      <div class="main-content" id="panel">
        <div class="ml--6 fixed-content">
          <Navbar />
        </div>
        <div class="fixed-content">
          <slot name="header" />
        </div>
        <div class="container-fluid mt--6 fixed-content">
          <div class="mt-4">
            <slot name="content" />
          </div>
        </div>
      </div>
      <div class="container">
        <Footer />
      </div>
      <slot name="modals" />
      <slot name="loader" />
    </div>
  </template>

  <script>
  import Sidebar from '@/Components/Main/Sidebar.vue'
  import Navbar from '@/Components/Main/Navbar.vue'
//   import Footer from '@/Components/Main/Footer.vue'

  export default {
    components: {
      Sidebar,
      Navbar,
    //   Footer,
    }
  }
  </script>

  <style scoped>
  .footer {}
  </style>
