<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function perfil(){
        return view('adm/perfil');
    }
    public function menu(){
        return view('adm/menu');
    }
    public function bandeja(){
        return view('adm/bandeja');
    }
    
    public function pagamento(){
        return view('adm/pagamento');
    }
}
