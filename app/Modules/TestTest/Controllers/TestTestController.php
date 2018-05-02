<?php

namespace App\Modules\TestTest\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestTestController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("TestTest::index");
    }
}