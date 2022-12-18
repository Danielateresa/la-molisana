@extends('layouts.app')

@section('content')

<main>
    <div class="container py-4">
        @foreach($pasta as $type=>$list)
        <h2 class="type mt-4 mb-1">{{$type}}</h2>
        <div class="row">
            @foreach($list as $model)
            <div class="col-4 position-relative g-2">
                <img src="{{$model['src']}}" alt="">
                <p class="description text-secondary">{{$model['titolo']}}</p>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</main>

@endsection