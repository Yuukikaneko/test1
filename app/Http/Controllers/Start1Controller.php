<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Start1Controller extends Controller
{
    public function Start1(){
        return view('start.Start1');
    }
    public function Start2(){
        return view('start.Start2');
    }
    public function Start3(Request $request){
        $km = 10;  //仮の数値
        $weight = 50; //仮の数値
        $time = 60; //仮の数値
         //1時間走った場合のカロリー
         $kcal = 1.05 * 8.3  * $weight ; //消費エネルギー（kcal) ＝1.05×エクササイズ（METs・時）×体重(kg)

        $result = ['kcal' => $kcal,
                   'km' => $km,
                   'time' => $time,
                ];

        return view('start.Start3', ['item' => $result]);
    }
}