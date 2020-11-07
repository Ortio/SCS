<template>
    <div>
        <b-table striped hover bordered :items="items" :fields="fields" :tbody-tr-class="rowClass"></b-table>
    </div>
</template>
<script>
    export default {
        name: 'TableComponent',
        data() {
            return {
                fields: [
                    {
                        key: 'id',
                        sortable: true
                    },
                    {
                        key: 'name',
                        label: 'Имя',
                        sortable: true
                    },
                    {
                        key: 'phone',
                        label: 'Телефон'
                    },
                    {
                        key: 'sale_type',
                        label: 'Тип продажи',
                        sortable: true
                    },
                    {
                        key: 'store',
                        label: 'Магазин',
                        sortable: true,
                    },
                    {
                        key: 'receive',
                        label: 'Операция',
                        sortable: true
                    },
                    {
                        key: 'status',
                        label: 'Статус',
                        sortable: true
                    },
                    {
                        key: 'address',
                        label: 'Адресс',
                    },
                    {
                        key: 'delivery_price',
                        label: 'Стоимость доставки',
                    },
                    {
                        key: 'comment',
                        label: 'Комментарий',
                    },
                    {
                        key: 'sale_date',
                        label: 'Дата продажи',
                        // Variant applies to the whole column, including the header and footer
                        // variant: 'danger'
                    },
                    {
                        key: 'created_at',
                        label: 'Дата заявки',
                        // Variant applies to the whole column, including the header and footer
                        // variant: 'danger'
                    }
                ],
                items: this.data,
            }
        },
        props: ['data'],
        mounted () {
            // Как-то обрабатываем данные
            // return {
            //     items: data
            // }
        },
        methods: {
            rowClass(item, type) {
                if (!item || type !== 'row') return
                if (item.status === 'sold') return 'table-success'
            }
        }
    }
</script>
