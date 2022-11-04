<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import HeaderVue from '@/Components/Frontend/Header.vue';



</script>


<template>
    <div class="main">
            <!-- Header -->
         <div class="">
            <HeaderVue/>
            <main>
               <slot/>
            </main>
         </div>
    </div>
</template>


<style scoped>
       
.main{
                    min-height:100vh ;
                    background: rgb(215, 222, 241);
}

</style>