@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row gx-4">
        <div class="col-3 " id="leftpane">
            @include('widgets.dialog-form')
        </div>
        <div class="col-6">
            <h2>LOGIN TO START YOUR DIALOG</h2>
            @include('widgets.dialog-card')
        </div>
        <div class="col-3">
            @include('widgets.search-bar')
        </div>
    </div>
</div>
@endsection
