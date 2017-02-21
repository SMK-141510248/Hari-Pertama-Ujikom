@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Update Data Pegawai</div>
                <div class="panel-body">
                <hr>
                {!! Form::model($pegawais, ['class' => 'form-horizontal',  'enctype' => 'multipart/form-data', 'method' => 'PATCH', 'route' => ['pegawais.update', $pegawais->id], 'files' => true]) !!}

                    
                    <div class="form-group{{ $errors->has('Nip') ? ' has-error' : '' }}">
                        <label for="Nip" class="col-md-4 control-label">Nama Pegawai</label>
                        <div class="col-md-6">
                            <input type="text" name="Nip" class="form-control" value="{{ $pegawais->Nip }}" >
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                        <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
                        <div class="col-md-6">
                            <select name="jabatan_id" class="form-control">
                                @foreach($jabatans as $data)
                                    <option value="{{ $data->id }}">{{ $data->Nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                        <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
                        <div class="col-md-6">
                            <select name="golongan_id" class="form-control">
                                @foreach($golongans as $data)
                                    <option value="{{ $data->id }}">{{ $data->Nama_golongan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
             

                    <div class="form-group{{ $errors->has('Photo') ? ' has-error' : '' }}">
                        <label for="Photo" class="col-md-4 control-label">Photo</label>
                            <div class="col-md-6">
                                <input id="Photo" type="file" class="form-control" name="Photo" value="{{ old('Photo') }}" required autofocus>
                            </div>
                        </div>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
</div>  
@endsection