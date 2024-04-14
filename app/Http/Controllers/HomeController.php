<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function __construct()
    {
    }

    public function index(){
        $data['chart_1'] = array(
          'val1'=> '490, 650, 590, 350, 300, 450, 475',
          'val2'=> '250, 650, 500, 300, 250, 210, 400'
        );
        $data['chart_2'] = array(
            'val1' => array('80', '700'),
            'val2' => array('20', '300'),
            'subtitle' => '76'
        );
        $data['chart_3'] = array(
            'val' => '490, 650, 590, 350, 300, 450, 475'
        );
        $data['chart_4'] =  array(
            'val' => '490, 650, 590, 350, 300, 450'
        );
        $data['chart_5'] = array(
            'val1'=> '490, 650, 590, 350, 300, 450, 475',
            'val2'=> '250, 650, 500, 300, 250, 210, 400'
          );
        return view('welcome')->with([
            'chart_data' => $data
        ]);
    }
}
