<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Link 
        class="px-4 py-2 hover:text-primary transition-colors"
        active-class="text-primary font-bold"
    >
        <slot />
    </Link>
</template>