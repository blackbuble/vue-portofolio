<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/AppLayout.vue';

const form = useForm({
    name: '',
    email: '',
    message: ''
});

const submit = () => {
    form.post(route('contact.submit'));
};
</script>

<template>
    <Head title="Contact" />
    <Layout>
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-4xl font-bold mb-8">Contact Me</h1>
            <form @submit.prevent="submit" class="max-w-lg">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" v-model="form.name" class="input input-bordered">
                </div>
                <!-- Add email and message fields similarly -->
                <button type="submit" class="btn btn-primary mt-4">Send Message</button>
            </form>
        </div>
    </Layout>
</template>