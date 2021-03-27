<template>
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        <th
          scope="col"
          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
        >
          Raison sociale
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
          Projets
        </th>
        <th scope="col" class="relative px-6 py-3">
          <span class="sr-only">Editer</span>
        </th>
      </tr>
    </thead>
    <tbody>
      <!-- Odd row -->
      <client-list-item
        v-for="client in clients"
        :key="client.id"
        :client="client"
      />
    </tbody>
  </table>
</template>

<script>
import ClientListItem from "@/Components/Client/ClientListItem";
export default {
  components: { ClientListItem },
  props: ["clients"],
};
</script>
