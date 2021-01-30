<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('usuarios', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('nombre,255');
        //     $table->string('email,255');
        //     $table->string('clave,255');
        //     $table->integer('edad');
        //     // Columna agregada despues de la tabla
        //     $table->integer('sueldo');
        //     // Crea por defecto 2 columnas tipo fecha (created_at y updated_at)
        //     $table->timestamps();
        // });
        $sql = "CREATE TABLE usuarios(
            id int auto_increment not null,
            nombre varchar(255),
            email varchar(255),
            clave varchar(255),
            primary key(id)
        );";
        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
