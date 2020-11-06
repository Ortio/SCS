@extends('layouts.main')

@section('content')
{{--    <table>--}}
{{--        @foreach($data as $item)--}}
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
<div id="content-vue">
    <table-component :data='@json($data)' />
{{--    <blog-post--}}
{{--        v-for="post in posts"--}}
{{--        v-bind:key="post.id"--}}
{{--        v-bind:post="post"--}}
{{--    ></blog-post>--}}
</div>

<script>
     {{--var data = @json($data);--}}
</script>


@endsection






