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
                <th scope="col">News</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->created_at}}</td>
                    <td>{{ $application->companyName}}</td>
                    <td>{{ $application->details}}</td>
                    <td>{{ $application->finalised ? 'Finalised' : 'In Progress' }}</td>
                    <td>
                        <ul>
                            @forelse ($application->follows as $follow)
                                <li>{{ $follow->news }}</li>
                            @empty
                                <li>No following yet</li>
                            @endforelse
                        </ul>
                    </td>
                </tr>
            @endforeach
        <tr>
    </table>
</div>
@endsection