@extends('layouts.main')

@section('cover')

@include('includes.navbar')
<div class="background" id="cover">
    <div class="message-centered">
        <a href="#promo" class="page-scroll">Ver eventos destacados</a>
    </div>
</div>
@endsection

@section('content')
    @include('includes.navbar-promo')
    @include('includes.promo')

@endsection
