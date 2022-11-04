<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>


        <div class="container-fluid">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="">
                      <h3 class="text-center">  You're logged in!</h3>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
