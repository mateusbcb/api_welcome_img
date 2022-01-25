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
    <div class="row" id="welcomes">
        @foreach($welcomes as $key => $welcome)
            <div class="col">
                <a href="{{ route('welcome.show',$welcome->id) }}">
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
                </a>
            </div>
        @endforeach
    </div>
    {{-- Pagination --}}
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    @if ($welcomes->onFirstPage())
                        <li class="page-item disabled"><a class="page-link">Anterior</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $welcomes->previousPageUrl() }}">Anterior</a></li>
                    @endif
                    @for($i = 0; $i < $welcomes->lastPage(); $i++)
                        @if ($welcomes->currentPage() == $i+1)
                            <li class="page-item active"><a class="page-link" href="{{ $welcomes->url($i+1) }}">{{ $i+1 }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $welcomes->url($i+1) }}">{{ $i+1 }}</a></li>
                        @endif
                    @endfor

                    @if ($welcomes->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $welcomes->nextPageUrl() }}">Próximo</a></li>
                    @else
                        <li class="page-item disabled"><a class="page-link">Próximo</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
