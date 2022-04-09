<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class PracticaController extends BaseController{
    public function index(){
        //return "PROGRAMACION IV POR DANIELA ALVAREZ";
        return view('index');
    }
}