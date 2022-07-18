<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ user.name }} Notes
            </h2>
        </template>

        <div class="py-12">
            <div class="h-100 w-full flex justify-center bg-teal-lightest font-sans">

                <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/6 lg:max-w-md" v-for="note in notes.data">
                    <div class="user_card align-center center">
                        {{note.content}}
                    </div>
                </div>
            </div>
        </div>
        <pagination class="mt-6" :links="notes.links" />
    </BreezeAuthenticatedLayout>
</template>
<script>
import Pagination from '@/Components/Pagination.vue'

export default {
    name: "Dashboard",
    props: ["user", "notes"],
    components: {
        Pagination
    },
    methods: {
        paginate(pageNum) {
            console.log("shah", pageNum)
        }
    }
}

</script>
