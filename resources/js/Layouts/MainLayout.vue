<script setup>
import { Head } from '@inertiajs/vue3';
import SiteHeader from '@/Components/Website/SiteHeader.vue';
import SiteFooter from '@/Components/Website/SiteFooter.vue';
import '../../css/website.css';
defineProps({ title: String, active: String, solid: Boolean });
</script>

<template>
    <div class="marketing-site">
        <Head :title="title">
            <meta name="description" content="Industrias Aldo: soldadura TIG, MIG y arco sumergido, corte láser, mecanizado y fabricación metálica para tu proyecto industrial." />
        </Head>
        <SiteHeader :active="active" :solid="solid" />
        <slot />
        <SiteFooter />
    </div>
</template>
