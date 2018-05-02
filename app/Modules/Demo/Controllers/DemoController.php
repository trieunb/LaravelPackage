<?php

namespace App\Modules\Demo\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Demo::index");
    }
}