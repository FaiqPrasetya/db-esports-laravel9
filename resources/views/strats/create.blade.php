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
                                    <option value="{{ $item->id }}">{{ $item->map_name }}</option>
                                @endforeach
                            </select>
                            @error('map_name')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- Strats image upload --}}
                        <div class="form-group">
                            <label for="strats_image">Strats Image Upload</label>
                            <input type="file" name="strats_image" class="file-control" @error('strats_image')  @enderror
                                id="strats_image">
                            @error('strats_image')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- Strats Name --}}
                        <div class="form-group">
                            <label for="strats_name">Strats Name</label>
                            <input type="text" class="form-control @error('strats_name') is-invalid @enderror"
                                id="strats_name" name="strats_name" placeholder="Enter Strats Name"
                                value="{{ old('strats_name') }}">
                            @error('strats_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Strats Description w/ ckeditor --}}
                        <div class="form-group">
                            <label for="strats_desc">Strats desc</label>
                            <div>
                                <textarea name="strats_desc" class="form-control ckeditor @error('strats_desc') is-invalid @enderror" id="strats_desc"
                                    cols="30" rows="10" placeholder="Strats Description" required></textarea>
                            </div>
                        </div>

                        {{-- Agent one --}}
                        <div class="form-group">
                            <label for="agent_one">Agent One</label>
                            <select name="agent_one" class="form-control select2-dropdown">
                                <option value="">Select Agent (1)</option>
                                @foreach ($agents as $item)
                                    <option value="{{ $item->id }}">{{ $item->agent_name }}</option>
                                @endforeach
                            </select>
                            @error('agent_one')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- Agent one desc w/ ckeditor --}}
                        <div class="form-group">
                            <label for="agent_one_desc">Agent One Desc</label>
                            <div>
                                <textarea name="agent_one_desc" class="form-control ckeditor @error('agent_one_desc') is-invalid @enderror" id="agent_one_desc"
                                cols="30" rows="10" placeholder="Agent one desc" required></textarea>
                            </div>
                        </div>

                        {{-- Agent two --}}
                        <div class="form-group">
                            <label for="agent_two">Agent Two</label>
                            <select name="agent_two" class="form-control select2-dropdown">
                                <option value="">Select Agent (2)</option>
                                @foreach ($agents as $item)
                                    <option value="{{ $item->id }}">{{ $item->agent_name }}</option>
                                @endforeach
                            </select>
                            @error('agent_two')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- Agent two desc w/ ckeditor --}}
                        <div class="form-group">
                            <label for="agent_two_desc">Agent Two Desc</label>
                            <div>
                                <textarea name="agent_two_desc" class="form-control ckeditor @error('agent_two_desc') is-invalid @enderror" id="agent_two_desc"
                                cols="30" rows="10" placeholder="Agent two desc" required></textarea>
                            </div>
                        </div>

                        {{-- Agent three --}}
                        <div class="form-group">
                            <label for="agent_three">Agent Three</label>
                            <select name="agent_three" class="form-control select2-dropdown">
                                <option value="">Select Agent (3)</option>
                                @foreach ($agents as $item)
                                    <option value="{{ $item->id }}">{{ $item->agent_name }}</option>
                                @endforeach
                            </select>
                            @error('agent_three')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- Agent one three w/ ckeditor --}}
                        <div class="form-group">
                            <label for="agent_three_desc">Agent Three Desc</label>
                            <div>
                                <textarea name="agent_three_desc" class="form-control ckeditor @error('agent_three_desc') is-invalid @enderror" id="agent_three_desc"
                                cols="30" rows="10" placeholder="Agent three desc" required></textarea>
                            </div>
                        </div>

                        {{-- Agent four --}}
                        <div class="form-group">
                            <label for="agent_four">Agent Four</label>
                            <select name="agent_four" class="form-control select2-dropdown">
                                <option value="">Select Agent (4)</option>
                                @foreach ($agents as $item)
                                    <option value="{{ $item->id }}">{{ $item->agent_name }}</option>
                                @endforeach
                            </select>
                            @error('agent_four')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- Agent four desc w/ ckeditor --}}
                        <div class="form-group">
                            <label for="agent_four_desc">Agent Four Desc</label>
                            <div>
                                <textarea name="agent_four_desc" class="form-control ckeditor @error('agent_four_desc') is-invalid @enderror" id="agent_four_desc"
                                cols="30" rows="10" placeholder="Agent four desc" required></textarea>
                            </div>
                        </div>

                        {{-- Agent five --}}
                        <div class="form-group">
                            <label for="agent_five">Agent Five</label>
                            <select name="agent_five" class="form-control select2-dropdown">
                                <option value="">Select Agent (5)</option>
                                @foreach ($agents as $item)
                                    <option value="{{ $item->id }}">{{ $item->agent_name }}</option>
                                @endforeach
                            </select>
                            @error('agent_five')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- Agent five desc w/ ckeditor --}}
                        <div class="form-group">
                            <label for="agent_five_desc">Agent Five Desc</label>
                            <div>
                                <textarea name="agent_five_desc" class="form-control ckeditor @error('agent_five_desc') is-invalid @enderror" id="agent_five_desc"
                                cols="30" rows="10" placeholder="Agent five desc" required></textarea>
                            </div>
                        </div>

                        {{-- ckeditor scripts --}}
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor'))
                                .catch(error => {
                                    console.error(error);
                                });
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
