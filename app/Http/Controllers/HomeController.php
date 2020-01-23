<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;

class HomeController extends Controller
{
    public function index(){
        //::all() para listar todos os registros.| ::paginate() para criar paginação
        $cursos = Curso::paginate(3);
        return view('home',compact('cursos'));
    }
}
