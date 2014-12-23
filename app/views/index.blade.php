@extends('layout')

@section('content')
<div class="put-the-dang-thing-in-the-middle">
    <h1>Shorten a URL</h1>

    {{ Form::open(['route' => 'shorten']) }}
        <div class="form-group">
            {{ Form::text('url', null, ['class' => 'form-control', 'id' => 'shorten-input', 'placeholder' => 'https://google.com']) }}
            {{ $errors->first('url', '<div class="error">:message</div>') }}
        </div>
    {{ Form::close() }}

    @if(Session::has('url'))
        <output>{{ link_to_route('redirect', 'shorten url', ['hash' => Session::get('url')->hash]) }}</output>
    @endif
</div>
@stop