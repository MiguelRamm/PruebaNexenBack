<?php
        /**
         * importaciones de clases y facades de Laravel necesarias 
         * para trabajar con migraciones y esquemas de base de datos.
         * 
         */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

        /**
         * Esta línea inicia la declaración de una clase anónima que extiende la clase Migration, 
         * lo cual es una forma de definir una migración en Laravel 
         * 
         */
return new class extends Migration
{
        /**
        * Realiza las acciones necesarias para crear la tabla 'user_domicilio' en la base de datos.
        * Esta función utiliza el esquema de Laravel para definir la estructura de la tabla.
        * 
        * @return void
        */
    public function up(): void
    {

        /**
         * Define la estructura de la tabla 'user_domicilio' en la base de datos.
         * Esta tabla contiene información sobre el domicilio de los usuarios.
         * 
         * Los campos de la tabla son los siguientes:
         * - user_id (bigIncrements): El ID único del usuario.
         * - domicilio (text): El domicilio del usuario.
         * - numero_exterior (integer): El número exterior del domicilio.
         * - colonia (text): La colonia del domicilio.
         * - cp (integer): El código postal del domicilio.
         * - ciudad (text): La ciudad del domicilio.
         * - created_at, updated_at (timestamps): Las marcas de tiempo de creación y actualización del registro.
         
         */




        Schema::create('user_domicilio', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->text('domicilio');
            $table->integer('numero_exterior');
            $table->text('colonia');
            $table->integer('cp');
            $table->text('ciudad');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

            /**
             * Realiza las acciones necesarias para deshacer la creación de la tabla 'user_domicilio'.
             * 
             * @return void
             */
    public function down(): void
    {
            /**
             * Elimina la tabla 'user_domicilio' de la base de datos si existe.
             * 
             * @return void
             */
        Schema::dropIfExists('user_domicilio');
    }
};




