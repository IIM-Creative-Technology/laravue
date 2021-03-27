<template>
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        <th
          scope="col"
          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
        >
          Titre
        </th>

        <th
          scope="col"
          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
        >
          Client
        </th>

        <th
          scope="col"
          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
        >
          Description
        </th>

        <th
          scope="col"
          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
        >
          Tickets
        </th>

        <th scope="col" class="relative px-6 py-3">
          <span class="sr-only">Editer</span>
        </th>
      </tr>
    </thead>
    <tbody>
      <!-- Odd row -->
      <projet-list-item
        v-for="projet in projets"
        :key="projet.id"
        :projet="projet"
      />
    </tbody>
  </table>
</template>

<script>
import ProjetListItem from "@/Components/Projet/ProjetListItem";
export default {
  components: { ProjetListItem },
  props: ["projets"],
};
</script>
