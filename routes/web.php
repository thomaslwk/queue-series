<?php

use App\Jobs\ReconcileAccount;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = User::first();

    ReconcileAccount::dispatch($user)->onQueue('reconcile');

    return 'Finished';
});
