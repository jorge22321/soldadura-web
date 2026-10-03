<script setup>
import { Link } from '@inertiajs/vue3';
import { posts, imageUrl } from '@/Data/website';
defineProps({ items: { type: Array, default: () => posts }, compact: Boolean });
</script>

<template>
    <div class="blog-grid">
        <article v-for="post in items" :key="post.slug" class="blog-card">
            <Link :href="route('blog.show', post.slug)">
                <img :src="imageUrl(post.image)" :alt="post.title" loading="lazy" />
            </Link>
            <h3>
                <Link :href="route('blog.show', post.slug)">{{ post.title }}</Link>
            </h3>
            <template v-if="!compact">
                <p>{{ post.excerpt }}</p>
                <Link class="blog-category" :href="route('blog.category')">FABRICACIÓN Y SOLDADURA</Link>
            </template>
        </article>
    </div>
</template>
