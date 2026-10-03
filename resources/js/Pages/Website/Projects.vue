<script setup>
import { computed, ref } from 'vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import Banner from '@/Components/Website/Banner.vue';
import { projects, imageUrl } from '@/Data/website';
const gallery = ref(null);
const selectedIndex = ref(0);
const selectedProject = computed(() => projects[selectedIndex.value]);
function openProject(index) { selectedIndex.value = index; gallery.value.showModal(); }
function stepProject(step) { selectedIndex.value = (selectedIndex.value + step + projects.length) % projects.length; }
</script>

<template>
    <MainLayout title="Proyectos" active="projects">
        <main>
            <Banner title="PROYECTOS" image="aldo-uniones.jpg" />
            <section class="wrap projects-grid section-space">
                <button v-for="([title, image], index) in projects" :key="title" class="project-card" type="button" :aria-label="title" @click="openProject(index)">
                    <img :src="imageUrl(image)" :alt="title" loading="lazy" />
                    <strong>{{ title }}</strong>
                </button>
            </section>
        </main>
        <dialog ref="gallery" class="project-dialog" aria-label="Galería de proyectos" @click="($event.target === gallery) && gallery.close()" @keydown.left="stepProject(-1)" @keydown.right="stepProject(1)">
            <button class="dialog-close" type="button" aria-label="Cerrar imagen" @click="gallery.close()">×</button>
            <img :src="imageUrl(selectedProject[1])" :alt="selectedProject[0]" />
            <p>{{ selectedProject[0] }}</p>
            <div class="dialog-controls">
                <button type="button" aria-label="Imagen anterior" @click="stepProject(-1)">←</button>
                <button type="button" aria-label="Imagen siguiente" @click="stepProject(1)">→</button>
            </div>
        </dialog>
    </MainLayout>
</template>
