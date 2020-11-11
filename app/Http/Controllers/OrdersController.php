<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\SaleGoods;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        return view('layouts.examp', ['data' => $data]);

//        return response()->json([
//            'data' => Orders::all()->toJson()
//        ]);
        return Orders::all()->toJson();
//        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 'sadfsdaf';
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  Orders  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $item)
    {
        $goods = $item->saleGoods;
        return view('orders.single', compact(['item','goods']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->except('_token');
//        dd($data);
//        Orders::updateOrCreate(['id'=>$id], $request->toArray());
        Orders::where(['id'=>$id])->update($data);
//        return redirect('orders');
        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
