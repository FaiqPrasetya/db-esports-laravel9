@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Data</a></div>
                <div class="breadcrumb-item"><a href="{{ route('strats.index') }}">Strats</a></div>
                <div class="breadcrumb-item">Edit Strats</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Edit Strats</h2>
            <div class="card">
                <form action="{{ route('strats.update', $strats->id) }}" method="POST" enctype="multipart/form-data">
                    <div class="card-header">
                        <h4>Ubah Strats</h4>
                    </div>
                    <div class="card-body">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="map_name">Map</label>
                            <select name="map_name" id="map_name" class="form-control">
                                <option value="{{ $strats->map_name }}">{{ $strats->map_name }}</option>
                                @foreach ($maps as $item)
                                    <option value="{{ $item->map_name }}">{{ $item->map_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <hr>
                            <label for="strats_image">File</label>
                            <input type="file" class="file-control @error('strats_image') is-invalid @enderror"
                                id="strats_image" name="strats_image" placeholder="Upload File"
                                value="{{ $strats->strats_image }}"><hr>
                            <div>
                                {{-- Gambar lama --}}
                                <span>Old / Current Image  : </span>
                                <img src="{{ asset('uploads/images/' . $strats->strats_image) }}"
                                    alt="{{ $strats->strats_image }}" width="20%" height="20%">

                                {{-- Gambar Baru --}}
                                <span style="margin-left: 20px">New / Uploaded Image : </span>
                                <img id="uploaded" alt="Gambar Baru" width="20%" height="20%">

                            </div>
                            {{-- Mandatory brhr --}}
                            <br>
                            {{-- Mandatory brhr --}}
                            <h6 style="color: red">Biarkan jika tidak ingin mengganti gambar</h6>
                            @error('strats_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                @enderror
                        </div>
                        <hr>

                        <div class="form-group">
                            <label for="strats_name">Strats Name</label>
                            <input type="text" class="form-control @error('strats_name') is-invalid @enderror"
                                id="strats_name" name="strats_name" placeholder="Strats Name"
                                value="{{ $strats->strats_name }}">
                            @error('strats_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="strats_desc">Strats Description</label>
                            <textarea name="strats_desc" id="strats_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('strats_desc') is-invalid @enderror"
                                placeholder="Strats Description">{{ $strats->strats_desc }}</textarea>
                            @error('strats_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="agent_one">Agent One</label>
                            <select name="agent_one" id="agent_one" class="form-control">
                                <option value="{{ $strats->agent_one }}">{{ $strats->agent_one }}</option>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->agent_name }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="agent_one_desc">Agent One Description</label>
                            <textarea name="agent_one_desc" id="agent_one_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_one_desc') is-invalid @enderror"
                                placeholder="Agent One Description">{{ $strats->agent_one_desc }}</textarea>
                            @error('agent_one_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                @enderror
                        </div>


                        <div class="form-group">
                            <label for="agent_two">Agent Two</label>
                            <select name="agent_two" id="agent_two" class="form-control">
                                <option value="{{ $strats->agent_two }}">{{ $strats->agent_two }}</option>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->agent_name }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="agent_two_desc">Agent Two Description</label>
                            <textarea name="agent_two_desc" id="agent_two_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_two_desc') is-invalid @enderror"
                                placeholder="Agent two Description">{{ $strats->agent_two_desc }}</textarea>
                            @error('agent_two_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                @enderror
                        </div>


                        <div class="form-group">
                            <label for="agent_three">Agent Three</label>
                            <select name="agent_three" id="agent_three" class="form-control">
                                <option value="{{ $strats->agent_three }}">{{ $strats->agent_three }}</option>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->agent_name }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="agent_three_desc">Agent Three Description</label>
                            <textarea name="agent_three_desc" id="agent_three_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_three_desc') is-invalid @enderror"
                                placeholder="Agent three Description">{{ $strats->agent_three_desc }}</textarea>
                            @error('agent_three_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                @enderror
                        </div>


                        <div class="form-group">
                            <label for="agent_four">Agent Four</label>
                            <select name="agent_four" id="agent_four" class="form-control">
                                <option value="{{ $strats->agent_four }}">{{ $strats->agent_four }}</option>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->agent_name }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="agent_four_desc">Agent Four Description</label>
                            <textarea name="agent_four_desc" id="agent_four_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_four_desc') is-invalid @enderror"
                                placeholder="Agent four Description">{{ $strats->agent_four_desc }}</textarea>
                            @error('agent_four_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                @enderror
                        </div>


                        <div class="form-group">
                            <label for="agent_five">Agent five</label>
                            <select name="agent_five" id="agent_five" class="form-control">
                                <option value="{{ $strats->agent_five }}">{{ $strats->agent_five }}</option>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->agent_name }}">{{ $agent->agent_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="agent_five_desc">Agent five Description</label>
                            <textarea name="agent_five_desc" id="agent_five_desc" cols="30" rows="10"
                                class="form-control ckeditor @error('agent_five_desc') is-invalid @enderror"
                                placeholder="Agent five Description">{{ $strats->agent_five_desc }}</textarea>
                            @error('agent_five_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                @enderror
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-secondary" href={{ route('strats.index') }}>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@push('customScript')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#uploaded').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#strats_image").change(function() {
            readURL(this);
        });
    </script>
@endpush
