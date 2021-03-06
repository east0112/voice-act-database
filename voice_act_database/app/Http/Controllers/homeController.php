<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Models\common;
use App\Http\Models\getDatabase;

class homeController extends Controller
{
    /**
     * 一覧表示
     *
     * @param Request $request
     * @return Response
     */
    public static function home(Request $request){
      //端末判定
      $view = common::getDevice($request,"home");
      //当月のデータ取得
      $items = getDatabase::getListThisMonth();

      return view($view,["items" => $items]);
    }
}
