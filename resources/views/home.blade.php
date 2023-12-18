@extends('layouts.app')

@section('title','Home')

@section('content')
<main>
    <div id="jumbo" class="w-100">
    </div>
    <div class="bg-cards">
        <div class="container py-5 position-relative d-flex flex-column align-items-center">
            <div class="ind text-white bg-dc position-absolute p-3 fw-bold">
                CURRENT SERIES
            </div>
            <div class="row py-5">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-xl-2 my-4 d-flex flex-column align-items-center">
                        <div class="img-card overflow-hidden">
                            <img src="{{  $comic['thumb']  }}" class="w-100" alt="{{$comic['title']}}">
                        </div>
                        <div class="text-white text-center py-2">
                            {{ $comic['title'] }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center text-white bg-dc px-5 py-2 fw-bold">LOAD MORE</div>
        </div>
    </div>

</main>
@endsection