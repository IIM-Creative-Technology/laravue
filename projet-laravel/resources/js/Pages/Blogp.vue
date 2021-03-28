<template>
    <app-layout>
        <template #header>
            <div class="top">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projets
                </h2>
                <button class="buttonn create">
                    <a href="/projets/create">
                    + Créer un projet
                    </a>
                </button>
            </div>

        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <projet-list :projets="projets"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import ProjetList from "@/Components/Projet/ProjetList";

    export default {
        props: ['projets'],

        components: {
            AppLayout,
            ProjetList,
        },
    }
</script>

<style>
.top{
    display: flex;
    justify-content: space-between;
}

.buttonn{
    border-radius: 5px;
    height: 40px;
}

.create{
    background-color: #6366f1;
}

.buttonn a{
    color: white;
    padding: 0 10px;
}
</style>
