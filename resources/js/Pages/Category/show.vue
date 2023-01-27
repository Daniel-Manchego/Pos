<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import ActionSection from '../../Components/ActionSection.vue';
defineProps({
    category: Object
});
</script>

<template>
    <AppLayout>
            <template #header>Titulo</template>
            <template #default>
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <ActionSection>
                        <template #title> Categoria</template>
                        <template #description> Lista Detallada de la Categoria</template>
                        <template #content>
                            <p>Nombre: {{ category.name }}</p>
                            <p>Tipo: {{ category.type }}</p>
                        </template>
                    </ActionSection>
                </div>
            </template>       
    </AppLayout>      
</template>