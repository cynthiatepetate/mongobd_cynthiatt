<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client;

class ProductosController extends Controller
{
    public function index(){

        $host ='localhost';
        $puerto='27017';

        $client=  new Client("mongodb://$host:$puerto");

        $filtrar = array();
        $options = array();

        $collection = $client->myapp->productos;
        $datos = $collection->find($filtrar,$options);

        return view('productos', compact('datos'));
    }
}
