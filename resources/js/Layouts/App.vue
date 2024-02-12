<template>
    <div>
        <Sidebar />

    </div>
    <div>
        <Navbar />
    </div>
    <div>
        <Footer />
    </div>
  </template>

  <script>
import Sidebar from '@/Components/Main/Sidebar.vue'
import Navbar from '@/Components/Main/Navbar.vue'
import Footer from '@/Components/Main/Footer.vue'

export default {
    components: {
      Sidebar,
      Navbar,
      Footer
    }
}

  </script>

  <style scoped>
  /* Your scoped styles here */
  </style>
