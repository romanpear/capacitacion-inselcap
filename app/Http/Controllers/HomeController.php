<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return "Hola desde Controller";
    }

    public function index2($param)
    {
    	return "funcion con".$param;
    }

    public function index3()
    {
    	$curso = "Soy una variable";
    	$edad = 18;

    	$datos = ['Angel', 'Martin', 'Alejandro', 'Santiago'];

    	return view('home.index')
    			->with('myvar', $curso)
    			->with('otro', 'hola')
    			->with('edad', $edad)
    			->with('datos', $datos);
    }

    public function getPost()
    {

        //Actualizar registro

        //\DB::table('posts')
          //  ->where('id', 2)
            //->update(['activo' => false]);

        //Eliminar registro
        //\DB::table('posts')->where('id', 1)->delete();

        //Consultar registros
        /*$posts2 = \DB::table('posts')->where('activo',false)->get();
        $posts3 = \DB::table('posts')->select('id','titulo')->get();
        $posts4 = \DB::table('posts')->count();*/
        
        $posts = \DB::table('posts')->get();

        return view('post.index')
            ->with('datos', $posts);

    }
}
