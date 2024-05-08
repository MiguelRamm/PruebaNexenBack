<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     /**
     * Ejecuta las migraciones necesarias para actualizar la estructura de la tabla 'users' y 'user_domicilio'.
     * 
     * Agrega una columna 'fecha_nacimiento' a la tabla 'users', permitiendo valores nulos.
     * Agrega una columna 'fecha_nacimiento' a la tabla 'user_domicilio', permitiendo valores nulos.
     * 
     * @return void
     */
    
    public function up(): void
    {
        /**
         * Modifica la tabla Users
         */
        Schema::table('users', function (Blueprint $table) {
            $table->date('fecha_nacimiento')->nullable();
        });

        /**
         * Modifica la tabla user_domicilio
         */
        Schema::table('user_domicilio', function (Blueprint $table) {
            $table->date('fecha_nacimiento')->nullable();
        });
    }

    /**
     * Ejecuta las migraciones necesarias para deshacer los cambios realizados en la estructura de la tabla 'users' y 'user_domicilio'.
     * 
     * Elimina la columna 'fecha_nacimiento' de la tabla 'users'.
     * Elimina la columna 'fecha_nacimiento' de la tabla 'user_domicilio'.
     * 
     * @return void
     */
    public function down(): void
    {
        /**
         * Revertir cambios en la tabla 'users'
         */
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fecha_nacimiento');
        });

        /**
         * Revertir cambios en la tabla 'user_domicilio'
         */

        Schema::table('user_domicilio', function (Blueprint $table) {
            $table->dropColumn('fecha_nacimiento');
        });
    }
};
