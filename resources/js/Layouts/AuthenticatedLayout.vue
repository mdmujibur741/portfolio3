<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="mainPage">
        <div class="">
            <div v-if="$page.props.flash.message" class="alert alert-light shadow" role="alert">
                <h4 class="text-center text-success">   {{ $page.props.flash.message }}</h4>
              </div>

              <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                   
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-lg-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                     
                        <li class="nav-item">
                        <NavLink :href="route('dashboard')" class="nav-link m-1 rounded-2 text-dark" :active="route().current('dashboard')">
                            Dashboard
                        </NavLink>
                    </li>
                      <li class="nav-item">
                        <NavLink :href="route('projects.index')" class="nav-link m-1 rounded-2 text-dark" :active="route().current('projects.index')">
                            Project
                         </NavLink>
                      </li>
                       

                      <li class="nav-item">
                        <NavLink :href="route('skills.index')" class="nav-link m-1 rounded-2 text-dark" :active="route().current('skills.index')">
                            Skill
                         </NavLink>
                      </li>

                      <li class="nav-item">
                        <NavLink :href="route('web.home')" class="nav-link m-1 rounded-2 text-dark">
                          Website
                        </NavLink>
                      </li>

                      <li class="nav-item">
                        <NavLink :href="route('logout')" class="nav-link m-1 rounded-2 text-dark" method="post">
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
             background: rgb(215, 222, 241);
             min-height: 100vh;
}
.navbar{
               background: rgb(31, 100, 156);
}
.nav-link{
                background: rgb(228, 207, 239);
}
.nav-link:hover{
                background: #d7def1;
}
 
</style>
