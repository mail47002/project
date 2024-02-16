<template>
    <div>
        <NavBar />
        <Sidebar />
        <slot />    
        <Footer />
    </div>
</template>

<script>
import NavBar from './NavBar.vue';
import Sidebar from './Sidebar.vue';
import Footer from './Footer.vue';

export default {
    components: { 
        NavBar, 
        Sidebar, 
        Footer, 
    },
    mounted() {
        document.body.classList.remove('blank-page');
    },
}
</script>