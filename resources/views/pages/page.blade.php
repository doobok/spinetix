@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') Page @endslot
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
    <div class="h-20 md:h-24 bg-primary"> </div>

    <h1>Hello world</h1>

@endsection
