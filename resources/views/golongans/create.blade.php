@extends('layout/app')
@section('content')

{!! Form::close() !!}

 <h1><center>Create Golongan</h1></center>
    {!! Form::open(['url' => 'golongans']) !!}
    <div class="form-group">
        {!! Form::label('Kode Golongan', 'Kode Golongan:') !!}
        {!! Form::text('Kode_golongan',null,['class'=>'form-control']) !!}
    </div>

     <div class="form-group">
        {!! Form::label('Nama Golongan', 'Nama Golongan:') !!}
        {!! Form::text('Nama_golongan',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Besaran Uang', 'Besaran Uang:') !!}
        {!! Form::text('Besaran_uang',null,['class'=>'form-control']) !!}
    </div>
     
   
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    @stop