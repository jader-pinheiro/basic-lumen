<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/tester', 'ChangeListController@tester');

$router->get('/', function () use ($router) {


    $newArray = [];
    //dd("aqui");

    $jader =  [
        'janeiro' => [
            'alimentos' => [
                'Pão de forma' => 100,
                'Nutella' => 50,
                'Arroz' => 200,
                'Feijão' => 150,
            ],
            'limpeza' => [
                'Veja multiuso' => 50,
                'Sabao em po' => 50,
                'Desinfetante' => 100,
            ],
            'higiene_pessoal' => [
                'Creme dental' => 500,
                'Sabonete Protex' => 500,
                'Escova de dente' => 500,
                'Papel Hignico' => 1000,
            ],
        ],
        'marco' => [
            'alimentos' => [
                'Ovos' => 1200,
                'Iogurte' => 500,
                'Pasta de Amendoim' => 500,
            ],
            'limpeza' => [
                'Detergente' => 100,
                'Sabao em po' => 100,
            ],
            'higiene_pessoal' => [
                'Enxaguante bocal' => 500,
            ],
        ],
        'maio' => [
            'alimentos' => [
                'Brocolis' => 1000,
                'Tomate' => 1000,
                'Morango' => 10001,
                'Berinjela' => 100,
                'Pepino' => 100,
                'Arroz integral' => 500,
                'Feijão' => 500,
                'Filé de frango' => 500,
                'Leite desnatado' => 2000,
            ],
            'limpeza' => [
                'Diabo verde' => 100,
                'MOP' => 100,
            ],
            'higiene_pessoal' => [
                'Protex' => 500,
                'Papel Hignico' => 500,
                'Shampoo' => 500,
            ],
        ],
        'fevereiro' => [
            'alimentos' => [
                'Pão de forma' => 50,
                'Queijo minas' => 50,
                'Geléria de morango' => 250,
            ],
            'limpeza' => [
                'Pano de chão' => 300,
                'Rodo' => 301,
            ],
            'higiene_pessoal' => [
                'Creme dental' => 500,
                'Sabonete Dove' => 500,
                'Papel Hignico' => 1000,
            ],
        ],
        'abril' => [
            'alimentos' => [
                'Doritos' => 50,
                'Chocolate ao leit' => 100,
                'Filé Mignon' => 350,
            ],
            'limpeza' => [
                'Esponja de aço' => 100,
            ],
            'higiene_pessoal' => [
                'Fio dental' => 500,
                'Escova de dente' => 500,
                'Creme dental' => 500,
            ],
        ],
        'junho' => [
            'alimentos' => [],
            'limpeza' => [],
            'higiene_pessoal' => [],
        ],
    ];



    $janeiro['janeiro'] = $jader['janeiro'];
    $fevereiro['fevereiro'] = $jader['fevereiro'];
    $marco = $jader['marco'];
    $abril = $jader['abril'];
    $maio = $jader['maio'];
    $junho = $jader['junho'];




    array_push($newArray, $janeiro);
    array_push($newArray, $fevereiro);
    array_push($newArray, $marco);
    array_push($newArray, $abril);
    array_push($newArray, $maio);
    array_push($newArray, $junho);
    return $newArray;
    // dd($newArray);


    // print_r($jader['janeiro']);


    //dd($tt);


    // $sort = array(
    //     'Janeiro',
    //     'Fevereiro', 'janeiro',
    //     'fevereiro', 'Março', 'março', 'Abril',
    //     'abril', 'Maio', 'maio', 'Junho', 'junho',
    //     'Julho', 'julho', 'Agosto', 'Agosto',
    //     'Setembro', 'setembro', 'Outubro', 'outubro',
    //     'Novembro', 'novembro', 'Dezembro', 'dezembro'
    // );

    uasort(
        $tt,
        function ($value1, $value2) use ($tt) {
            //dd($value1, $value2, 'aqui');
            //return strcmp($value1['janeiro'], $value2[1]);
            //return array_search($value1, $jader) > array_search($value2, $jader);

            //return strcmp(array_search($value1, $tt), array_search($value2, $tt));
            return array_search($value1, $tt) > array_search($value2, $tt);
        }
    );

    array_push($newArray, $tt);


    uasort(
        $tt,
        function ($value1, $value2) use ($newArray) {
            //dd($value1, $value2, 'aqui');
            //return strcmp($value1['janeiro'], $value2[1]);
            //return array_search($value1, $jader) > array_search($value2, $jader);

            //return strcmp(array_search($value1, $tt), array_search($value2, $tt));
            return array_search($value2, $newArray) > array_search($value1, $newArray);
        }
    );

    // $rr =  rsort($newArray);

    // dd($newArray);

    // $j =   array_multisort(
    //     $rr,
    //     SORT_ASC,
    //     SORT_STRING
    // );

    var_dump($newArray);
    $ar = array(
        array("10", 11, 100, 100, "a"),
        array(1,  2, "2",   3,   1)
    );
    $t2 =  array_multisort(
        $newArray,
        SORT_ASC,
        SORT_STRING
    );
    var_dump($newArray);
    //  dd($j);
    //$t =   usort($sort, "usortTest");

    // dd($t);

    //dd($teste);




    //dd("testenao");
    return $router->app->version();
});
