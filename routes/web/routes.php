<?php

use Illuminate\Routing\Route;

Route::group(["prefix" => "web" , "namespace" => "Api\V1\web"],function(){

require base_path('routes/web/movie.php');

});
?>
