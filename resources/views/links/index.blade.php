@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 card">
            <div class="card-body">
                <h2 class="card-title">My Links</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>URI</th>
                            <th>Visits</th>
                            <th>Last Visit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($links as $link)
                        <tr>
                            <td>{{ $link->name }}</td>
                            <td><a href="{{ $link->link }}">{{ $link->link }}</a></td>
                            <td>0</td>
                            <td>Feb 9, 2024 - 20:30</td>
                            <td><a href="/dashboard/links/{{ $link->id }}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/dashboard/links/new" class="btn btn-primary">Add A Link</a>
            </div>
        </div>
    </div>
</div>
@endsection
