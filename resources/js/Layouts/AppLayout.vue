<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import NavLink from '@/Shared/NavLink.vue';
</script>

<template>
    <div>
        <nav class="bg-base-100 shadow-lg px-8 py-4">
            <div class="flex justify-between items-center">
                <Link href="/" class="text-xl font-bold">My Portfolio</Link>
                <div class="flex space-x-4">
                    <NavLink href="/" class="px-3 py-2 hover:text-primary transition-colors">Home</NavLink>
                    <NavLink href="/about" class="px-3 py-2 hover:text-primary transition-colors">About</NavLink>
                    <NavLink href="/projects" class="px-3 py-2 hover:text-primary transition-colors">Projects</NavLink>
                    <NavLink href="/contact" class="px-3 py-2 hover:text-primary transition-colors">Contact</NavLink>
                </div>
            </div>
        </nav>
        
        <!-- Page Content -->
        <main>
            <slot />
        </main>
        
        <footer class="footer items-center p-4 bg-neutral text-neutral-content">
            <div class="items-center grid-flow-col">
                <p>Copyright © {{ new Date().getFullYear() }}
                    - All rights reserved</p>
            </div>
        </footer>
    </div>
</template>