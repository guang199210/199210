<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {

    }

    //首页搜索功能
    public function filter($options)
    {

    }

    //装修案例
    public function spruceCase()
    {

    }

    //装修公司首页展示
    public function businessShow()
    {
        $business = DB::BUSINFO()->where('is_show','1')->get();

    }
}