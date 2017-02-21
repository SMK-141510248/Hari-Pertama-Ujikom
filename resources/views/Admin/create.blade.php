@extends('layouts/app')
@section('content')



 <h1><center>Create</h1></center>
    {!! Form::open(['url' => 'Admin']) !!}
    
  
                          
 <div class="form-group">
        {!! Form::label('Nama Admin', 'Nama Admin:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('Type User', 'Type User:') !!}
                                <select class="form-control" name="type_user">
                                
                                    <option value="Admin" readonly>Admin </option>
                                     <option value="Guru" readonly>Guru </option>
                                     
                                </select>
                            </div>

                          <div class="form-group">
        {!! Form::label('Password', 'Password:') !!}
        {!! Form::text('password',null,['class'=>'form-control']) !!}
    </div>
        
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    @stop