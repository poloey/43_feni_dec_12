## routing wild card
~~~php
//inside router
Route::get('/posts/{author}', 'srkController@author');
//controller
public function author ($author) {
  echo $author;
}
~~~

## for route naming and url
~~~php
//web.php
Route::get('/create', 'srkController@create')->name('sarwar');
// in blade file
<a href="{{route('name')}}"></a>
~~~

## how to add login and register and logout in blade file
~~~php
//inside blade file
@guest
<li class="nav-item">
  <a class="nav-link" href="{{route('login')}}">Login</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('register')}}">Register</a>
</li>
@else 
<li class="nav-item">
  <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
</li>
@endguest

~~~

f# how to redirect to different page through loginController, RegisterController

~~~php
protected $redirectTo = '/';
~~~



## we have to use namespace everytime we use a class using `find use` in sublime.  in vs code namespace importer, intelipense


## timestamp manipulation
Every timestamp is a carbon instance. all method and properties can be found http://carbon.nesbot.com/docs/#api-getters

## some artisan command 
~~~bash
php artisan migrate
php aritsan migrate:rollback
php aritan migrate:reset
php aritan migrate:refresh
~~~

## to run others people code in your machine

~~~php
composer install
composer dump-autoload

// make a database 
copy .env.example to .env
create a database
give database credential to .env file


php artisan cache:clear
php artisan key:generate



php artisan migrate
~~~

##  how to change application name

~~~php
// inside .env file
APP_NAME=SRK
// whenever we change something inside .env file we have to restart server
~~~

## migration 
~~~php
php artisan make:migration create_cities_table
~~~

### model + migration 
~~~php
php aritsan make:model City -m
# here m flag for make migration
~~~










