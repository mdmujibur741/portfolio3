<script setup>
        import { Link } from '@inertiajs/inertia-vue3';

        const navigation = [
          { name : "Home", href:"#home" },
          { name : "About", href:"#about" },
          { name : "Portfolio", href:"#portfolio" },
          { name : "Services", href:"#services" },
          { name : "Skill", href:"#skill" },
          { name : "Contact", href:"#contact" },
        ]
</script>
          
<template>
   
  <header class="header sticky-top">
    <nav class="navbar navbar-expand-lg " style="padding: 1% 8%;">
      <div class="container-fluid">
         <img :src="'/storage/logo/logo.jpg'" alt="" srcset="" class="rounded-circle" style="width: 60px; height:60px !important;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
           

             
            <li v-for="(nav , index) in navigation" :key="index" class="nav-item">
              <Link :href="nav.href" class="nav-link bg-light m-1 rounded-2 text-dark" :active="route().current('projects.index')">
                  {{nav.name}}
               </Link>
            </li>
             

          
          

           
         
          </ul>
        </div>
      </div>
    </nav>
</header>
</template>

<style scoped>
header{ 
  background: #f3ece6;
 }

</style>