<script setup>
import { ref } from 'vue';

const message = ref('');
function submit() {
    message.value = 'Este formulario aún no envía mensajes. Escríbenos a contacto@industriasaldo.com para coordinar tu proyecto.';
}
</script>

<template>
    <form @submit.prevent="submit">
        <slot />
        <p class="form-message" aria-live="polite">{{ message }}</p>
    </form>
</template>
