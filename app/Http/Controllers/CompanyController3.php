<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Goods; /*PersonをGoodsにする*/
use Illuminate\Http\Request;

class CompanyController3 extends Controller
{

    public function index(Request $request)
    {
        $items = DB::table('goods')->Paginate(15);
        return view('company.index3', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('company.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Goods::$rules);
        $goods = new Goods;
        $form = $request->all();
        unset($form['_token']);
        $goods->timestamps = false;
        $goods->fill($form)->save();
        return redirect('/company3');
    }
    public function edit(Request $request)
    {
        $item = DB::table('goods')
            ->where('goods_id',$request->goods_id)->first();
        return view('company.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'goods_name' => $request->goods_name,
            'category1' => $request->category1,
            'category2' => $request->category2,
            'size' => $request->size,
            'color' => $request->color,
            'sex' => $request->sex,
            'company_id' => $request->company_id,
        ];
        DB::table('goods')
            ->where('goods_id',$request->goods_id)
            ->update($param);
        return redirect('/company3');
    }

    public function del(Request $request)
    {
        $item = DB::table('goods')
        ->where('goods_id',$request->goods_id)->first();
        return view('company.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        Db::table('goods')
        ->where('goods_id',$request->goods_id)->delete();
        return redirect('/company3');
    }

}