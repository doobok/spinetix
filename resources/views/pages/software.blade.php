@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.software-h1')}} @endslot
        @slot('description') {{__('seo.software-desc', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /software.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.software')],
        ],
      'h1' => __('seo.software-h1')
      ])
    @endcomponent

@endsection
