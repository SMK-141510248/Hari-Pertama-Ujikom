@extends('layout/app')
@section('content')

<h1><center>Tunjangan</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('tunjangans/create')}}" class="btn btn-success">Create</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>NO</th>
<th>Kode Tunjangan</th>
<th>Kode Jabatan</th>
<th>Kode Golongan</th>
<th>Status</th>
<th>Jumlah Anak</th>
<th>Besaran Uang</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
@php
$no=1;
@endphp
@foreach($tunjangans as $data)
<tr>
	<td>{{$no++}}</td>
	<td>{{$data->Kode_tunjangan}}</td>
	<td>{{$data->Jabatan->Kode_jabatan}}</td>
	<td>{{$data->Golongan->Kode_golongan}}</td>
	<td>{{$data->Status}}</td>
	<td>{{$data->Jumlah_anak}}</td>
	<td>{{$data->Besaran_uang}}</td>
	<td> <a href="{{url('tunjangans',$data->id)}}" class="btn btn-primary">Read</a></td>
	<td> <a href="{{route('tunjangans.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
	<td>
	{!! Form::open(['method'=>'DELETE','route'=>['tunjangans.destroy', $data->id]]) !!}

	{!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
@endsection