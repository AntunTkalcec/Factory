@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1 class="font-weight-bold">{{ __('Meals of the world') }}</h1>

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3 class="pt-5">{{ __('Upiši upit') }}</h3>
            <h3 class="pt-5">{{ __('NPR.') }}</h3>
            <h3 class="pt-5">{{ __('.../meals/1/10 ili .../meals ili .../meals/6') }}</h3>
            <h3 class="pt-5"><a href="{{ route('meals', [0, 10]) }}"> {{ __('Ili klikni ovdje za "bez kategorije ali sa tag 10"') }} </a></h3>
        </div>
        
    </div>
</div>

@endsection