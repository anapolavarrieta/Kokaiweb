<!--Steps to create contact form

1. Install Form Package: composer require laravelcollective/html 5.2.*

2. Open config/app.php and add at the end of providers and aliases (providers: 'Collective\Html\HtmlServiceProvider',, aliases 
'Form' => 'Collective\Html\FormFacade',
'Html' => 'Collective\Html\HtmlFacade',)

3. Configure database. Open .env file and  change database 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=here your database name(blog)
DB_USERNAME=here database username(root)
DB_PASSWORD=here database password(root)

4. Create Contact us table and model
	a. Create migration: php artisan make:migration create_contact_us_table
	b. Add code to migration on database/migrations
	c. Run migration: php artisan migrate
	d. Create model: php artisan make:model ContactUS
	e. Add code to model on app/ContactUS.php

5. Create route
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

6. Create controller
	a. php artisan make:controller ContactUSController
	b. Open app/Http/Controllers/ContactUSController and add the 2 methods

7. Create view

-->

@extends('layouts._master')

	@section ('content')
	    <div class="container center">
            <div class="col-sm-1 align-self-center">
            </div>
            <div class="col-sm-10 align-self-center">
		        <h2 id="contacto"> Contactanos </h2>
		    </div>
			<div class="col-sm-1 align-self-center">
            </div>
        </div>
		@if(Session::has('success'))
	    	<div class="alert alert-success">
	      		{{ Session::get('success') }}
	    	</div>
		@endif

		{!! Form::open(['route'=>'contactus.store']) !!}
		<div class="container center">
            <div class="col-sm-1 align-self-center">
            </div>
            <div class="col-sm-10 align-self-center">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::label('Nombre:') !!}
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Ingresar Nombre']) !!}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::label('Email:') !!}
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Ingresar Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    {!! Form::label('Mensaje:') !!}
                    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Dejanos tu mensaje']) !!}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">¡Contáctanos!</button>
                </div>
			</div>
			<div class="col-sm-1 align-self-center">
            </div>
        </div>
		{!! Form::close() !!}


@stop