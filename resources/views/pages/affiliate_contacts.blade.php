@extends('layouts.app')

@section('content')
    <h2>{{ $title }}</h2>
    <p>Type something to search the table :</p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Distance (km)</th>
        </tr>
        </thead>
        <tbody id="myTable">
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->affiliate_id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->distance }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection