<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import ActionSection from '../../Components/ActionSection.vue';
import DialogModal from '../../Components/DialogModal.vue';
import { ref } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';
import SecondaryButton from '../../Components/SecondaryButton.vue';

const data = defineProps({
    category: Object
});

const form = useForm(
    {
        name: data.category.name,
        type: data.category.type,
        id: data.category.id,
    }
);

function enviar()
{
    form.delete(route('category.destroy', data.category.id));
}

const showDialog = ref(false);
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
                            <Link class="m-2 py-2 px-4 bg-slate-700 hover:bg-slate-400 rounded text-white"
                            v-bind:href="route('category.index')" as="button">Volver</Link>
                            <SecondaryButton class="m-2 py-2 px-4 bg-red-700 hover:bg-red-400 rounded text-white"
                            @click="showDialog = true">Eliminar</SecondaryButton>
                        </template>
                    </ActionSection>
                </div>
            </template>       
    </AppLayout>  

    <DialogModal v-bind:show="showDialog"> 
        <template #title>Eliminar</template>
        <template #content> ¿Seguro que quieres eliminar esta categoría? "{{category.name}}"</template>
        <template #footer>
            <SecondaryButton @click="enviar">Si</SecondaryButton>
            <SecondaryButton @click="showDialog = false">Cancelar</SecondaryButton>
        </template>
    </DialogModal> 
</template>