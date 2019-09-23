<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show()
    {
       $household = [
         'Person1' => 'Lauren Firth',
         'Person2' => 'Adam Matlock',
         'Animal1' => 'Abby Matlock',
       ];

       return view('welcome')->withHousehold($household);
    }
}
