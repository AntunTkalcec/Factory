@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1 class="font-weight-bold">{{ __('Meals') }}</h1>

</div>

<div class="container">
    <div class="row">
        @if(isset($meals))
        @foreach($meals as $meal)
        <div class="col-sm-4 border border-dark">
            <h3 class="pt-5">Meal title: {{ $meal->title }}</h3>
            <p>Category title: {{ $meal->category_title }}</p>
        </div>
        @endforeach
        @elseif(isset($meal1))
        <div class="col-sm-4">
            <h3 class="pt-5">Meal title: {{ $meal1->title }}</h3>
            <p>Category title: {{ __('Sastojci jela') }}</p>
        </div>
        @endif
    </div>
</div>

@endsection