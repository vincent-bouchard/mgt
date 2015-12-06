@extends('layouts.base')

@section('content')
    <header class="jumbotron">
        <div class="container">
            <h1>@lang('welcome.title')</h1>
        </div>

        <nav>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </nav>
    </header>

    <div id="content">
        {!! $content !!}
    </div>
@stop
