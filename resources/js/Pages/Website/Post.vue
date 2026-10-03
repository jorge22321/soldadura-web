<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import BlogCards from '@/Components/Website/BlogCards.vue';
import BlogTabs from '@/Components/Website/BlogTabs.vue';
import { posts, imageUrl } from '@/Data/website';
const props = defineProps({ slug: { type: String, required: true } });
const post = computed(() => posts.find(item => item.slug === props.slug));
const recentPosts = computed(() => posts.filter(item => item.slug !== props.slug));
</script>

<template>
    <MainLayout :title="post.title" active="blog" solid>
        <main class="post-page wrap section-space">
            <BlogTabs />
            <article class="post-article">
                <div class="post-meta">◉ &nbsp; Industrias Aldo · Fabricación metálica · 1 min de lectura</div>
                <h1>{{ post.title }}</h1>
                <p>{{ post.intro }}</p>
                <ol>
                    <li v-for="[heading, text] in post.points" :key="heading">
                        <strong>{{ heading }}:</strong> {{ text }}</li>
                </ol>
                <p v-if="post.ending">{{ post.ending }}</p>
                <img :src="imageUrl(post.image)" :alt="post.title" />
                <div class="post-category">FABRICACIÓN Y SOLDADURA</div>
            </article>
            <section class="recent-posts">
                <div class="recent-heading">
                    <h2>Otros Artículos</h2>
                    <Link :href="route('blog.index')">Ver todos</Link>
                </div>
                <BlogCards :items="recentPosts" compact />
            </section>
        </main>
    </MainLayout>
</template>
