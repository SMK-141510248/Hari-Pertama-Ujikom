@extends('layout/app')
@section('content')

{!! Form::close() !!}

 <h1><center>Create Jabatan</h1></center>
    {!! Form::open(['url' => 'jabatans']) !!}
    <div class="form-group">
        {!! Form::label('Kode Jabatan', 'Kode Jabatan:') !!}
        {!! Form::text('Kode_jabatan',null,['class'=>'form-control']) !!}
    </div>

     <div class="form-group">
        {!! Form::label('Nama Jabatan', 'Nama Jabatan:') !!}
        {!! Form::text('Nama_jabatan',null,['class'=>'form-control']) !!}
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