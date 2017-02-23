@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Pegawai</div>
        <div class="panel-body">
        <a class="btn btn-success" href="{{url('pegawai/create')}}">Tambah Data</a><br><br>
           <div class="form-group"><center>
    <form action="{{url('golongan')}}/?nama_golongan=nama_golongan">
        <input type="text" name="nama_golongan" placeholder="Cari"></form>
    </center></div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>Id</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Golongan</th>
                        <th>Photo</th>
                        <th colspan="3">Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($pegawai as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->nip}} </td>
                        <td> {{$data->User->name}} </td>
                        <td> {{$data->User->email}} </td>
                        <td> {{$data->jabatan->nama_jabatan}} </td>
                        <td> {{$data->golongan->nama_golongan}} </td>
                       <td><center><img src="/assets/image/{{ $data->foto }}" class="img-polaroid"" method="post" width="50px" height="50px"></center></td>
                       <td><a href="{{route('pegawai.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                       <td>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['pegawai.destroy', $data->id]]) !!}
                         {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                       </td>
                        
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection