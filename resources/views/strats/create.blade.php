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
                        {{-- Maps --}}
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

                        {{-- Strats image upload --}}
                        <div class="form-group">
                            <label for="strats_image">Strats Image Upload</label>
                            <input type="file" name="strats_image" class="file-control" @error('strats_image')@enderror id="strats_image">
                            @error('strats_image')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- Strats Name --}}
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

                        {{-- Strats Description --}}
                        <label for="strats_desc">Strats desc</label>
                        <div class="form-group" id="editor">
                            <input type="text" class="form-control @error('strats_desc') is-invalid @enderror" id="strats_desc"
                                name="strats_desc" placeholder="Strats Description" value="{{ old('strats_desc') }}">
                            @error('strats_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Agent one --}}
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

                        {{-- Agent one desc --}}
                        <label for="agent_one_desc">Agent One Desc</label>
                        <div class="form-group">
                            <input type="textarea" class="form-control ckeditor @error('agent_one_desc') is-invalid @enderror"
                                id="agent_one_desc" name="agent_one_desc" placeholder="Agent 1 Description">
                            @error('agent_one_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
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
