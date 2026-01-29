<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, CreatesNewUsers $creator): RedirectResponse
    {
        $user = $creator->create($request->all());

        event(new Registered($user));

        // Si es estudiante y no aprobado, NO loguear, redirigir a register con mensaje
        if ($user->role === 'student' && !$user->is_approved) {
            return redirect()->route('login')->with('status', 'Tu registro ha sido recibido. Espera la aprobación del administrador para acceder.');
        }

        // Para otros roles (ej. admin), loguear normalmente
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}