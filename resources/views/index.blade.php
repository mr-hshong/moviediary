@extends('layouts.app')

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
                    <th>Diaries</th>
                    <th>More info</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <!-- Movie Name -->
                            <td class="table-text">
                                <div>{{ $movie->title }}</div>
                            </td>
                            <td>
                                <div>{{ $movie->release_date }}</div>
                            </td>
                            <td>
                                <div>{{ $movie->diariescount }}</div>
                            </td>

                            <td>
                                <!-- Watched Button -->
                                <a href="{{  url('diaries/write') }}?movie_id={{ $movie->id  }}">
                                <button type="button" class="btn btn-default">
                                        <i class="fa fa-plus"></i> Write My Diary
                                </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection