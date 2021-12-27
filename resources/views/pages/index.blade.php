@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.mp-title')}} @endslot
        @slot('description') {{__('seo.mp-description', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /main.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')

    @include('layouts.animated.header')


    <h1>Hello world</h1>

@endsection
