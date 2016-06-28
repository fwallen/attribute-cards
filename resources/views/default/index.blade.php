@extends('layout.layout');

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="well">
                <h1>Attribute Cards</h1>
                <h2>{{ $wordCount }} Words.</h2>
            </div>
            <div class="well">
                <h2>Draw</h2>
                <div class="text-center">
                    <a href="#"><button class="btn btn-primary btn-lg">Draw Cards</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection