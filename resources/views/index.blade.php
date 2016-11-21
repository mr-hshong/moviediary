@extends('master')

@section('style')

@stop

@section('content')

    @if(count($movies) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Movies
            </div>

            <div class="panel-body">
                <table class="table table-striped movie-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>Movie Title</th>
                    <th>Release date</th>
                    <th>More info</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <!-- Movie Name -->
                            <td class="table-text">
                                <div>{{ $movie->movieNm }}</div>
                            </td>
                            <td>
                                <div>{{ $movie->openDt }}</div>
                            </td>

                            <td>
                                <!-- Seen Button -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@stop

@section('script')

@stop