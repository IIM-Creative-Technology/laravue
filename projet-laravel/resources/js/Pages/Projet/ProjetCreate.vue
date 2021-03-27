<template>
<<<<<<< HEAD
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projets create
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <projet-form/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import ProjetForm from '@/Components/Projet/ProjetForm'
    export default {
        props: ['projets'],

        components: {
            AppLayout,
            ProjetForm,
        },
    }
=======
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Création de projets
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <projet-form />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import ProjetForm from "@/Components/Projet/ProjetForm";

export default {
  props: ["projets"],

  components: {
    AppLayout,
    ProjetForm,
  },
};
>>>>>>> c8eee893b3d24b2abae6724aaa334750691cc558
</script>
