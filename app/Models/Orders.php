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

    }

    public function saleGoods()
    {
        return $this->hasMany(SaleGoods::class);
    }

}
