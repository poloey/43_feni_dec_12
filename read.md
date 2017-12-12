######laravel project######

### 1st time .env file set up
// Database name: srk
// User name:	root
// Password: blank

### now Xampp start and create database by sql
	//login sql
	=>mysql -u root -p
	//create DB
	=>create database srk;

### Controller file create by artisan command (git bash)
//php artisan make:controller srkController

### view file created by blade language template
//master.blade.php (parent/master blade page)
//index.blade.php (child blade page)
///about.blade.php
////contact.blade.php
/////create.blade.php

### Route web.php connect in controller
//Route::get('/', 'srkController@index');
///Route::get('/about', 'srkController@about');
////Route::get('/contact', 'srkController@contact');
////Route::get('/create', 'srkController@create');


### view file connected in srkcontroller
//public function index(){
	return view('index');
	}

///public function about(){
	return view ('about');
}
////public function contact(){
	return view ('contact');
}
/////public function create(){
	return view ('create');
}

### Now Create Auth and this artisan command
// php artisan make:auth

### Now auth/Register data load stringlength by app>Provuder>appserviceprovider
//use Illuminate\Support\Facades\Schema;
// Schema::defaultStringlength(191);