<?php

namespace App\Http\Controllers;
use Inertia\Inertia;


use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){

        return Inertia::render('Hotel/hotel');

    }


}
