<script setup>
import LocalForm from './LocalForm.vue';
import { services } from '@/Data/website';
</script>

<template>
    <section class="quote-section" style="--quote-image:url('/images/website/aldo-corte.jpg')">
        <div class="wrap quote-layout">
            <div class="quote-heading">
                <span class="eyebrow">CUÉNTANOS QUÉ NECESITAS</span>
                <h2>Cotiza Tu Proyecto</h2>
            </div>
            <LocalForm class="quote-form">
                <div class="form-grid">
                    <label>Nombre<input type="text" name="firstName" placeholder="Nombre" required />
                    </label>
                    <label>Apellido<input type="text" name="lastName" placeholder="Apellido" required />
                    </label>
                    <label class="phone-field">Teléfono<span aria-hidden="true">◎⌄</span>
                        <input type="tel" name="phone" placeholder="Teléfono" />
                    </label>
                    <label>Correo<input type="email" name="email" placeholder="Correo" required />
                    </label>
                    <label>Dirección<input type="text" name="address" placeholder="Dirección" />
                    </label>
                    <label>Tipo de servicio<select name="service" required>
                            <option value="">Tipo de servicio</option>
                            <option v-for="service in services" :key="service.slug">{{ service.title }}</option>
                        </select>
                    </label>
                    <label>Fecha<input type="date" name="date" />
                    </label>
                    <label>Hora<input type="time" name="time" />
                    </label>
                    <button class="button quote-submit" type="submit">Enviar</button>
                </div>
            </LocalForm>
        </div>
    </section>
</template>
