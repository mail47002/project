<template>
    <div>
        <ClubNavBar />
        <ClubSidebar />
        <slot />    
        <ClubFooter />
    </div>
</template>

<script>
import ClubNavBar from './ClubNavBar.vue';
import ClubSidebar from './ClubSidebar.vue';
import ClubFooter from './ClubFooter.vue';

export default {
    components: { 
        ClubNavBar, 
        ClubSidebar, 
        ClubFooter, 
    },
    mounted() {
        document.body.classList.remove('blank-page');
    },
}
</script>