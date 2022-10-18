<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Jhovine\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Jhovine\Calculator\CalculatorController@subtract');

// dd(app());
