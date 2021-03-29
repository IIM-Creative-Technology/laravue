<template>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                               {{client.raison_social}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{client.description}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{client.capital}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Editer</a>
                            </td>
                        </tr>
</template>

<script>

export default {

    props: ['client']
}
</script>

<style>
.divide-y-200 tr{
    background-color: cyan;
}
</style>
