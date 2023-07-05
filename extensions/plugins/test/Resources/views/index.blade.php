@extends('Test::layouts.master')

@section('content')
    <div class="container">
        <h1>Plugin: Test</h1>

        <p>
            This view is loaded from plugin: {!! config('test.name') !!}
        </p>

        <a href="{{ route('test.setting') }}">Go to the Test plugin settings page.</a>
    </div>
@endsection
