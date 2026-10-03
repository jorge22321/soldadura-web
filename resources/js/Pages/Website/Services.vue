<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import Banner from '@/Components/Website/Banner.vue';
import ServiceCards from '@/Components/Website/ServiceCards.vue';

</script>

<template>
    <MainLayout title="Servicios" active="services">
        <main>
            <Banner title="SERVICIOS" image="aldo-soldadura.jpeg" :breadcrumb="false" :large="false" />
            <section class="section-space wrap">
                <div class="section-center">
                    <span class="eyebrow">NUESTROS SERVICIOS</span>
                    <h2>Soluciones para Tu Industria</h2>
                </div>
                <ServiceCards />
            </section>
        </main>
    </MainLayout>
</template>
