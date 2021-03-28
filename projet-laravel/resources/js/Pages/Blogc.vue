<template>
    <app-layout>
        <template #header>
            <div class="top">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Clients
                </h2>
                <button class="button create">
                    <a href="/clients/create">
                    + Créer un client
                    </a>
                </button>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <client-list :clients="clients"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import ClientList from "@/Components/Client/ClientList";

    export default {
        props: ['clients'],

        components: {
            AppLayout,
            ClientList,
        },
    }
</script>
