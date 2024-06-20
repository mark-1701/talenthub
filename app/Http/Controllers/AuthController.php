<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Requests\EmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(EmployeeRequest $request)
    {
        $employee = Employee::where('email', $request->email)->first();

        // verificar si el usuario existe
        if (!$employee)  return ResponseHelper::errorResponse('Email no encontrado', 401);

        // verificar password que tiene hash
        if (Hash::check($request->password, $employee->password)) {
            // si la contraseña está correcta y necesita ser rehashada, actualízala
            if (Hash::needsRehash($employee->password)) {
                $employee->password = Hash::make($request->password);
                $employee->save();
            }
        } else {
            // verificar password que no tiene hash
            if ($employee->password !== $request->password) 
            return ResponseHelper::errorResponse('Email o Password incorrecto', 401);
        } 
        
        // Crear un token de acceso para el usuario
        // $token = $employee->createToken('Personal Access Token')->accessToken;
        // return response()->json([
        //     'employee' => $employee,
        //     'token' => $token,
        // ]);

        $data = new EmployeeResource($employee);
        return ResponseHelper::successResponse($data, 'Credenciales aprobadas',200);
    }
}
