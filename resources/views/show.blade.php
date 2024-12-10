@extends('layouts.app')
@section('content')
    <div class="application">
        <h2 class="application->follows">Job Application Follow-up</h2>
        <div class="applicationTime">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($application->follows as $news)
                    <tr>
                        <td>{{ $news->created_at }}</td>
                        <td>{{ $news->updated_at }}</td>
                        <td>{{ $news->news }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection