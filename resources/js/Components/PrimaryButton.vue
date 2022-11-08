<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="px-4 py-2 rounded-3 btn btn-primary text-white text-uppercase">
        <slot />
    </button>
</template>
