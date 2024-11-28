@extends('layouts.app')

@section('content')
@section('content')
<div class="tableApplication">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Company Name</th>
                <th scope="col">Offer Details</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->created_at}}</td>
                    <td>{{ $application->companyName}}</td>
                    <td>{{ $application->details}}</td>
                    <td>{{ $application->finalised ? 'Finalised' : 'In Progress' }}</td>
                </tr>
            @endforeach
        <tr>
    </table>
</div>
@endsection