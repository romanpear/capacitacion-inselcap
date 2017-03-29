<?php

use Illuminate\Database\Seeder;

class CreatePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('posts')->insert([
    		['titulo' => 'titulo1', 'contenido' => 'Contenido1', 'activo'=>true],
    		['titulo' => 'titulo2', 'contenido' => 'Contenido2', 'activo'=>true],
    		['titulo' => 'titulo3', 'contenido' => 'Contenido3', 'activo'=>true],
    		['titulo' => 'titulo4', 'contenido' => 'Contenido4', 'activo'=>true],
    		['titulo' => 'titulo5', 'contenido' => 'Contenido5', 'activo'=>true],
    		]);
    }
}
