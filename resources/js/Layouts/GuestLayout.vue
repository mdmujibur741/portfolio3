<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="">
                   <div class="container-fluid">
                         <div class="row justify-content-center mt-5">
                            <div class="col-md-5 guestForm rounded-4 shadow p-5">
                              <div class="">
                                <div class="mt-6 px-6 py-4 bg-white overflow-hidden">
                                    <slot />
                                </div>
                              </div>
                        </div>
                         </div>
                   </div>

    </div>
</template>
