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
                    <h4>Tambah Strats</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('strats.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="map_name">Map</label>
                            <select name="map_name" class="form-control select2-dropdown">
                                <option value="">Map Select</option>
                                @foreach ($maps as $item)
                                    <option value="{{ $item->id }}">{{ $item->map_name}}</option>
                                @endforeach
                            </select>
                            @error('map_name')
                                {{ $message }}
                            @enderror
                        </div>

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
                                name="strats_desc" placeholder="Strats Description" value="{{ old('strats_desc') }}">
                            @error('strats_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="agent_one">Agent One</label>
                            <input type="text" class="form-control @error('agent_one') is-invalid @enderror" id="agent_one"
                                name="agent_one" placeholder="Ex: Sova" value="{{ old('agent_one') }}" list="list_agent">
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

                        {{-- Pending --}}
                        <div class="form-group">
                            <label for="agent_one">Agent One</label>
                            <select name="agent_one" class="form-control select2-dropdown">
                                <option value="">Select Agent (1)</option>
                                @foreach ($agents as $item)
                                    <option value="{{ $item->id }}">{{ $item->agent_name}}</option>
                                @endforeach
                            </select>
                            @error('agent_one')
                                {{ $message }}
                            @enderror
                        </div>
                        {{-- Pending --}}

                        <div class="form-group">
                            <label for="agent_one_desc">Agent One Desc</label>
                            <input type="textarea" class="form-control @error('agent_one_desc') is-invalid @enderror"
                                id="agent_one_desc" name="agent_one_desc" placeholder="Agent 1 Description">
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
