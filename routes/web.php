<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "/api/"], function () {
// require __DIR__ . '/web/routes.php';
require base_path( 'routes/web/routes.php');
require base_path ('routes/auth/routes.php');
});
