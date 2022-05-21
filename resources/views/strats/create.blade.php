@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Tambah User</h2>

            <div class="card">
                <div class="card-header">
                    <h4>Validasi Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('strats.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Map</label>
                            <select name="map_name" class="form-control select2">
                                <option value="">Choose Maps</option>
                                @foreach ($maps as $item)
                                    <option value="{{ $item->id }}">{{ $item->map_name }}</option>
                                @endforeach
                            </div>
                        </select>
                        {{-- <input type="text" class="form-control" id="map_name"
                            name="map_name" placeholder="Choice Your Map" list="list_map"> --}}
                        {{-- <datalist id="list_map"> --}}
                            {{-- <option value="Ascent"></option>
                            <option value="Bind"></option>
                            <option value="Breeze"></option>
                            <option value="Fracture"></option>
                            <option value="Haven"></option>
                            <option value="Icebox"></option>
                            <option value="Split"></option> --}}

                        <div class="form-group">
                            <label for="strats_name">Strats Name</label>
                            <input type="text" class="form-control @error('strats_name') is-invalid @enderror" id="strats_name"
                                name="strats_name" placeholder="Enter Strats Name" value="{{ old('strats_name') }}">
                            @error('strats_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="strats_desc">Strats desc</label>
                            <input type="text" class="form-control @error('strats_desc') is-invalid @enderror" id="strats_desc"
                                name="strats_desc" placeholder="Enter Strats desc" value="{{ old('strats_desc') }}">
                            @error('strats_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="agent_one">Agent One</label>
                            <input type="text" class="form-control @error('agent_one') is-invalid @enderror" id="agent_one"
                                name="agent_one" placeholder="Enter Strats Name" value="{{ old('agent_one') }}" list="list_agent">
                            <datalist id="list_agent">
                                <option value="Astra"></option>
                                <option value="Breach"></option>
                                <option value="Brimstone"></option>
                                <option value="Chyper"></option>
                                <option value="Fade"></option>
                                <option value="Neon"></option>
                                <option value="Omen"></option>
                                <option value="Reyna"></option>
                                <option value="Sova"></option>
                                <option value="Sage"></option>
                                <option value="Viper"></option>
                        </div>

                        <div class="form-group">
                            <label for="agent_one_desc">Agent One Desc</label>
                            <input type="textarea" class="form-control @error('agent_one_desc') is-invalid @enderror"
                                id="agent_one_desc" name="agent_one_desc" placeholder="Enter Your Agent Desc 1">
                            @error('agent_one_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-secondary" href="{{ route('strats.index') }}">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection
