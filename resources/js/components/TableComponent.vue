<template>
    <div>
        <b-table striped hover bordered :items="items" :fields="fields" ></b-table>
    </div>
</template>
<script>
    export default {
        name: 'TableComponent',
        data() {
            return {
                // fields: [
                //     {
                //         key: 'id',
                //         sortable: true
                //     },
                //     {
                //         key: 'name',
                //         label: 'Имя',
                //         sortable: true
                //     },
                //     {
                //         key: 'sale_date',
                //         label: 'Дата продажи',
                //         sortable: true,
                //         // Variant applies to the whole column, including the header and footer
                //         // variant: 'danger'
                //     }
                // ],
                items: this.data,
            }
        },
        props: ['data'],
        mounted () {
            // Как-то обрабатываем данные
            // return {
            //     items: data
            // }
        }
    }
</script>
