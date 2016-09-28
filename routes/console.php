<?php

use Illuminate\Foundation\Inspiring;

use App\Models\Admin;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('admin:create', function () {
    $this->line('Input admin information to create an admin');
    $name = $this->ask('Admin name');
    $email = $this->ask('Admin email');
    $password = $this->secret('Admin password');
    $password_confirm = $this->secret('Confirm admin password');
    if ($password != $password_confirm) {
        $this->error('Password mismatch!');
        return;
    }
    Admin::create(['name' => $name, 'email' => $email, 'password' => bcrypt($password)]);
    $this->info('Create admin successfully');
})->describe('create admin');


