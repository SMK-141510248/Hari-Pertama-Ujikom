@extends('layout/app')
@section('content')
<h1><center>Jabatan</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('jabatans/create')}}" class="btn btn-success">Create</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>


<tr class="bg-info">
<th>NO</th>
<th>Kode Jabatan</th>
<th>Nama Jabatan</th>
<th>Besaran Uang</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
@php
$no=1;
@endphp
@foreach($jabatans as $data)
<tr>
	<td>{{$no++}}</td>
	<td>{{$data->Kode_jabatan}}</td>
	<td>{{$data->Nama_jabatan}}</td>
	<td>{{$data->Besaran_uang}}</td>
	<td> <a href="{{url('jabatans',$data->id)}}" class="btn btn-primary">Read</a></td>
	<td> <a href="{{route('jabatans.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
	<td>
	{!! Form::open(['method'=>'DELETE','route'=>['jabatans.destroy', $data->id]]) !!}

	{!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
@endsection