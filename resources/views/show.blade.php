@extends('layouts.app')
@section('content')
    <div class="application">
        <h2 class="application->follows">Entry</h2>
        <div class="applicationTime">
            <table>
                <th scope="col">Comments</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                @foreach ($application->follows as $news)
                <tr>
                    <td>{{$news->news}}</td>
                    <td>{{$news->updated_at}}</td>
                    <td>{{$news->created_at}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="applicationContent">
            <p class="applicationEntry">{{$application['entry']}}</p>
        </div>
    </div>
@endsection