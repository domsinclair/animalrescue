<script setup>
import { Head } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import ColumnGroup from 'primevue/columngroup';   // optional
import Row from 'primevue/row';                   // optional

export default {
    props: {
        centres: Object
    }
}
onMounted(() =>{centres.value() })
const centres = ref();
const columns = [
    {field: 'name', header: 'Rescue Centre'},
    {field: 'location', header: 'Location'}
];
</script>

<template>
    <Head title="Rescue Centres" />
    <div>

        <template>
            <div class="card">
                <DataTable :value="centres" tableStyle="min-width: 50rem">
                    <Column v-for="col of columns" :key="col.field" :field="col.field" :header="col.header"></Column>
                </DataTable>
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
