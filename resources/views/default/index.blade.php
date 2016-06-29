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
                <div class="text-block">
                    <div class="row">
                        <div class="col-lg-12">
                    <a href="{{ route('draw') }}"><button class="btn btn-primary btn-lg">Draw Cards</button></a>
                        </div>
                    </div>

                    <br/>
                    @if (isset($cards) && $cards)
                        <div class="row">
                            @foreach($cards as $card)
                                <div class="col-lg-3" style="margin-left: 10px; border: 1px solid; border-radius: 5px; padding: 3px; min-height: 100px; font-size: 18px;">{{ $card->word }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection