@extends('layouts.app')
@section('title', $page->name)
@section('content')
    <section class="u-align-center u-clearfix u-image u-shading d-u-section-1" src="" data-image-width="2048" data-image-height="1365" id="sec-1904">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-text-1" style="text-transform:uppercase;">{{$page->name}}<span style="font-weight: 700;"></span>
            </h1>
            <p class="u-large-text u-text u-text-variant u-text-2">{{$page->description}}</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach($data as $key => $tournament)
                    <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-{{$key+1}}" data-image-width="1600" data-image-height="1000">
                        <div class="u-container-layout u-similar-container u-container-layout-{{$key}}">
                            <h3 class="u-text u-text-3">{{$tournament->name}}</h3>
                            <p class="u-text u-text-default u-text-4">{{$tournament->description}}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
