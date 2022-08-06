<?php

use new_package\calculators\CalculatorController;
use new_package\calculators\UserRegistrationController;


Route::get('test', function(){
    dd("This is test page");
});

Route::get('calculator-add/{a}/{b}', [CalculatorController::class , 'add']);
Route::get('calculator-subtract/{a}/{b}', [CalculatorController::class , 'subtract']);

Route::get('user-registration', [UserRegistrationController::class, 'user_registration']);
Route::post('registered', [UserRegistrationController::class, 'registered']);