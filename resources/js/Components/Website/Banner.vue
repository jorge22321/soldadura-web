<script setup>
import { Link } from '@inertiajs/vue3';
import { imageUrl } from '@/Data/website';
defineProps({ title: String, image: String, breadcrumb: { type: Boolean, default: true }, large: Boolean });
</script>

<template>
    <section class="page-banner" :class="{ 'page-banner--large': large }" :style="{ '--banner-image': 'url(' + imageUrl(image) + ')' }">
        <div class="banner-inner">
            <h1>{{ title }}<span class="yellow-dot">.</span>
            </h1>
            <div v-if="breadcrumb" class="breadcrumb">
                <Link :href="route('home')">INICIO</Link>
                <span>/</span>
                <span>{{ title }}</span>
            </div>
        </div>
    </section>
</template>
