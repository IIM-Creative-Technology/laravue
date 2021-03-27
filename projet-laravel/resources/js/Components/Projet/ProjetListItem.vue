<template>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                               {{projet.title}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{projet.email_responsable}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{projet.description.substr(0,40)}}...
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{projet.etat}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a @click="toggle" href="#" class="text-indigo-600 hover:text-indigo-900">Editer</a>
                            </td>
                        </tr>
</template>

<script>
// import projetListItem from "@/Components/projet/projetListItem";
export default {
    // components: {projetListItem},
    props: ['projet'],

    methods: {
        // toggle(){
        //     console.log(this.route('nom-de-ma-route',100));
        //     //this.$inertia.projet(this.route('nom-de-ma-route',100));
        // },

        // toggle() {
        //     this.$inertia.visit(this.route('projets.toggle', this.projet.id), {
        //         preserveScroll: true,
        //         preserveState: true,
        //     });
        // },

        toggle() {
            this.$inertia.visit(this.route('projets.toggle', this.projet.id), {
                preserveScroll: true,
                preserveState: true,
            });
        }
    }
}
</script>
