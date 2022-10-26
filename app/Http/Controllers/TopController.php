<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Agent;

class TopController extends Controller
{
    /**
     * TOPページ
     *
     * URI : GET /
     *
     * @access  public
     * @return  string
     */
    public function index()
    {
        return view('top.index');
    }
}