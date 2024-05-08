<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

class UserController extends Controller
{
    /**
     * Obtener todos los usuarios con sus domicilios correspondientes.
     * se realiza una consulta para obtener todos los usuarios con sus domicilios
     * por metodo get. y se en formato json
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllUsersWithDomicilios()
    {
        $users = DB::table('users')
            ->leftJoin('user_domicilio', 'users.user_id', '=', 'user_domicilio.user_id')
            ->select('users.*', 'user_domicilio.*')
            ->get();

        return response()->json($users);
    }

    public function getAllUsersWithDomiciliosAndAge()
    {
        $users = User::with('domicilio')->get();

        // Calcular la edad de cada usuario
        foreach ($users as $user) {
            $user->edad = $user->fecha_nacimiento->diffInYears(now());
        }

        return response()->json($users);
    }
}
