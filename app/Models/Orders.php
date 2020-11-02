<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
//    protected $fillable = ['name', 'phone', 'model','color', 'price', 'delivery_price', 'sale_type', 'delivery_type',
//        'address', 'store', 'status', 'sale_date'];

    public $saleTypeArgs = ['Самовывоз', 'Доставка', 'Почта', 'СДЭК'];
    public $receiveArgs = ['Наличные', 'Карта', 'Чек', 'СБЕР', 'Тинькофф'];
    public $storeArgs = ['MyDilly', 'BabyWatch', 'PBS', 'Magic-Karaoke', 'All-Aks'];
    public $statusArgs = ['process', 'sold', 'refused', 'shipped'];




    public function createNewData()
    {
        $this->create([
            'name'              => 'Александр',
            'phone'             => '89213110292',
            'model'             => 'Магнитный держатель Baseus Magnetic Air Vent Car Mount Holder SUGX-A0V',
            'color'             => 'золото',
            'price'             => 368,
            'delivery_price'    => 0,
            'sale_type'         => 'Самовывоз',
            'delivery_type'     => 'Наличные',
            'address'           => '',
            'store'             => 'MyDilly',
            'status'            => 'sold',
            'sale_date'         => '2020.09.01',
        ]);

//        $this->save();
    }

    public function saleGoods()
    {
        return $this->hasMany(SaleGoods::class);
    }

}
