@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.mediaplayers-h1')}} @endslot
        @slot('description') {{__('seo.mediaplayers-desc', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /mediaplayers.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.mediaplayers')],
        ],
      'h1' => __('seo.mediaplayers-h1')
      ])
    @endcomponent

@endsection
