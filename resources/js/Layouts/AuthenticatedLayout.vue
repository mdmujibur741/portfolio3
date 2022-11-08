<script setup>
import { ref } from 'vue';
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <div class="mainPage ">
        <div >
            <div v-if="$page.props.flash.message" class="alert alert-light shadow" role="alert">
                <h4 class="text-center text-success">   {{ $page.props.flash.message }}</h4>
              </div>

              <nav class="navbar navbar-expand-lg" style="padding: 1% 8%;">
                <div class="container-fluid">
                   <img :src="'/storage/logo/logo.jpg'" alt="" srcset="" class="rounded-circle" style="width: 60px; height:60px !important;">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                     
                        <li class="nav-item">
                        <NavLink :href="route('dashboard')" class="nav-link bg-light m-1 rounded-2 text-dark" :active="route().current('dashboard')">
                            Dashboard
                        </NavLink>
                    </li>
                      <li class="nav-item">
                        <NavLink :href="route('projects.index')" class="nav-link bg-light m-1 rounded-2 text-dark" :active="route().current('projects.index')">
                            Project
                         </NavLink>
                      </li>
                       

                      <li class="nav-item">
                        <NavLink :href="route('skills.index')" class="nav-link bg-light m-1 rounded-2 text-dark" :active="route().current('skills.index')">
                            Skill
                         </NavLink>
                      </li>

                      <li class="nav-item">
                        <NavLink :href="route('web.home')" class="nav-link bg-light m-1 rounded-2 text-dark">
                          Website
                        </NavLink>
                      </li>

                      <li class="nav-item">
                        <NavLink :href="route('logout')" class="nav-link bg-light m-1 rounded-2 text-dark" method="post">
                           Logout
                        </NavLink>
                      </li>

                     
                   
                    </ul>
                  </div>
                </div>
              </nav>








            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="row">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>


<style scoped>
 
.mainPage{
            
             background: #DEE7EE;
             min-height: 100vh;
}
.navbar{
               background: rgb(171, 205, 231);
}
.nav-link{
                background: rgb(228, 207, 239);
}
.nav-link:hover{
                background: #d7def1;
}
 
</style>
