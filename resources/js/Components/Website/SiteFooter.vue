<script setup>
import { Link } from '@inertiajs/vue3';
import LocalForm from './LocalForm.vue';
import { services } from '@/Data/website';
</script>

<template>
    <footer class="footer">
        <div class="footer-grid wrap">
            <div class="footer-column footer-subscribe">
                <h3>NOVEDADES</h3>
                <p>Conoce nuestros procesos, consejos y novedades sobre soldadura y fabricación metálica para tu próximo proyecto.</p>
                <LocalForm class="subscribe-form">
                    <label class="sr-only" for="subscribe-email">Tu correo electrónico</label>
                    <input id="subscribe-email" type="email" placeholder="Tu correo electrónico" required />
                    <button class="button button--yellow" type="submit">Enviar</button>
                </LocalForm>
            </div>
            <div class="footer-column">
                <h3>CONTACTO</h3>
                <a href="mailto:contacto@industriasaldo.com">contacto@industriasaldo.com</a>
                <a href="mailto:contacto@industriasaldo.com">Coordina una consulta</a>
                <p>Atención a proyectos industriales.<br />Visitas con coordinación previa.</p>
            </div>
            <div class="footer-column">
                <h3>EXPLORA</h3>
                <Link :href="route('home')">Inicio</Link>
                <Link :href="route('about')">Nosotros</Link>
                <Link :href="route('services.index')">Servicios</Link>
                <Link :href="route('projects')">Proyectos</Link>
                <Link :href="route('blog.index')">Blog</Link>
                <Link :href="route('faq')">FAQ</Link>
                <Link :href="route('contact')">Contacto</Link>
            </div>
            <div class="footer-column">
                <h3>SERVICIOS</h3>
                <Link v-for="service in services" :key="service.slug" :href="route('services.show', service.slug)">{{ service.title }}</Link>
            </div>
        </div>
        <div class="footer-bottom wrap">
            <div>
                <Link class="brand" :href="route('home')">
                    <img src="/images/logo.png" alt="Industrias Aldo" />
                </Link>
                <p>Soldadura y fabricación para tu industria.</p>
            </div>
            <span>© {{ new Date().getFullYear() }} Industrias Aldo. Soluciones en metal.</span>
        </div>
    </footer>
</template>
