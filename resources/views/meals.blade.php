@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1 class="font-weight-bold">{{ __('Jela') }}</h1>

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3 class="pt-5">{{ __('Naziv prvog jela') }}</h3>
            <p>{{ __('Sastojci prvog jela') }}</p>
        </div>
        <div class="col-sm-4">
            <h3 class="pt-5">{{ __('Naziv drugog jela') }}</h3>
            <p>{{ __('Sastojci drugog jela') }}</p>
        </div>
        <div class="col-sm-4">
            <h3 class="pt-5">{{ __('Naziv trećeg jela') }}</h3>
            <p>{{ __('Sastojci trećeg jela') }}</p>
        </div>
    </div>
</div>

@endsection