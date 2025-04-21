<?php

use App\Jobs\ReconcileAccount;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = User::first();
//    dispatch(new ReconcileAccount($user));

    ReconcileAccount::dispatch($user);

    return 'Finished';
});
