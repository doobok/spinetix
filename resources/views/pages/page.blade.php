@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{$page->getTranslatedAttribute('title')}} @endslot
        @slot('description') {{$page->getTranslatedAttribute('description')}} @endslot
        @slot('image') @if($page->seo_image == true)
            {{ Voyager::image( $page->seo_image ) }}@else
            {{ Voyager::image( $page->image ) }}@endif
        @endslot
        @slot('date') {{$page->created_at}} @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', $page->getTranslatedAttribute('heading')],
        ],
      'h1' => $page->getTranslatedAttribute('heading')
      ])
    @endcomponent


@endsection
