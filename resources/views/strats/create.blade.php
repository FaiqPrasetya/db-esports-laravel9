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
            <h2 class="section-title">Upload Strats</h2>

            <div class="card">
                <div class="card-header">
                    <h4>Upload Strats</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('strats.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- map name --}}
                        <div class="form-group">
                            <label for="map_name">Map</label>
                            <select name="map_name" id="map_name" class="form-control">
                                <option value="">Select Map</option>
                                @foreach($maps as $map)
                                    <option value="{{ $map->map_name }}">{{ $map->map_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- upload image --}}
                        <div class="form-group">
                            <label for="strats_image">File</label>
                            <input type="file" class="file-control @error('strats_image') is-invalid @enderror"
                                id="strats_image" name="strats_image" placeholder="Upload File" value="{{ old('strats_image')}}">
                            @error('strats_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Strats name --}}
                        <div class="form-group">
                            <label for="strats_name">Strats Name</label>
                            <input type="text" class="form-control @error('strats_name') is-invalid @enderror"
                                id="strats_name" name="strats_name" placeholder="Strats Name" value="{{ old('strats_name')}}">
                            @error('strats_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Strats desc --}}
                        <div class="form-group">
                            <label for="strats_desc">Strats Description</label>
                            <textarea name="strats_desc" id="strats_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('strats_desc') is-invalid @enderror"
                                placeholder="Strats Description">{{ old('strats_desc')}}</textarea>
                            @error('strats_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Agent one selection --}}
                        <div class="form-group">
                            <label for="agent_one">Agent One</label>
                            <select name="agent_one" id="agent_one" class="form-control">
                                <option value="">Select Agent</option>
                                @foreach($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Agent one description --}}
                        <div class="form-group">
                            <label for="agent_one_desc">Agent One Description</label>
                            <textarea name="agent_one_desc" id="agent_one_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_one_desc') is-invalid @enderror"
                                placeholder="Agent One Description">{{ old('agent_one_desc')}}</textarea>
                            @error('agent_one_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Agent two selection --}}
                        <div class="form-group">
                            <label for="agent_two">Agent Two</label>
                            <select name="agent_two" id="agent_two" class="form-control">
                                <option value="">Select Agent</option>
                                @foreach($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Agent two description --}}
                        <div class="form-group">
                            <label for="agent_two_desc">Agent Two Description</label>
                            <textarea name="agent_two_desc" id="agent_two_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_two_desc') is-invalid @enderror"
                                placeholder="Agent Two Description">{{ old('agent_two_desc')}}</textarea>
                            @error('agent_two_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Agent three selection --}}
                        <div class="form-group">
                            <label for="agent_three">Agent Three</label>
                            <select name="agent_three" id="agent_three" class="form-control">
                                <option value="">Select Agent</option>
                                @foreach($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Agent three description --}}
                        <div class="form-group">
                            <label for="agent_three_desc">Agent Three Description</label>
                            <textarea name="agent_three_desc" id="agent_three_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_three_desc') is-invalid @enderror"
                                placeholder="Agent Three Description">{{ old('agent_three_desc')}}</textarea>
                            @error('agent_three_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Agent four selection --}}
                        <div class="form-group">
                            <label for="agent_four">Agent Four</label>
                            <select name="agent_four" id="agent_four" class="form-control">
                                <option value="">Select Agent</option>
                                @foreach($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Agent four description --}}
                        <div class="form-group">
                            <label for="agent_four_desc">Agent Four Description</label>
                            <textarea name="agent_four_desc" id="agent_four_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_four_desc') is-invalid @enderror"
                                placeholder="Agent Four Description">{{ old('agent_four_desc')}}</textarea>
                            @error('agent_four_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        {{-- Agent five selection --}}
                        <div class="form-group">
                            <label for="agent_five">Agent Five</label>
                            <select name="agent_five" id="agent_five" class="form-control">
                                <option value="">Select Agent</option>
                                @foreach($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Agent five description --}}
                        <div class="form-group">
                            <label for="agent_five_desc">Agent Five Description</label>
                            <textarea name="agent_five_desc" id="agent_five_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_five_desc') is-invalid @enderror"
                                placeholder="Agent Five Description">{{ old('agent_five_desc')}}</textarea>
                            @error('agent_five_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a class="btn btn-secondary" href="{{ route('strats.index') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
