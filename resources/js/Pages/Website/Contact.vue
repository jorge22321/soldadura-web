<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import Banner from '@/Components/Website/Banner.vue';
import LocalForm from '@/Components/Website/LocalForm.vue';

</script>

<template>
    <MainLayout title="Contacto" active="contact">
        <main>
            <Banner title="CONTACTO" image="aldo-taller.jpg" :breadcrumb="true" :large="false" />
            <section class="wrap contact-layout section-space">
                <div class="contact-card">
                    <h2>Contacto:</h2>
                    <div>
                        <h3>Consultas:</h3>
                        <a href="mailto:contacto@industriasaldo.com">Coordina una consulta</a>
                        <h3>Correo:</h3>
                        <a href="mailto:contacto@industriasaldo.com">contacto@industriasaldo.com</a>
                        <h3>Visitas:</h3>
                        <p>Atención a proyectos industriales.<br />Visitas con coordinación previa.</p>
                    </div>
                </div>
                <LocalForm class="contact-form">
                    <h2>Hablemos de tu proyecto</h2>
                    <div class="form-grid">
                        <label>Nombre<input type="text" name="firstName" placeholder="Nombre" />
                        </label>
                        <label>Apellido<input type="text" name="lastName" placeholder="Apellido" />
                        </label>
                        <label>Correo*<input type="email" name="email" placeholder="Correo" required />
                        </label>
                        <label>Teléfono<input type="tel" name="phone" placeholder="Teléfono" />
                        </label>
                        <label class="full-span">Mensaje*<textarea name="message" placeholder="Mensaje" rows="5" required>
                            </textarea>
                        </label>
                    </div>
                    <button class="button button--yellow" type="submit">Enviar</button>
                </LocalForm>
            </section>
        </main>
    </MainLayout>
</template>
