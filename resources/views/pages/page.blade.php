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
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.contacts')],
        ],
      'h1' => __('site.contacts')
      ])
    @endcomponent


@endsection
