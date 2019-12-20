<?php

Route::post('/register', 'RegistrationController@store');

Route::get('/login-me', 'RegistrationController@login');
