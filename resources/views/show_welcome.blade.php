@extends('layouts.index.main')
@section('title', 'Welcome')

<style>
    #welcomes {
        /* background: #CCC; */
        padding: 0.8% 0;
    }
    .card {
        overflow: hidden;
        height: 100%;
        box-shadow: 0px 3px 10px rgb(51, 51, 51);
        border: 1px solid #000000;
    }
    .card:hover {
        box-shadow: 5px 5px 10px rgb(51, 51, 51);
        bottom: 10px;
        right: ;: 10px;
    }

    .card-img-top {
        height: 100%;
    }

    .card-body {
        position: absolute;
        color: #FFF;
        bottom: 0;
        width: 50%;
        overflow: hidden;
        background-color: rgba(54, 54, 54, 0.404);
        border-top-right-radius: 10px;
        box-shadow: 5px -5px 30px rgb(71, 71, 71);
    }

    .title-welcome {
        font-size: 28px;
        font-weight: 700;
    }

    .phrase-welcome {
        font-size: 20px;
        font-weight: 400;
    }
</style>

@section('content')
<div class="container-fluid">
    {{-- Previews Welcomes --}}
    <a href="{{ route('welcome.index') }}" class="btn btn-primary">Voltar</a>
    <div class="row" id="welcomes">
        <div class="col">
            <div class="card">
                @if ($welcome->url != null)
                    <img src="{{ $welcome->url }}" class="card-img-top" alt="{{ $welcome->title }}">
                @elseif($welcome->url == null)
                    <img src="{{ asset('assets/img/welcomes/'. $welcome->image) }}" class="card-img-top" alt="{{ $welcome->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title title-welcome">{{ $welcome->title }}</h5>
                    <p class="card-text phrase-welcome">{{ $welcome->phrase }}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('welcome.index') }}" class="btn btn-primary">Voltar</a>
</div>
@endsection
