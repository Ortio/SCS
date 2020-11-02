@extends('layouts.main')

@section('content')
{{--    {{$item}}--}}
{{--    {{$goods}}--}}
<h1 class="mb-3">Карточка клиента</h1>
<div class="row">
<div class="col-lg-12">
    <form class="needs-validation form-horizontal card-content" novalidate="" method="Post">
        <div class="card">
            <div class="card-body">
                <div class="input-states">
<div class="row">
    <div class="col-lg-6">
        {{csrf_field()}}

        <div class="form-group">
            <div class="row">
                <div class="col-lg-6">
                    <label for="firstName" class="control-label">Имя:</label>
                    <input type="text" class="form-control" name="name" id="firstName" placeholder="ФИО"
                           value="{{$item->name}}">
                </div>
                <div class="col-lg-6">
                    <label for="phone" class="control-label">Телефон</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="+7(900) 123-45-67"
                           value="{{$item->phone}}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label for="sale_type" class="control-label">Тип продажи</label>
                    <select name="sale_type" class="form-control" id="sale_type">
                        @foreach($item->saleTypeArgs as $saleType)
                            <option value="{{$saleType}}"
                                    @if($item->sale_type == $saleType) selected @endif>{{$saleType}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="store" class="control-label">Магазин</label>
                    <select name="store" class="form-control" id="store">
                        @foreach($item->storeArgs as $store)
                            <option value="{{$store}}" @if($item->store == $store) selected @endif >{{$store}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label for="status" class="control-label">Статус</label>
                    <select name="status" class="form-control" id="store">
                        @foreach($item->statusArgs as $status)
                            <option value="{{$status}}"
                                    @if($item->status == $status) selected @endif >{{$status}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="sale-date" class="control-label">Дата продажи</label>
                    <input type="date" class="form-control" id="sale-date" name="sale_date"
                           value="{{ date('Y-m-d', strtotime($item->sale_date)) }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label for="receive" class="control-label">Способ продажи</label>
                    <select name="receive" class="form-control" id="store">
                        @foreach($item->receiveArgs as $receive)
                            <option value="{{$receive}}"
                                    @if($item->receive == $receive) selected @endif >{{$receive}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <h5>Товары:</h5>
                    <table class="table">
                        @foreach($goods as $index => $itm)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$itm->name}}</td>
                                <td>{{$itm->colore}}</td>
                                <td>{{$itm->price}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label for="address" class="control-label">Адресс доставки</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Адресс"
                           value="{{$item->address}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
            <label for="delivery_price" class="control-label">Cтоимость доставки</label>
            <input type="text" class="form-control" id="delivery_price" name="delivery_price" placeholder="440"
                value="{{ceil($item->delivery_price)}}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
            <label for="zip" class="control-label">Почтовый индекс</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="121935"
                   value="{{$item->zip}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
            <label for="comment" class=" control-label">Комментарий</label>
                <textarea name="comment" class="form-control comment-form"
                          id="comment">{{ trim($item->comment) }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Сохранить</button>
    </div>

</div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
{{--    <table>--}}

{{--        @foreach($item as $item)--}}
{{--               <tr>--}}
{{--                <td>{{$item->id}}</td>--}}
{{--                <td>{{$item->name}}</td>--}}
{{--                <td>{{$item->phone}}</td>--}}
{{--                <td>{{$item->sale_type}}</td>--}}
{{--                <td>{{$item->delivery_type}}</td>--}}
{{--                <td>{{$item->store}}</td>--}}
{{--                <td>{{$item->sale_date}}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}


{{--            <div class="form-group has-success has-feedback">--}}
{{--                <div class="row">--}}
{{--                    <label class="col-sm-3 control-label">Input group with success</label>--}}
{{--                    <div class="col-sm-9">--}}
{{--                        <div class="input-group">--}}
{{--                            <span class="input-group-addon"><i class="ti-user"></i></span>--}}
{{--                            <input type="text" class="form-control">--}}
{{--                        </div>--}}
{{--                        <span class="ti-check form-control-feedback"></span>--}}
{{--                        <span class="sr-only">(success)</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
@endsection
