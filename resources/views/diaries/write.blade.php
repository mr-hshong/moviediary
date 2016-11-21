@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">

        </div>

        <div class="panel-body">
            <form action="/diaries" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="movie_id" value="{{ $_GET['movie_id'] }}" />

                <div>
                    <label for="title">Seen Date : </label>
                    <input type="text" name="seen_date" id="seen_date" value="{{ old('seen_date') }}" />
                    {!! $errors->first('title', '<span>:message</span>') !!}
                </div>

                <div>
                    <label for="body">Body :</label>
                    <textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
                    {!! $errors->first('body', '<span>:message</span>') !!}
                </div>

                <div>
                    <button type="submit">Write New Diary</button>
                </div>
            </form>
        </div>
    </div>
@endsection