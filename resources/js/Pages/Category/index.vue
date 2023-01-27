<script setup>
import AppLayoutVue from '../../Layouts/AppLayout.vue';
import ActionSection from '../../Components/ActionSection.vue';
import { Link } from '@inertiajs/vue3';
defineProps({
    categories:Array
});
</script>

<template>
    <AppLayoutVue>
        <template #header>    
            <Link class="m-5 p-5 bg-indigo-400 hover:bg-slate-600 rounded" v-bind:href="route('category.create')"> Nueva Categoria </Link>
        </template>
        <!--<b> Lista Completa </b>         
        <p v-for="juan in categories">
        Nombre: {{ juan.name }} Tipo: {{juan.type}}
        </p>-->

       <!-- <div v-for="category in categories">
            <p>{{ category.name }}</p>
            <p>{{ category.type }}</p>
        </div> -->
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <ActionSection>
            <template #title> Lista de Categorias</template>
            <template #description> Para categorizar Productos</template>
            <template #content>
                <table>
                    <thead>
                        <tr>
                            <td>
                                <b>Nombre</b>
                            </td>
                            <td>
                                <b>Tipo</b>
                            </td>
                            <td>
                                <b> </b>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="category in categories">
                            <td>
                                {{ category.name }}
                            </td>
                            <td>
                                {{ category.type }}
                            </td>
                            <td>
                                <button class="m-7 p-2 bg-slate-800 hover:bg-slate-400 rounded text-white" v-bind:href="route('category.show', category.id)"> Ver Datos </button>
                            </td>
                            <td>
                                <button class="p-2 bg-slate-800 hover:bg-slate-400 rounded text-white" v-bind:href="route('category.show', category.id)"> Editar </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </template>
        </ActionSection>
    </div>

    
    </AppLayoutVue> 
</template>