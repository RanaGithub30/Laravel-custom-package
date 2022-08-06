<?php

use users\signup\UserRegistrationController;

Route::get('user-registration', function(){
    dd("register");
})->name('user-registration');
// Route::get('user-registration', [UserRegistrationController::class, 'user_registration']);