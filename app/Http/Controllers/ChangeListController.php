<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderMonthService;

class ChangeListController extends Controller
{
    public function tester()
    {

        $teste = new OrderMonthService();
        // dd($teste);
        $chk =  (array)$teste->ChangeList();

        dd($chk[0]['janeiro']['alimentos']);
    }
}
