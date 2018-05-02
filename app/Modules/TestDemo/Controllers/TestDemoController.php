<?php

namespace App\Modules\TestDemo\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestDemoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("TestDemo::index");
    }
}