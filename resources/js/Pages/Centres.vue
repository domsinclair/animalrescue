<script setup>
import { Head } from '@inertiajs/vue3';

let object;
defineProps({centres: object})
</script>

<template>
    <Head title="Rescue Centres" />
    <div>

        <template>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="centre in centres.data" :key="centre.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ centre.name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <Link :href="`/centres/${centre.id}/edit`" class="text-indigo-600 hover:text-indigo-900">
                                            Edit
                                        </Link>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

<!--        <script setup>-->
<!--            import { ref, onMounted } from 'vue';-->
<!--            import { ProductService } from '@/service/ProductService';-->

<!--            onMounted(() => {-->
<!--                ProductService.getProductsMini().then((data) => (products.value = data));-->
<!--            });-->

<!--            const products = ref();-->

<!--        </script>-->


</template>

<style scoped>

</style>
