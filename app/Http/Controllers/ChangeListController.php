<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderMonthService;

class ChangeListController extends Controller
{
    public function tester()
    {

        $teste = new OrderMonthService();
        // dd($teste
        $chk =  (array)$teste->ChangeList();

        // dd($chk[0]['janeiro']['alimentos']);
        //$arr = $chk[0]['janeiro']['alimentos'];
        $arr = $chk;


        uasort(
            $arr,
            function ($value1, $value2) use ($arr) {
                //dd($value1, $value2, 'aqui');
                //return strcmp($value1['janeiro'], $value2[1]);
                //return array_search($value1, $jader) > array_search($value2, $jader);

                //return strcmp(array_search($value1, $tt), array_search($value2, $tt));
                return  array_search($value2, $arr) < array_search($value1, $arr);
                //return  sort($t, SORT_NUMERIC);
            }
        );

        dd($arr);
    }
}
