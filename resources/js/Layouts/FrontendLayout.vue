<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import HeaderVue from '@/Components/Frontend/Header.vue';
import FooterVue from '@/Components/Frontend/Footer.vue';



</script>


<template>
    <div class="main">
            <!-- Header -->
         <div class="">
            <HeaderVue/>
            <main>
               <slot/>
            </main>
           <FooterVue/>
         </div>
    </div>
</template>


<style scoped>
       
.main{
                    min-height:100vh ;
                    background: rgb(215, 222, 241);
}

</style>