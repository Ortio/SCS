@extends('layouts.main')

@section('content')
    <table>
        @foreach($items as $item)
               <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->sale_type}}</td>
                <td>{{$item->delivery_type}}</td>
                <td>{{$item->store}}</td>
                <td>{{$item->sale_date}}</td>
            </tr>
        @endforeach
    </table>
@endsection
