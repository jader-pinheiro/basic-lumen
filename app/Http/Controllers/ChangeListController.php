<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderMonthService;
use Illuminate\Support\Facades\Storage;

class ChangeListController extends Controller
{
    public function tester()
    {


        $arr = new OrderMonthService();
        //   dd($list);
        $list = $arr->ChangeList();
        //-  $l = json_decode($list);        //   dd($list);
        $arquivo = fopen('../storage/app/file.csv', 'w');
        // Storage::put('notas-skyhub/nota.xml', $list);

        // foreach ($list as $linha) {

        //dd($linha['janeiro']['categorias']['alimentos']['produtos']);
        fputcsv($arquivo, $list, ";");
        // }

        return $list;





        $array = json_encode($arr->ChangeList());

        $t = (object)$array;
        //dd($array);
        $newArray = [];
        $i = 0;

        // print_r($t->janeiro->alimentos);
        foreach ($t as $arr) {
            print_r($arr[0]);

            $newArray = [
                'mes' => [
                    'janeiro' => [
                        'categorias' => [
                            'alimentos' => [
                                'produtos' => $arr['janeiro']['alimentos']
                            ],
                            'higiene_pessoal' => [
                                'produtos' => $arr['janeiro']['higiene_pessoal']
                            ],
                            'limpeza' => [
                                'produtos' => $arr['janeiro']['limpeza']
                            ],
                        ]
                    ]
                ]
            ];
        }


        // $newArray = [
        //     'mes' => [
        //         'janeiro' => [
        //             'categorias' => [
        //                 'alimentos' => [
        //                     'produtos' => $array[0]['janeiro']['alimentos']
        //                 ],
        //                 'higiene_pessoal' => [
        //                     'produtos' => $array[0]['janeiro']['higiene_pessoal']
        //                 ],
        //                 'limpeza' => [
        //                     'produtos' => $array[0]['janeiro']['limpeza']
        //                 ],
        //             ]
        //         ],
        //         'fevereiro' => [
        //             'categorias' => [
        //                 'alimentos' => [
        //                     'produtos' => $array[1]['fevereiro']['alimentos']
        //                 ],
        //                 'higiene_pessoal' => [
        //                     'produtos' => $array[1]['fevereiro']['higiene_pessoal']
        //                 ],
        //                 'limpeza' => [
        //                     'produtos' => $array[1]['fevereiro']['limpeza']
        //                 ],
        //             ]
        //         ],
        //         'março' => [
        //             'categorias' => [
        //                 'alimentos' => [
        //                     'produtos' => $array[2]['marco']['alimentos']
        //                 ],
        //                 'higiene_pessoal' => [
        //                     'produtos' => $array[2]['marco']['higiene_pessoal']
        //                 ],
        //                 'limpeza' => [
        //                     'produtos' => $array[2]['marco']['limpeza']
        //                 ],
        //             ]
        //         ],
        //     ]
        // ];

        dd($newArray);















        $alimentos['janeiro']['alimentos'] = $array[0]['janeiro']['alimentos'];
        $alimentos['janeiro']['higiene_pessoal'] = $array[0]['janeiro']['higiene_pessoal'];
        $alimentos['janeiro']['limpeza'] = $array[0]['janeiro']['limpeza'];

        $alimentos['fevereiro']['alimentos'] = $array[1]['fevereiro']['alimentos'];
        $alimentos['fevereiro']['higiene_pessoal'] = $array[1]['fevereiro']['higiene_pessoal'];
        $alimentos['fevereiro']['limpeza'] = $array[1]['fevereiro']['limpeza'];

        $alimentos['marco']['alimentos'] = $array[2]['marco']['alimentos'];
        $alimentos['marco']['higiene_pessoal'] = $array[2]['marco']['higiene_pessoal'];
        $alimentos['marco']['limpeza'] = $array[2]['marco']['limpeza'];

        $alimentos['abril']['alimentos'] = $array[3]['abril']['alimentos'];
        $alimentos['abril']['higiene_pessoal'] = $array[3]['abril']['higiene_pessoal'];
        $alimentos['abril']['limpeza'] = $array[3]['abril']['limpeza'];

        $alimentos['maio']['alimentos'] = $array[4]['maio']['alimentos'];
        $alimentos['maio']['higiene_pessoal'] = $array[4]['maio']['higiene_pessoal'];
        $alimentos['maio']['limpeza'] = $array[4]['maio']['limpeza'];

        $alimentos['junho']['alimentos'] = $array[5]['junho']['alimentos'];
        $alimentos['junho']['higiene_pessoal'] = $array[5]['junho']['higiene_pessoal'];
        $alimentos['junho']['limpeza'] = $array[5]['junho']['limpeza'];

        // usort(
        //     $alimentos,
        //     function ($value1, $value2) use ($alimentos) {
        //         //dd($value1, $value2,  'aqui');
        //         //return strcmp($value1['janeiro'], $value2[1]);
        //         //return array_search($value1, $jader) > array_search($value2, $jader);

        //         //return strcmp(array_search($value1, $tt), array_search($value2, $tt));
        //         //return  array_search($value1, $alimentos) > array_search($value2, $alimentos);
        //         return  sort($alimentos, SORT_NUMERIC);
        //     }
        // );

        dd($alimentos);







        // // dd($chk[0]['janeiro']['alimentos']);
        // $arr = $chk;
        // // dd($arr);
        // //$arr = $chk;
        // //dd($chk);

        // usort(
        //     $arr,
        //     function ($value1, $value2) use ($arr) {
        //         //dd($value1, $value2,  'aqui');
        //         //return strcmp($value1['janeiro'], $value2[1]);
        //         //return array_search($value1, $jader) > array_search($value2, $jader);

        //         //return strcmp(array_search($value1, $tt), array_search($value2, $tt));
        //         return  array_search($value1, $arr) > array_search($value2, $arr);
        //         //return  sort($t, SORT_NUMERIC);
        //     }
        // );
        // $alimentos['alimentos'] = $arr;
        // // $alimentos['rer'] = $arr;
        // // $alimentos['rer'] = $arr;

        // array_push($ttt, $alimentos);
        return $ttt;

        //dd($arr[]);
    }
}
