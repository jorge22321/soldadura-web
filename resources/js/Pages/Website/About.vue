<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import Banner from '@/Components/Website/Banner.vue';

</script>

<template>
    <MainLayout title="Nosotros" active="about">
        <main>
            <Banner title="NOSOTROS" image="aldo-taller.jpg" :breadcrumb="true" :large="false" />
            <section class="text-page wrap section-space">
                <h2>Somos Industrias Aldo</h2>
                <p>En Industrias Aldo, la precisión y el trabajo con metales se unen para dar forma a soluciones de fabricación industrial. Atendemos proyectos que necesitan soldadura, preparación de piezas y ensamblaje con una visión práctica de cada aplicación. Desde un componente especial hasta un conjunto de mayor tamaño, nuestro punto de partida es comprender qué necesitas y cómo debe funcionar el resultado.</p>
                <p>Nos interesa que cada etapa tenga un propósito claro. Por eso revisamos la información del proyecto, conversamos sobre los materiales y coordinamos las operaciones antes de iniciar. La comunicación y la preparación permiten organizar el trabajo alrededor de tus requisitos, tanto en una fabricación nueva como en una intervención sobre componentes existentes.</p>
                <h2>Cómo Trabajamos</h2>
                <p>Nuestra propuesta reúne procesos de soldadura TIG, MIG, MAG, FCAW y arco sumergido con servicios de corte, mecanizado e inspección. Cada proyecto tiene condiciones particulares: el tipo de metal, las dimensiones, las uniones y el uso previsto orientan la selección de las operaciones. Evaluamos esa información contigo para definir el alcance del servicio y las características de la entrega.</p>
                <p>El trabajo coordinado facilita que las piezas avancen desde el plano hasta el ensamblaje. Buscamos una relación directa con nuestros clientes, con información comprensible sobre lo que se va a fabricar y los aspectos que necesitan revisión. Ese enfoque nos permite atender cambios y dudas durante el desarrollo, manteniendo una referencia común para todas las etapas del proyecto.</p>
                <h2>¿Por Qué Elegirnos?</h2>
                <ul>
                    <li>
                        <strong>Atención al detalle:</strong> Revisamos dimensiones, materiales y requisitos de unión para organizar el trabajo alrededor de las necesidades de cada componente.</li>
                    <li>
                        <strong>Soluciones a medida:</strong> Partimos de tus planos, referencias y objetivos para plantear una propuesta de fabricación adaptada a la aplicación.</li>
                    <li>
                        <strong>Procesos complementarios:</strong> Integramos preparación, corte, soldadura y mecanizado según las operaciones que requiera el conjunto y el alcance acordado.</li>
                    <li>
                        <strong>Uso del material:</strong> Consideramos la preparación y la secuencia de fabricación para aprovechar los recursos y reducir trabajos repetidos.</li>
                    <li>
                        <strong>Alcance definido:</strong> Coordinamos las características de las piezas, los acabados y las condiciones de entrega antes de iniciar la fabricación.</li>
                    <li>
                        <strong>Comunicación cercana:</strong> Escuchamos tus necesidades, aclaramos la información técnica y revisamos contigo los cambios que puedan surgir durante el trabajo.</li>
                </ul>
                <blockquote>“Cada proyecto empieza con una idea. En Industrias Aldo trabajamos contigo para convertirla en una solución metálica, cuidando la preparación, las uniones y los detalles de cada pieza.”</blockquote>
            </section>
        </main>
    </MainLayout>
</template>
