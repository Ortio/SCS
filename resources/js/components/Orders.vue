<template>
    <div>
<!--        {{ items }}-->
        <b-table striped hover bordered :items="items" :fields="fields" :tbody-tr-class="rowClass" caption-top>
        </b-table>
    </div>
</template>
<script>
    import axios from 'axios';
    // import r from '../route.js'
    export default {
        name: 'Orders',
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
                        thStyle: {width: '110px'},
                        // Variant applies to the whole column, including the header and footer
                        // variant: 'danger'
                    },
                    {
                        key: 'created_at',
                        label: 'Дата заявки',
                        thStyle: {width: '110px'},
                        // Variant applies to the whole column, including the header and footer
                        // variant: 'danger'
                    }
                ],
                items: null,
            }
        },
        mounted () {
            this.getOrders();
            // this.items = [dt];

        },
        methods: {
            getOrders (){
                // console.log(axios.get(r('home')));
              return axios.get('/api')
                   .then(response =>{
                       // const dt = response.data;
                       // console.log(dt[Object.keys(dt)[0]]);
                       this.items = response.data;
                       // this.items = dt;

                   })
            },
            rowClass(item, type) {
                if (!item || type !== 'row') return
                if (item.status === 'sold') return 'table-success'
            },
            thClassAdd(item, type){
                console.log(item);
            }
        }
    }
</script>
