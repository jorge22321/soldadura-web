<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import Banner from '@/Components/Website/Banner.vue';
import { questions } from '@/Data/website';
</script>

<template>
    <MainLayout title="Preguntas frecuentes" active="faq">
        <main>
            <Banner title="FAQ" image="aldo-metal.jpg" />
            <section class="faq-section wrap section-space">
                <div class="section-center">
                    <span class="eyebrow">RESOLVEMOS TUS DUDAS</span>
                    <h2>Preguntas Frecuentes</h2>
                </div>
                <div class="faq-list">
                    <details v-for="([question, answer], index) in questions" :key="question">
                        <summary>
                            <span>{{ index + 1 }}. {{ question }}</span>
                            <b>+</b>
                        </summary>
                        <p>{{ answer }}</p>
                    </details>
                </div>
            </section>
        </main>
    </MainLayout>
</template>
