<script setup>
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';

const props = defineProps({
    rescueCentres: Array
});
</script>
<template>
    <div class="card mt-10">
        <DataTable :value="rescueCentres" class="border max-w-lg ml-4 rounded-t-2xl" striped-rows>
            <!--            <Column v-for="col of columns" :key="col.field" :field="col.field" :header="col.header"></Column>-->
            <Column class="font-semibold text-white" field='name' header="Name"  :sortable="true"></Column>
            <Column class="text-white" field='location' header="Location"></Column>
        </DataTable>
    </div>
</template>

