@extends('layouts.index')

@section('content')
    <h1 class="text-center text-2xl py-8  bg-black text-white">World </h1>


    @include('world.partials.create_country')
    @include('world.partials.create_city')


    </div>
@endsection
