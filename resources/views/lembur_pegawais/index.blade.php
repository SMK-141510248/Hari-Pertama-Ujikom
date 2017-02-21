@extends('layouts/app')
@section('content')

<h1><center>Lembur Pegawai</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('lembur_pegawais/create')}}" class="btn btn-success">Create</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>NO</th>
<th>Kode Lembur</th>
<th>Kode Pegawai</th>
<th>Jumlah Jam</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
@php
$no=1;
@endphp
@foreach($lembur_pegawais as $data)
<tr>
	<td>{{$no++}}</td>
	<td>{{$data->Kategori_lembur->Kode_lembur}}</td>
	<td>{{$data->Pegawai->Nip}}</td>
	<td>{{$data->Jumlah_jam}}</td>
	<td> <a href="{{url('lembur_pegawais',$data->id)}}" class="btn btn-primary">Read</a></td>
	<td> <a href="{{route('lembur_pegawais.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
	<td>
	{!! Form::open(['method'=>'DELETE','route'=>['lembur_pegawais.destroy', $data->id]]) !!}

	{!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
@endsection