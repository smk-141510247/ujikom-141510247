@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">Tambah Data</div>
        <div class="panel-body">
            <form method="POST" action="{{url('penggajian')}}">
                {{csrf_field()}}
      
                    <div class="control-group">
                        <label class="control-label">Id Tunjangan Pegawai</label>
                        <div class="controls">
                            <select class="form-control" name="tunjangan_pegawai_id">
                                @foreach ($tunjanganpegawai as $data)
                                <option value="{{ $data->id }}">{{ $data->tunjangan_pegawai_id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                <div class="form-group">
                    <label>Jumlah Jam Lembur</label>
                    <input class="form-control" type="text" name="jumlah_jam_lembur" placeholder="Masukkan Petugas Penerima">
                </div>

                <div class="form-group">
                    <label>Jumlah Uang Lembur</label>
                    <input class="form-control" type="text" name="jumlah_uang_lembur" placeholder="Masukkan jumlah uang lembur ">
                </div>

                <div class="form-group">
                    <label>Gaji pokok</label>
                    <input class="form-control" type="text" name="gaji_pokok" placeholder="Masukkan Gaji Pokok">
                </div>

                <div class="form-group">
                    <label>Tanggal Pengambilan</label>
                    <input class="form-control" type="date" name="tanggal_pengambilan" placeholder="Masukkan Tanggal Pengambilan">
                </div>

                <div class="form-group">
                    <label>Status Pengambilan</label>
                    <input class="form-control" type="text" name="status_pengambilan" placeholder="Masukkan Status pengambilan">
                </div>

                <div class="form-group">
                    <label>Petugas Penerima</label>
                    <input class="form-control" type="text" name="petugas_penerima" placeholder="Masukkan Petugas Penerima">
                </div>

                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="submit" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</div>

@stop