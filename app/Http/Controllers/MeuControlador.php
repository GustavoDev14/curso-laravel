<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function home()
    {
        return "Home!";
    }

    public function nome()
    {
        return "Gustavo";
    }

    public function idade()
    {
        return "21!";
    }

    public function multiplicar($n1 = null, $n2 = null)
    {
        return $n1 * $n2;
    }
}
