<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

	public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
    	$datos = Post::paginate(5);

    	return view('post.index')
    		->with('datos', $datos);
    }

    public function create()
    {
    	return view('post.create');
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return  redirect()->route('articulos.index');
    }

    public function edit($id)
    {
    	return "Soy edit ".$id; 
    }

    public function update($id)
    {
    	return "Update".$id;
    }

    public function destroy($id)
    {
    	return "eliminar";
    }


}
