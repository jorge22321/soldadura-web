<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import BlogCards from '@/Components/Website/BlogCards.vue';
import BlogTabs from '@/Components/Website/BlogTabs.vue';
defineProps({ category: Boolean });
</script>

<template>
    <MainLayout title="Blog de fabricación y soldadura" active="blog" solid>
        <main class="blog-page wrap section-space" :class="{ 'blog-page--category': category }">
            <BlogTabs :category="category" />
            <BlogCards />
        </main>
    </MainLayout>
</template>
