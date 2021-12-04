@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1 class="font-weight-bold">{{ __('Jela') }}</h1>

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3 class="pt-5">{{ __('Upiši upit') }}</h3>
            <h3 class="pt-5">{{ __('NPR.') }}</h3>
            <h3 class="pt-5">{{ __('meals?per_page=5&tags=2&lang=hr&with=ingredients,category,tags&diff_time=1493902343&page=2' )}}</h3>
        </div>
        
    </div>
</div>

@endsection