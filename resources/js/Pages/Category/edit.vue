<script setup>
import AppLayoutVue from '../../Layouts/AppLayout.vue';
import FormSection from '../../Components/FormSection.vue';
import InputLabel from '../../Components/InputLabel.vue';
import TextInput from '../../Components/TextInput.vue';
import InputError from '../../Components/InputError.vue';
import PrimaryButton from '../../Components/PrimaryButton.vue';
import { Link, useForm } from '@inertiajs/vue3';

const data = defineProps({
    category: Object,
});


const form = useForm(
    {
        name: data.category.name,
        type: data.category.type,
    }
);

function enviar()
{
    form.put(route('category.update', data.category.id));
}
</script>

<style>
/*background-color: #0E1BCC;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 100 60'%3E%3Cg %3E%3Crect fill='%230E1BCC' width='11' height='11'/%3E%3Crect fill='%230024d0' x='10' width='11' height='11'/%3E%3Crect fill='%23002cd4' y='10' width='11' height='11'/%3E%3Crect fill='%230032d8' x='20' width='11' height='11'/%3E%3Crect fill='%230038dc' x='10' y='10' width='11' height='11'/%3E%3Crect fill='%23003ee0' y='20' width='11' height='11'/%3E%3Crect fill='%230043e3' x='30' width='11' height='11'/%3E%3Crect fill='%230048e6' x='20' y='10' width='11' height='11'/%3E%3Crect fill='%23004ce9' x='10' y='20' width='11' height='11'/%3E%3Crect fill='%230051ec' y='30' width='11' height='11'/%3E%3Crect fill='%230055ee' x='40' width='11' height='11'/%3E%3Crect fill='%230059f1' x='30' y='10' width='11' height='11'/%3E%3Crect fill='%23005df3' x='20' y='20' width='11' height='11'/%3E%3Crect fill='%230061f5' x='10' y='30' width='11' height='11'/%3E%3Crect fill='%230065f7' y='40' width='11' height='11'/%3E%3Crect fill='%230069f9' x='50' width='11' height='11'/%3E%3Crect fill='%23006dfa' x='40' y='10' width='11' height='11'/%3E%3Crect fill='%230070fb' x='30' y='20' width='11' height='11'/%3E%3Crect fill='%230074fd' x='20' y='30' width='11' height='11'/%3E%3Crect fill='%230077fe' x='10' y='40' width='11' height='11'/%3E%3Crect fill='%23007bff' y='50' width='11' height='11'/%3E%3Crect fill='%23007eff' x='60' width='11' height='11'/%3E%3Crect fill='%230082ff' x='50' y='10' width='11' height='11'/%3E%3Crect fill='%230085ff' x='40' y='20' width='11' height='11'/%3E%3Crect fill='%230088ff' x='30' y='30' width='11' height='11'/%3E%3Crect fill='%23008bff' x='20' y='40' width='11' height='11'/%3E%3Crect fill='%23008fff' x='10' y='50' width='11' height='11'/%3E%3Crect fill='%230092ff' x='70' width='11' height='11'/%3E%3Crect fill='%230095ff' x='60' y='10' width='11' height='11'/%3E%3Crect fill='%230098ff' x='50' y='20' width='11' height='11'/%3E%3Crect fill='%23009bff' x='40' y='30' width='11' height='11'/%3E%3Crect fill='%23009eff' x='30' y='40' width='11' height='11'/%3E%3Crect fill='%2300a1ff' x='20' y='50' width='11' height='11'/%3E%3Crect fill='%2300a4ff' x='80' width='11' height='11'/%3E%3Crect fill='%2300a7fe' x='70' y='10' width='11' height='11'/%3E%3Crect fill='%2300aafe' x='60' y='20' width='11' height='11'/%3E%3Crect fill='%2300adfd' x='50' y='30' width='11' height='11'/%3E%3Crect fill='%2300b0fc' x='40' y='40' width='11' height='11'/%3E%3Crect fill='%2300b3fb' x='30' y='50' width='11' height='11'/%3E%3Crect fill='%2300b6fb' x='90' width='11' height='11'/%3E%3Crect fill='%2300b9fa' x='80' y='10' width='11' height='11'/%3E%3Crect fill='%2300bcf9' x='70' y='20' width='11' height='11'/%3E%3Crect fill='%2300bef8' x='60' y='30' width='11' height='11'/%3E%3Crect fill='%2300c1f7' x='50' y='40' width='11' height='11'/%3E%3Crect fill='%2300c4f6' x='40' y='50' width='11' height='11'/%3E%3Crect fill='%2300c7f5' x='90' y='10' width='11' height='11'/%3E%3Crect fill='%2300c9f5' x='80' y='20' width='11' height='11'/%3E%3Crect fill='%2300ccf4' x='70' y='30' width='11' height='11'/%3E%3Crect fill='%2300cff3' x='60' y='40' width='11' height='11'/%3E%3Crect fill='%2300d1f2' x='50' y='50' width='11' height='11'/%3E%3Crect fill='%2300d4f2' x='90' y='20' width='11' height='11'/%3E%3Crect fill='%2300d7f1' x='80' y='30' width='11' height='11'/%3E%3Crect fill='%2300d9f0' x='70' y='40' width='11' height='11'/%3E%3Crect fill='%2300dcf0' x='60' y='50' width='11' height='11'/%3E%3Crect fill='%2300deef' x='90' y='30' width='11' height='11'/%3E%3Crect fill='%2310e1ef' x='80' y='40' width='11' height='11'/%3E%3Crect fill='%232fe4ee' x='70' y='50' width='11' height='11'/%3E%3Crect fill='%2341e6ee' x='90' y='40' width='11' height='11'/%3E%3Crect fill='%234fe9ee' x='80' y='50' width='11' height='11'/%3E%3Crect fill='%235BEBEE' x='90' y='50' width='11' height='11'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;*/
</style>

<template>
    <AppLayoutVue>
        <template #default>
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <FormSection @submitted="enviar()">
                    <template #title><b>Editar Datos</b></template>
                    <template #description>En este apartado podrás editar datos de la categoria seleccionada</template>
                    <template #form>
                        <div class="col-span-6 sm:col-span-4 bg-slate-200">
                            <InputLabel for="name" value="Nombre: "/>
                            <TextInput type="text" name="name" id="name" v-model="form.name" class="w-full"/>
                            <InputError v-bind:message="form.errors.name">  </InputError>
                        </div>
                        <div class="col-span-6 sm:col-span-4 bg-slate-200">
                            <InputLabel for="type" value="Tipo:"/>
                            <TextInput type="text" name="type" id="type" v-model="form.type" class="w-full"/> 
                            <InputError v-bind:message="form.errors.type"></InputError>
                        </div>
                    </template>
                    <template #actions>
                        <PrimaryButton> Actualizar </PrimaryButton>
                    </template>
                </FormSection>
            </div>
        </template>
    </AppLayoutVue> 
!</template>