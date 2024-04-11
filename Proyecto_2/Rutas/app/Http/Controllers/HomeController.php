<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke($curso,$Nbre=null){

        $lista=array    ("Angelo","Jesus Luis","Maribel Montalvo","Pancho",);
        $htlm="Lista alumnos <br/>";
        foreach($lista as $elem){
            $htlm.=$elem."<br>";
        }
        if($Nbre){
        return "Ya estamos en el curso de $curso, con el instructor $Nbre el listado de estudiantes: <br/>$htlm";
        }else{
            return "El curso de $curso, no se aperturo";
        }
    }

}
