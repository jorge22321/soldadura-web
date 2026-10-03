<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { onMounted, onBeforeUnmount, ref, watch } from 'vue';
import { services } from '@/Data/website';
defineProps({ active: String, solid: Boolean });
const page = usePage();
const scrolled = ref(false);
const menuOpen = ref(false);
const links = [
    { key: 'home', route: 'home', label: 'INICIO' },
    { key: 'about', route: 'about', label: 'NOSOTROS' },
    { key: 'services', route: 'services.index', label: 'SERVICIOS' },
    { key: 'projects', route: 'projects', label: 'PROYECTOS' },
    { key: 'faq', route: 'faq', label: 'FAQ' },
    { key: 'blog', route: 'blog.index', label: 'BLOG' },
];
function updateScroll() { scrolled.value = window.scrollY > 100; }
watch(() => page.url, () => { menuOpen.value = false; });
onMounted(() => { updateScroll(); window.addEventListener('scroll', updateScroll, { passive: true }); });
onBeforeUnmount(() => window.removeEventListener('scroll', updateScroll));
</script>

<template>
    <div class="site-navigation">
        <div class="creator-bar">
            <span>INDUSTRIAS <span class="creator-light">ALDO</span>
            </span>
            <span>Soldadura y fabricación metálica · <Link :href="route('contact')">Hablemos de tu proyecto</Link>
            </span>
        </div>
        <header class="site-header" :class="{ 'site-header--solid': solid, 'is-scrolled': scrolled }">
            <Link class="brand" :href="route('home')">
                <img src="/images/logo.png" alt="Industrias Aldo" />
            </Link>
            <nav class="desktop-nav" aria-label="Navegación principal">
                <template v-for="link in links" :key="link.key">
                    <div v-if="link.key === 'services'" class="nav-dropdown">
                        <Link class="nav-link" :class="{ active: active === link.key }" :href="route(link.route)">{{ link.label }}<span class="chevron">⌄</span>
                        </Link>
                        <div class="dropdown-panel">
                            <Link v-for="service in services" :key="service.slug" :href="route('services.show', service.slug)">{{ service.title }}</Link>
                        </div>
                    </div>
                    <Link v-else class="nav-link" :class="{ active: active === link.key }" :href="route(link.route)">{{ link.label }}</Link>
                </template>
                <Link class="nav-contact" :class="{ 'nav-contact--active': active === 'contact' }" :href="route('contact')">CONTACTO</Link>
            </nav>
            <button class="menu-toggle" type="button" aria-label="Abrir menú" aria-controls="mobile-navigation" :aria-expanded="menuOpen" @click="menuOpen = !menuOpen">
                <span>
                </span>
                <span>
                </span>
                <span>
                </span>
            </button>
        </header>
        <nav id="mobile-navigation" class="mobile-nav" :class="{ 'is-open': menuOpen }" aria-label="Navegación móvil">
            <Link v-for="link in links" :key="link.key" :href="route(link.route)">{{ link.label }}</Link>
            <Link :href="route('contact')">CONTACTO</Link>
        </nav>
        <div v-if="solid" class="header-spacer">
        </div>
    </div>
</template>
