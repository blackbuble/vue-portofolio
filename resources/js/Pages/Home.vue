<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <Head title="Home" />
    <Layout>
        <section class="hero min-h-screen bg-base-200">
            <div class="hero-content text-center">
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold">John Doe</h1>
                    <p class="py-6">Full Stack Developer & UI Designer</p>
                    <Link href="/projects" class="btn btn-primary">View My Work</Link>
                </div>
            </div>
        </section>
    </Layout>
</template>