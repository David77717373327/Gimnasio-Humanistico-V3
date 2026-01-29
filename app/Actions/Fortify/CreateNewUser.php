<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input): User
    {
        \Log::info('Datos recibidos en CreateNewUser:', $input);

        try {
            // Validar los datos
            Validator::make($input, [
                'name' => ['nullable', 'string', 'max:255'],
                'document' => ['required', 'string', 'max:20', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ])->validate();

            \Log::info('Validación pasada, creando usuario...');

            // Crear el usuario
            $user = User::create([
                'name' => $input['name'], // Permitir que el nombre sea nulo
                'document' => $input['document'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role' => $input['role'] ?? 'student',
                'is_approved' => false,
            ]);

            \Log::info('Usuario creado: ' . $user->email);

            // Mensaje de éxito
            session()->flash('status', 'Usuario registrado exitosamente, pendiente de aprobación.');

            return $user;
        } catch (\Exception $e) {
            \Log::error('Error en CreateNewUser: ' . $e->getMessage());
            throw $e; // Re-lanzar para que Fortify maneje el error
        }
    }
}