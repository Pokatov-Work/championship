@extends('layouts.app')
@section('title', 'Liga-Game')
@section('content')
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-d73d" data-image-width="1920" data-image-height="1080">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-custom-font u-font-open-sans u-text u-text-1"> Liga-game</h1>
            <p class="u-align-center u-text u-text-2">Смотри, создавай и принимай участие в самых топовых турнирах киберспорта</p>
            <h2 class="u-align-left u-text u-text-3">Топ соревнований </h2>

            @foreach($data as $tournament)
            <p class="u-text u-text-4" style="text-transform: uppercase">{{ $tournament['name'] }}</p>
            <div class="u-expanded-width u-gallery u-layout-horizontal u-lightbox u-no-transition u-show-text-on-hover u-width-fixed u-gallery-1">
                <div class="u-gallery-inner">
                    @foreach($tournament['tournamentList'] as $key => $item)
                    <div class="u-effect-fade u-gallery-item u-gallery-item-{{$key}}">
                        <div class="u-back-slide" data-image-width="626" data-image-height="417">
                            <img class="u-back-image u-back-image-1" src="/img/{{$item['image_path']}}" alt="{{$item['name']}}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-1">
                            <p class="u-gallery-heading" style="font-weight: 700; line-height: 1.6; font-size: 1.25rem;">{{$item['name']}}</p>
                            <p class="u-gallery-text">{{$item['date_start']}}<br>{{$item['prize_fund']}}<br>{{$item['player']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                    </span>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    <section class="u-align-left u-clearfix u-image u-shading u-section-2" data-image-width="1040" data-image-height="680" id="sec-c398">
        <div class="u-align-center u-clearfix u-sheet u-sheet-1">
            <h3 class="u-text u-text-default u-text-1">Организуй свой турнир</h3>
            <p class="u-align-left u-text u-text-2">Ты можешь создать свой собственный турнир, выбрать спонсоров и собрать участников.</p>
            <a href="#" class="u-border-none u-btn u-btn-round u-button-style u-palette-1-dark-2 u-radius-5 u-btn-1">создать турнир</a>
        </div>
    </section>
@endsection
