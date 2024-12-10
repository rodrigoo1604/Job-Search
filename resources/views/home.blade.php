@extends('layouts.app')

@section('content')
@section('content')
<div class="tableApplication">
    <div class="applicationTime">
    <table>
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Company</th>
                <th scope="col">Details</th>
                <th scope="col">Status</th>
                <th scope="col">News</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->created_at}}</td>
                    <td><b>{{ $application->companyName}}</b></td>
                    <td>{{ $application->details}}</td>
                    <td>{{ $application->finalised ? '✅ Finalised' : '⏳ In Progress' }}</td>
                    <td><a href="{{route('show',$application->id)}}">View follow-up</a>
                    </td>
                </tr>
            @endforeach
        <tr>
    </table>
</div>
</div>
@endsection