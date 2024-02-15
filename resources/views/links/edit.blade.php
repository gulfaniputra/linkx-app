@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 card">
            <div class="card-body">
                <h2 class="card-title">Edit A Link</h2>
                <form action="/dashboard/links/{{ $link->id }}" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="name">Link Name</label>
                                <input type="text" id="name" name="name"
                                    class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}"
                                    placeholder="GitHub account" value="{{ $link->name }}">
                                @if ($errors->first('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="name">Link URI</label>
                                <input type="text" id="link" name="link"
                                    class="form-control{{ $errors->first('link') ? ' is-invalid' : '' }}"
                                    placeholder="https://github.com/my-username" value="{{ $link->link }}">
                                @if ($errors->first('link'))
                                <div class="invalid-feedback">{{ $errors->first('link') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @csrf
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
