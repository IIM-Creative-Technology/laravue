<template>
    <!-- <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Raison sociale
            </th>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
            </th>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Projets
            </th>
            <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Editer</span>
                <span class="sr-only">Supprimer</span>
            </th>
        </tr>
        </thead>
        <tbody>
             <post-list-item v-for="client in clients" :key="client.id" :post="client" />
        </tbody>
    </table>

                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Raison sociale
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Projets
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editer</span>
                                <span class="sr-only">Supprimer</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                             <client-list-item v-for="client in clients" :key="client.id" :post="client"/>
                        </tbody>
                    </table> -->
                                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Slug
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Content
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Publié ?
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editer</span>
                                <span class="sr-only">Supprimer</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Odd row -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                               //
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                //
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                //
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <!-- Publié: bg-indigo-600 | Non publié: bg-gray-200 -->
                                <button type="button"  class="bg-indigo-600 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-pressed="false">
                                    <span class="sr-only">Use setting</span>
                                    <!-- Publié: "translate-x-5", Non publié: "translate-x-0" -->
                                    <span aria-hidden="true"  class=" translate-x-5 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                </button>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Editer</a>
                                <a href="#" class="ml-4 text-indigo-600 hover:text-indigo-900">Supprimer</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
</template>

<script>
// import ClientListItem from "@/Components/Client/ClientListItem";
export default {
    // components: {ClientListItem},
    // props: [ 'clients' ]
}
</script>
