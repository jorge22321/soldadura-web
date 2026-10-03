<script setup>
import { Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import ServiceCards from '@/Components/Website/ServiceCards.vue';
import BlogCards from '@/Components/Website/BlogCards.vue';
import QuoteForm from '@/Components/Website/QuoteForm.vue';

</script>

<template>
    <MainLayout title="Soldadura y fabricación metálica" active="home">
        <main>
            <section class="home-hero" style="--hero-image:url('/images/website/aldo-taller.jpg')">
                <div class="wrap hero-layout">
                    <div class="hero-copy">
                        <span class="eyebrow">PRECISIÓN EN CADA UNIÓN</span>
                        <h1>Unimos Tu Visión con Precisión</h1>
                        <p>En Industrias Aldo transformamos metal en soluciones para tu industria. Soldadura, corte y fabricación a medida para dar forma a tu próximo proyecto.</p>
                        <div class="hero-actions">
                            <Link class="button button--yellow" :href="route('services.index')">Servicios</Link>
                            <Link class="button button--outline" :href="route('contact')">Contacto</Link>
                        </div>
                    </div>
                    <div class="hero-portrait">
                        <img src="/images/quienes-somos-industrial.jpeg" alt="Especialista en soldadura industrial" />
                        <div class="trusted-seal" aria-label="Precisión industrial">
                            <svg viewBox="0 0 200 200" role="img" aria-hidden="true">
                                <defs>
                                    <path id="trust-ring" d="M100,100 m-72,0 a72,72 0 1,1 144,0 a72,72 0 1,1 -144,0"/>
                                </defs>
                                <text>
                                    <textPath href="#trust-ring">PRECISIÓN INDUSTRIAL ★ SOLDADURA ★ </textPath>
                                </text>
                                <path class="helmet" d="M66 117h68v11H66zM74 111c0-15 9-29 22-32v26h8V79c13 3 22 17 22 32zM92 73h16v8H92z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
            <section class="stats-band" style="--stats-image:url('/images/website/aldo-uniones.jpg')">
                <div class="stats-grid wrap">
                    <div>
                        <svg viewBox="0 0 48 48" aria-hidden="true">
                            <rect x="6" y="7" width="29" height="35"/>
                            <path d="M12 14h5m5 0h5m-15 8h5m5 0h5m-15 8h5m5 0h5M35 18h7v24H6"/>
                        </svg>
                        <span class="stats-copy">
                            <strong>TIG</strong>
                            <span>Precisión y acabado</span>
                        </span>
                    </div>
                    <div>
                        <svg viewBox="0 0 48 48" aria-hidden="true">
                            <rect x="7" y="5" width="34" height="38"/>
                            <path d="M12 34h24M15 28l7-7 5 4 7-9M14 11h20"/>
                        </svg>
                        <span class="stats-copy">
                            <strong>MIG</strong>
                            <span>Fabricación metálica</span>
                        </span>
                    </div>
                    <div>
                        <svg viewBox="0 0 48 48" aria-hidden="true">
                            <circle cx="16" cy="33" r="8"/>
                            <path d="M16 21V6l7 6 7-8 7 7-7 17-9-8M12 33h8m-4-4v8"/>
                        </svg>
                        <span class="stats-copy">
                            <strong>SAW</strong>
                            <span>Uniones continuas</span>
                        </span>
                    </div>
                    <div>
                        <svg viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M10 34a14 14 0 0 1 28 0M6 34h36v7H6zM15 30V18a9 9 0 0 1 18 0v12M24 9v12"/>
                        </svg>
                        <span class="stats-copy">
                            <strong>CNC</strong>
                            <span>Corte y mecanizado</span>
                        </span>
                    </div>
                </div>
            </section>
            <section class="about-preview wrap section-space">
                <div class="about-visual">
                    <div class="client-badge">
                        <strong>100%</strong>
                        <span>Enfoque a medida</span>
                    </div>
                    <img class="about-main" src="/images/website/aldo-metal.jpg" alt="Preparación de un proyecto industrial" />
                    <div class="about-video">
                        <img src="/images/website/aldo-uniones.jpg" alt="Soldadura de uniones metálicas en taller" loading="lazy" />
                    </div>
                </div>
                <div class="section-copy">
                    <span class="eyebrow">PRECISIÓN EN CADA UNIÓN</span>
                    <h2>Somos Industrias Aldo</h2>
                    <p>En Industrias Aldo damos forma a soluciones metálicas para cada necesidad. Combinamos preparación, soldadura y mecanizado con atención al detalle. Desde una pieza especial hasta un conjunto industrial, trabajamos contigo para definir los materiales, los acabados y el alcance de tu proyecto.</p>
                    <Link class="button button--yellow" :href="route('about')">Conoce Nuestra Empresa</Link>
                </div>
            </section>
            <section class="testimonials section-space">
                <div class="wrap">
                    <div class="section-center">
                        <span class="eyebrow">CUIDAMOS CADA ETAPA DEL TRABAJO</span>
                        <h2>Compromiso en Cada Unión</h2>
                    </div>
                    <div class="testimonial-grid">
                        <article class="testimonial-card">
                            <strong>Precisión</strong>
                            <span class="stars" aria-hidden="true">— ◆ —</span>
                            <p>Cada pieza parte de una medida y una función. Cuidamos los detalles del trabajo para responder a los requisitos de tu proyecto.</p>
                        </article>
                        <article class="testimonial-card">
                            <strong>Preparación</strong>
                            <span class="stars" aria-hidden="true">— ◆ —</span>
                            <p>Revisamos materiales, planos y secuencias de armado antes de fabricar. Una preparación ordenada acompaña cada etapa y facilita el desarrollo de las piezas.</p>
                        </article>
                        <article class="testimonial-card">
                            <strong>Comunicación</strong>
                            <span class="stars" aria-hidden="true">— ◆ —</span>
                            <p>Definimos contigo el alcance, los acabados y la entrega. Mantenemos una comunicación clara para coordinar las necesidades de tu proyecto industrial.</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class="section-space wrap">
                <div class="section-center">
                    <span class="eyebrow">IDEAS PARA TU PRÓXIMO PROYECTO</span>
                    <h2>Conoce Nuestro Blog</h2>
                </div>
                <BlogCards />
            </section>
            <QuoteForm />
            <section class="instagram-section section-space wrap">
                <div class="instagram-strip">
                    <img src="/images/website/aldo-uniones.jpg" alt="Trabajo de soldadura industrial" loading="lazy" />
                    <img src="/images/website/aldo-corte.jpg" alt="Componentes metálicos a medida" loading="lazy" />
                    <img src="/images/website/aldo-metal.jpg" alt="Planificación de piezas industriales" loading="lazy" />
                </div>
                <div class="instagram-label">
                    <h2>El Metal Toma Forma Aquí</h2>
                    <Link :href="route('projects')">Explora nuestros procesos ↗</Link>
                </div>
            </section>
            <section class="team-section section-space">
                <div class="wrap">
                    <div class="section-center">
                        <span class="eyebrow">DE LA IDEA AL ENSAMBLAJE</span>
                        <h2>Cada Etapa Cuenta</h2>
                    </div>
                    <div class="team-grid">
                        <article>
                            <div>
                                <h3>Preparación</h3>
                                <span>Proceso industrial</span>
                            </div>
                            <img src="/images/website/aldo-metal.jpg" alt="Preparación" loading="lazy" />
                        </article>
                        <article>
                            <div>
                                <h3>Soldadura</h3>
                                <span>Proceso industrial</span>
                            </div>
                            <img src="/images/quienes-somos-industrial.jpeg" alt="Soldadura" loading="lazy" />
                        </article>
                        <article>
                            <div>
                                <h3>Corte</h3>
                                <span>Proceso industrial</span>
                            </div>
                            <img src="/images/website/aldo-corte.jpg" alt="Corte" loading="lazy" />
                        </article>
                        <article>
                            <div>
                                <h3>Mecanizado</h3>
                                <span>Proceso industrial</span>
                            </div>
                            <img src="/images/website/aldo-mecanizado.jpg" alt="Mecanizado" loading="lazy" />
                        </article>
                    </div>
                </div>
            </section>
            <section class="services-section section-space wrap">
                <div class="section-center">
                    <span class="eyebrow">NUESTROS SERVICIOS</span>
                    <h2>Soluciones para Tu Industria</h2>
                </div>
                <ServiceCards />
            </section>
        </main>
    </MainLayout>
</template>
