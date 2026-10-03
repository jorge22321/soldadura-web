<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({ category: Boolean });
</script>

<template>
    <div class="blog-tabs">
        <Link :class="{ selected: !category }" :href="route('blog.index')">Todos los artículos</Link>
        <Link :class="{ selected: category }" :href="route('blog.category')">FABRICACIÓN Y SOLDADURA</Link>
    </div>
</template>
