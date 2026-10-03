<script setup>
import { Link } from '@inertiajs/vue3';
import { services, imageUrl } from '@/Data/website';
</script>

<template>
    <div class="service-grid">
        <article v-for="service in services" :key="service.slug" class="service-card">
            <Link class="service-image" :href="route('services.show', service.slug)">
                <img :src="imageUrl(service.image)" :alt="service.title" loading="lazy" />
            </Link>
            <div class="service-card-content">
                <h3>{{ service.title }}</h3>
                <p>{{ service.description }}</p>
                <Link class="text-link" :href="route('services.show', service.slug)">Conoce este servicio <span>↗</span>
                </Link>
            </div>
        </article>
    </div>
</template>
