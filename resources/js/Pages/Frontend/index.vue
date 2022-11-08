<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import FrontendLayoutVue from '@/Layouts/FrontendLayout.vue';
import Hero from '@/Components/Frontend/Hero.vue';
import About from '@/Components/Frontend/About.vue';
import Skill from '@/Components/Frontend/Skills.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';
import Services from '@/Components/Frontend/Services.vue';
import Contact from '@/Components/Frontend/Contact.vue';

defineProps({
    skills: Object,
    projects: Object
})


</script>

<template>
    

     <FrontendLayoutVue>
        <!-- Header Or Nav  Section Start-->
              <Hero/>

              <!-- About Section Start  -->
               <About/>

               <!-- Skill Section start -->
               <Skill :skills="skills"/>

               <!-- Portfolio Section Start -->
               <Portfolio :projects="projects"/>

               <!-- Services Section Start -->
                <Services/>

                <!-- Contact Section Start -->
                <Contact/>
     </FrontendLayoutVue>
      
</template>
/