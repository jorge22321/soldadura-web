<script setup>
import { computed } from 'vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import Banner from '@/Components/Website/Banner.vue';
import QuoteForm from '@/Components/Website/QuoteForm.vue';
import { services } from '@/Data/website';
const props = defineProps({ slug: { type: String, required: true } });
const service = computed(() => services.find(item => item.slug === props.slug));
</script>

<template>
    <MainLayout :title="service.title" active="services">
        <main>
            <Banner :title="service.title.toUpperCase()" :image="service.image" :breadcrumb="false" large />
            <section class="text-page wrap section-space">
                <h2>{{ service.title }}</h2>
                <p v-for="paragraph in service.paragraphs" :key="paragraph">{{ paragraph }}</p>
                <template v-if="service.extras">
                    <p>Nuestro servicio de soldadura TIG incluye:</p>
                    <ul>
                        <li v-for="extra in service.extras" :key="extra">{{ extra }}</li>
                    </ul>
                </template>
            </section>
            <QuoteForm />
        </main>
    </MainLayout>
</template>
