<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Edit du projet
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <projet-form :projet="projet" :errors="errors" />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import ProjetForm from "@/Components/Projet/ProjetForm";

export default {
  props: ["errors","projet"],

  components: {
    AppLayout,
    ProjetForm,
  },
};
</script>

<style>

</style>
