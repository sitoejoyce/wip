<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Obtém todos os cursos da tabela 'courses'
        return view('home', ['courses' => $courses]);
    }
}
