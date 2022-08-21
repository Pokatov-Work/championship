@extends('layouts.app')
@section('title', 'Турниры')
@section('content')
<section class="u-align-center u-clearfix u-image u-shading t-u-section-1" src="" data-image-width="1680" data-image-height="1050" id="sec-bb85">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1"> ТУРНИРЫ</h1>
        <h2 class="u-align-center u-subtitle u-text u-text-2"> Все турниры по PUBG, DOTA-2 и CSGO. Список всех будущих и прошедших турниров, расписание турниров и матчей </h2>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                @foreach($data as $key => $game)
                    <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-{{$key+1}}" data-image-width="1280" data-image-height="720">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-{{$key}}">
                            <h3 class="u-text u-text-default u-text-3">{{$game->name}}</h3>
                            <p class="u-text u-text-default u-text-4">{{$game->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
