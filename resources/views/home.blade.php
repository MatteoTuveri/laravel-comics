@extends('layouts.app')

@section('title','Home')

@section('content')
<main>
    <div id="jumbo" class="w-100">
    </div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card overflow-hidden">
                        <img src="{{  $comic['thumb']  }}" class="card-img-top" alt="{{   $comic['title']  }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection