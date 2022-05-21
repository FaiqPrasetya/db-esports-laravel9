@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Data</a></div>
                <div class="breadcrumb-item"><a href="#">Strats</a></div>
                <div class="breadcrumb-item">Edit Strats</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Edit Strats</h2>
            <div class="card">
                <form action="{{ route('strats.update', $strats->id) }}" method="POST">
                    <div class="card-header">
                        <h4>Ubah Strats</h4>
                    </div>
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang"
                                name="nama_barang" value="{{ $strats->map_name }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_barang">Jenis Barang</label>
                            <input type="text" class="form-control" id="jenis_barang"
                                name="jenis_barang" list="list_jenis" value="{{ $strats->jenis_barang }}">
                            <datalist id="list_jenis">
                                <option value="Keyboard"></option>
                                <option value="Headset"></option>
                                <option value="Mouse"></option>
                                <option value="Mouse Pad"></option>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" id="stok"
                                name="stok" value="{{ $strats->stok }}">
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga Barang</label>
                            <input type="text" class="form-control" id="harga_barang"
                                name="harga_barang" value="{{ $strats->harga_barang }}">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-secondary" href="/home">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
