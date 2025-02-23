<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/AppLayout.vue';

defineProps({
    projects: Array
});
</script>

<template>
    <Head title="Projects" />
    <Layout>
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-4xl font-bold mb-8">My Projects</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div v-for="project in projects" :key="project.id" class="card bg-base-100 shadow-xl">
                    <figure><img :src="project.image_url" :alt="project.title" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ project.title }}</h2>
                        <p>{{ project.description }}</p>
                        <div class="card-actions justify-end">
                            <a 
  :href="project.project_url.startsWith('http') ? project.project_url : `http://${project.project_url}`" 
  target="_blank" 
  class="btn btn-primary"
>View project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>