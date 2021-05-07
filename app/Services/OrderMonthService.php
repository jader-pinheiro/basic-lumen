<?php

namespace App\Services;


use App\Model\ListArray;

class OrderMonthService
{
    function ChangeList()
    {
        /*realizar a lógica de ordernar os meses*/
        $list = new ListArray();

        $array = $list->sendListArray();
        $newArray = [];

        $janeiro['janeiro'] = $array['janeiro'];
        $fevereiro['fevereiro'] = $array['fevereiro'];
        $marco['marco']  = $array['marco'];
        $abril['abril']  = $array['abril'];
        $maio['maio']  = $array['maio'];
        $junho['junho']  = $array['junho'];

        array_push($newArray, $janeiro);
        array_push($newArray, $fevereiro);
        array_push($newArray, $marco);
        array_push($newArray, $abril);
        array_push($newArray, $maio);
        array_push($newArray, $junho);
        //dd($newArray);
        return $newArray;
    }
}
