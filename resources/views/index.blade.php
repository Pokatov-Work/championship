@extends('layouts.app')

@section('content')
<section class="u-clearfix u-image u-shading u-section-1" id="sec-d73d" data-image-width="1920" data-image-height="1080">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1"> ТУРНИРЫ</h1>
        <h2 class="u-align-center u-subtitle u-text u-text-2"> Все турниры по PUBG, DOTA-2 и CSGO. Список всех будущих и прошедших турниров, расписание турниров и матчей </h2>
        <div class="u-expanded-width u-tab-links-align-left u-tabs u-tabs-1">
            <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
                <li class="u-tab-item u-tab-item-1" role="presentation">
                    <a class="active u-active-grey-60 u-button-style u-grey-10 u-tab-link u-text-active-white u-text-body-color u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true"><span class="u-file-icon u-icon"><img src="/img/dota-2.png" alt=""></span>&nbsp;DOTA-2&nbsp;
                    </a>
                </li>
                <li class="u-tab-item u-tab-item-2" role="presentation">
                    <a class="u-active-grey-60 u-button-style u-grey-10 u-tab-link u-text-active-white u-text-body-color u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false"><span class="u-file-icon u-icon"><img src="/img/counter-strike-logo.png" alt=""></span>&nbsp;CS-GO
                    </a>
                </li>
                <li class="u-tab-item" role="presentation">
                    <a class="u-active-grey-60 u-button-style u-grey-10 u-tab-link u-text-active-white u-text-body-color u-tab-link-3" id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917" aria-selected="false"><span class="u-file-icon u-icon"><img src="/img/pubg.png" alt=""></span>&nbsp;PUBG
                    </a>
                </li>
            </ul>
            <div class="u-tab-content">
                <div class="u-container-style u-custom-color-5 u-tab-active u-tab-pane u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
                    <div class="u-container-layout u-container-layout-1">
                        <div class="u-table u-table-responsive u-table-1">
                            <table class="u-table-entity">
                                <colgroup>
                                    <col width="25%">
                                    <col width="25%">
                                    <col width="25%">
                                    <col width="25%">
                                </colgroup>
                                <tbody class="u-custom-color-3 u-table-alt-custom-color-4 u-table-body u-table-body-1">
                                <tr style="height: 27px;">
                                    <td class="u-table-cell"> ТУРНИР</td>
                                    <td class="u-table-cell"> Дата начала</td>
                                    <td class="u-table-cell">Кол-во участников</td>
                                    <td class="u-table-cell">Призовой фонд</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"> The International XI</td>
                                    <td class="u-table-cell">29.04.2022</td>
                                    <td class="u-table-cell">150</td>
                                    <td class="u-table-cell">2000$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"> PGL Arlington 2022</td>
                                    <td class="u-table-cell">28.04.2022</td>
                                    <td class="u-table-cell">200</td>
                                    <td class="u-table-cell">500$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell">Row 3</td>
                                    <td class="u-table-cell"> 27.04.2022</td>
                                    <td class="u-table-cell">35</td>
                                    <td class="u-table-cell">-</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell">Row 4</td>
                                    <td class="u-table-cell"> 21.04.2022</td>
                                    <td class="u-table-cell">220</td>
                                    <td class="u-table-cell">120$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell">NTurs</td>
                                    <td class="u-table-cell">25.06.2022</td>
                                    <td class="u-table-cell">852</td>
                                    <td class="u-table-cell">800$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-custom-color-5 u-tab-pane u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
                    <div class="u-container-layout u-container-layout-2">
                        <div class="u-table u-table-responsive u-table-2">
                            <table class="u-table-entity">
                                <colgroup>
                                    <col width="25%">
                                    <col width="25%">
                                    <col width="25%">
                                    <col width="25%">
                                </colgroup>
                                <tbody class="u-custom-color-3 u-table-alt-custom-color-4 u-table-body u-table-body-2">
                                <tr style="height: 27px;">
                                    <td class="u-table-cell"> ТУРНИР</td>
                                    <td class="u-table-cell"> Дата начала</td>
                                    <td class="u-table-cell">Кол-во участников</td>
                                    <td class="u-table-cell">Призовой фонд</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"> BLAST World Final 2022</td>
                                    <td class="u-table-cell">29.04.2022</td>
                                    <td class="u-table-cell">150</td>
                                    <td class="u-table-cell">2000$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"> AXM 2022</td>
                                    <td class="u-table-cell">28.04.2022</td>
                                    <td class="u-table-cell">200</td>
                                    <td class="u-table-cell">500$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell">Row 3</td>
                                    <td class="u-table-cell"> 27.04.2022</td>
                                    <td class="u-table-cell">35</td>
                                    <td class="u-table-cell">5$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell">Row 4</td>
                                    <td class="u-table-cell"> 21.04.2022</td>
                                    <td class="u-table-cell">220</td>
                                    <td class="u-table-cell">120$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-custom-color-5 u-tab-pane u-tab-pane-3" id="tab-2917" role="tabpanel" aria-labelledby="link-tab-2917">
                    <div class="u-container-layout u-container-layout-3">
                        <div class="u-table u-table-responsive u-table-3">
                            <table class="u-table-entity">
                                <colgroup>
                                    <col width="25%">
                                    <col width="25%">
                                    <col width="25%">
                                    <col width="25%">
                                </colgroup>
                                <tbody class="u-custom-color-3 u-table-alt-custom-color-4 u-table-body u-table-body-3">
                                <tr style="height: 27px;">
                                    <td class="u-table-cell"> ТУРНИР</td>
                                    <td class="u-table-cell"> Дата начала</td>
                                    <td class="u-table-cell">Кол-во участников</td>
                                    <td class="u-table-cell">Призовой фонд</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell">PUBG DD 22</td>
                                    <td class="u-table-cell">29.04.2022</td>
                                    <td class="u-table-cell">150</td>
                                    <td class="u-table-cell">2000$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"> PGL Arlington 2022</td>
                                    <td class="u-table-cell">28.04.2022</td>
                                    <td class="u-table-cell">200</td>
                                    <td class="u-table-cell">500$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell">Row 3</td>
                                    <td class="u-table-cell"> 27.04.2022</td>
                                    <td class="u-table-cell">35</td>
                                    <td class="u-table-cell">-</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell">Row 4</td>
                                    <td class="u-table-cell"> 21.04.2022</td>
                                    <td class="u-table-cell">220</td>
                                    <td class="u-table-cell">120$</td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                <tr style="height: 45px;">
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                    <td class="u-table-cell"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
