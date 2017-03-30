<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\CreatePostRequest;

class PostController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //return ;

    	$datos = \Auth::user()
                    ->posts()
                    ->where('id',1)
                    ->paginate(5);

    	return view('post.index')
    		->with('datos', $datos);
    }

    public function create()
    {
    	return view('post.create');
    }

    public function store(CreatePostRequest $request)
    {
        //$post = Post::create($request->all());
       
        $post = new Post($request->all());

         $user = \Auth::user();

         $user->posts()->save($post);
        /**
         * ALguna  validacion
         */
        
        //$post->save();

        /*$post = Post::create([
            'titulo'=>$request->titulo,
            'contenido'=>$request->contenido,
            'activo'=>$request->activo
            ]);*/

        return  redirect()
            ->route('articulos.index')
            ->with('message_success', 'Post guardado con exito');
    }

    public function edit($id)
    {
        $post = Post::find($id);

    	return view('post.editar')
            ->with('post', $post); 
    }

    public function update(CreatePostRequest $request,$id)
    {
        $post = Post::find($id);
        $post->fill($request->all());

        /*$post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->activo = $request->activo;*/

         $post->save();

    	return redirect()->back()->with('message_success','Se actualizo correctamente');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

    	return redirect()->back();
    }


}
