<?php

namespace App\Services;


use App\Model\ListArray;

class OrderMonthService
{
    function ChangeList()
    {
        /*realizar a lógica de ordernar os meses*/
        $list = new ListArray();

        return $list->sendListArray();
    }
}
