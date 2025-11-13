<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\RoleEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {
    Volt::route('login', 'auth.login')
        ->name('login');

    Volt::route('register', 'auth.register')
        ->name('register');

    Volt::route('forgot-password', 'auth.forgot-password')
        ->name('password.request');

    Volt::route('reset-password/{token}', 'auth.reset-password')
        ->name('password.reset');

});

Route::middleware('auth')->group(function () {
    Volt::route('verify-email', 'auth.verify-email')
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Volt::route('confirm-password', 'auth.confirm-password')
        ->name('password.confirm');
});

Route::post('logout', App\Livewire\Actions\Logout::class)
    ->name('logout');

Route::post('register', function (RegisterRequest $request) {
    $validated = $request->validated();

    try {
        $user = User::create($validated);
        $user->assignRole(RoleEnum::User->value);

        return response()->json([
            'success' => true,
            'message' => 'User registered successfully',
        ]);
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return response()->json([
            'success' => false,
            'message' => $e->getMessage(),
            ],
            500,
        );
    }
});

Route::post('login', function (LoginRequest $request) {

    Log::info('Login data:', $request->all());

    $validated = $request->validated();

    $isValid = Auth::attempt($validated);

    if ($isValid) {
        return response()->json([
            'success' => true,
            'message' => 'You are now logged in.',
            ]
        );
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials.',
            ]
        );
    }

});
