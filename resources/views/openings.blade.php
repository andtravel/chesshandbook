@extends('layouts.base')
@section('title','Дебют')
@section ('main')
        <h1 class="text-center">Дебют</h1>
        <p>
            <b>Дебют</b> - начальная стадия шахматной партии, основной целью которой является мобилизация боевых сил.
        </p>
        <p> Средняя продолжительность дебютной стадии составляет 10-15 ходов. В наше время некоторые дебютные системы исследованы вплоть до 30-40 ходов.</p>
        <p>Дебютная теория подразделяет дебюты на <b>ОТКРЫТЫЕ</b> , <a href="#01"><b>ПОЛУОТКРЫТЫЕ</b></a>, <a href="#02"><b>ЗАКРЫТЫЕ</b></a>.</p>

        <div class="text-center">
            <h2>Открытые дебюты</h2>
            <div class="cbdiagram"
                 data-size="50%"
                 data-buttons="0"
                 data-fen="rnbqkbnr/pppp1ppp/8/4p3/4P3/8/PPPP1PPP/RNBQKBNR w KQkq e6 0 2">
            </div>
            <p>Начинаются с ходов 1.е2-е4 е7-е5, к ним относятся:</p>

            <table class="table table-striped table-hover opentab" border="2">
                <tbody>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>f3 <span class="f2">C</span>c6 3. <span class="f2">E</span>c4 <span class="f2">E</span>c5</b></td>
                    <td><a href="{{route ('italiangame')}}"><b>Итальянская партия (C54)</b></a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>f3 <span class="f2">C</span>c6 3. <span class="f2">E</span>c4 <span class="f2">E</span>c5 4. b4</b></td>
                    <td><a href="#">Гамбит Эванса</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>f3 <span class="f2">C</span>c6 3. <span class="f2">E</span>c4 <span class="f2">C</span>f6</b></td>
                    <td><a href="#">Защита двух коней</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">E</span>c4</b></td>
                    <td><a href="#">Дебют слона</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>f3 <span class="f2">C</span>c6 3. <span class="f2">E</span>b5</b></td>
                    <td><a href="#">Испанская партия</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. d4</b></td>
                    <td><a href="#">Центральный дебют</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>c3</b></td>
                    <td><a href="#">Венская партия</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. f4</b></td>
                    <td><a href="#">Королевский гамбит</a></td>
                </tr>
                <tr>
                    <td><b>1. е4 е5 2. <span class="f2">C</span>f3 <span class="f2">C</span>c6 3. c3</b></td>
                    <td><a href="#">Английская партия</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>f3 d6</b></td>
                    <td><a href="">Защита Филидора</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>f3 <span class="f2">C</span>f6</b></td>
                    <td><a href="">Русская партия</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>f3 <span class="f2">C</span>c6 3. d4</b></td>
                    <td><a href="">Шотландская партия</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>f3 <span class="f2">C</span>c6 3. <span class="f2">C</span>c3</b></td>
                    <td><a href="">Дебют трех коней</a></td>
                </tr>
                <tr>
                    <td><b>1. e4 e5 2. <span class="f2">C</span>f3 <span class="f2">C</span>c6 3. <span class="f2">C</span>c3 <span class="f2">C</span>f6</b></td>
                    <td><a href="">Дебют четырех коней</a></td>
                </tr>
                <tr>
                    <td><b>1. е4 е5 2. <span class="f2">C</span>е2</b></td>
                    <td><a href="">Дебют Алапина</a></td>
                </tr>
                <tr>
                    <td><b>1. е4 е5</b></td>
                    <td><a href="">Другие варианты</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center">
            <a name="01"><h2>Полуоткрытые дебюты</h2></a>
            <div class="cbdiagram"
                 data-size="50%"
                 data-buttons="0"
                 data-arrows="e7e6,d7d6,d7d5,c7c6,c7c5,b7b6,a7a6,g7g6,b8c6,g8f6"
                 data-fen="rnbqkbnr/pppppppp/8/8/4P3/8/PPPP1PPP/RNBQKBNR b KQkq e3 0 1">
            </div>
            <p>Начинаются с ходов 1.е2-е4 и любого ответа черных кроме 1. … е7-е5, к ним относятся:</p>
            <table class="table table-striped opentab" border="2">
                <tbody>
                <tr>
                    <td><b>1.e4 e6</b></td>
                    <td><a href="#">Французская партия</a></td>
                </tr>
                <tr>
                    <td><b>1.e4 d5</b></td>
                    <td><a href="#">Скандинавская защита</a></td>
                </tr>
                <tr>
                    <td><b>1.e4 <span class="f2">C</span>f6</b></td>
                    <td><a href="#">Защита Алехина</a></td>
                </tr>
                <tr>
                    <td><b>1.e4 d6</b></td>
                    <td><a href="#">Защита Пирца-Уфимцева</a></td>
                </tr>
                <tr>
                    <td><b>1.e4 c6</b></td>
                    <td><a href="#">Защита Каро-Канн</a></td>
                </tr>
                <tr>
                    <td><b>1.e4 c5</b></td>
                    <td><a href="#">Сицилианская защита</a></td>
                </tr>
                <tr>
                    <td><b>1. е4</b></td>
                    <td><a href="#">Другие варианты, не указанные выше</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <a name="02"><h2>Закрытые дебюты</h2></a>
            <div class="cbdiagram"
                 data-size="50%"
                 data-buttons="0"
                 data-arrows="d2d4,c2c4,f2f4,b2b3,b2b4,g2g3,b1c3,g1f3"
                 data-fen="rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR b KQkq d3 0 1">
            </div>
            <p>Начинаются с ходов, отличных от 1.е2-е4, к ним относятся:</p>

            <table class="table table-striped opentab" border="2">
                <tbody>
                <tr>
                    <td><b>1.d4 d5 2. c4 <span class="f2">C</span>c6</b></td>
                    <td><a href="#">Защита Чигорина</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 d5 2. c4 e5</b></td>
                    <td><a href="#">Контргамбит Альбина</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 d5 2. c4 c6</b></td>
                    <td><a href="#">Славянская защита</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 d5 2. c4 dxc4</b></td>
                    <td><a href="#">Принятый ферзевый гамбит</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 d5 2. c4 e6</b></td>
                    <td><a href="#">Ферзевый гамбит</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 d5 2. c4 e6 3. <span class="f2">C</span>c3 <span class="f2">C</span>f6 4. <span class="f2">C</span>f3 <span class="f2">E</span>b4</b></td>
                    <td><a href="#">Защита Рагозина</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2. c4 g6 3. <span class="f2">C</span>c3 d5</b></td>
                    <td><a href="#">Защита Грюнфельда</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2. c4 e6 3. g3 d5</b></td>
                    <td><a href="#">Каталонское начало</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2.c4 e6 3.<span class="f2">C</span>f3 c5 4.d5 b5</b></td>
                    <td><a href="#">Гамбит Блюменфельда</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2.c4 e6 3.<span class="f2">C</span>f3 <span class="f2">E</span>b4+</b></td>
                    <td><a href="#">Защита Боголюбова</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2. c4 e6 3. <span class="f2">C</span>f3 b6</b></td>
                    <td><a href="#">Новоиндийская защита</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2. c4 e6 3. <span class="f2">C</span>c3 <span class="f2">E</span>b4</b></td>
                    <td><a href="#">Защита Нимцовича</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2. c4 g6 3. <span class="f2">C</span>c3 <span class="f2">E</span>g7</b></td>
                    <td><a href="#">Староиндийская защита</a></td>
                </tr>
                <tr>
                    <td><b>1. <span class="f2">C</span>f3 d5 2. c4</b></td>
                    <td><a href="#">Дебют Рети</a></td>
                </tr>
                <tr>
                    <td><b>1. c4</b></td>
                    <td><a href="#">Английское начало</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2. c4 e5</b></td>
                    <td><a href="#">Будапештский гамбит</a>т</td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2. c4 c5 3. d5 b5 4. cxb5 a6</b></td>
                    <td><a href="#">Волжский гамбит</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 <span class="f2">C</span>f6 2. c4 c5 3. d5 e6</b></td>
                    <td><a href="#">Защита Бенони</a></td>
                </tr>
                <tr>
                    <td><b>1. d4 f5</b></td>
                    <td><a href="#">Голландская защита</a></td>
                </tr>
                <tr>
                    <td><b>1. f4</b></td>
                    <td><a href="#">Дебют Берда</a></td>
                </tr>
                <tr>
                    <td><b>1. ?</b></td>
                    <td><a href="#">Другие варианты, не указанные выше</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <b>Принципы разыгрывания дебютов:</b>
        <ol>
            <li>Стремиться быстро развивать фигуры на удобные позиции, при этом по возможности препятствовать сопернику.</li>
            <li>В основном делать ходы фигурами и лишь минимальное количество ходов пешками.</li>
            <li>Без необходимости не делать повторные движения уже выведенными фигурами.</li>
            <li>Занимать открытые линии.</li>
            <li>Занимать центр пешками и фигурами или создавать фигурное давление на центральные поля.</li>
            <li>Вызывать создание постоянных пешечных слабостей у соперника и избегать их появления у себя.</li>
            <li>При неоконченном развитии не увлекаться преждевременными атаками.</li>
            <li>Следить за действиями соперника и отражать его угрозы.</li>
        </ol>
        <b>Как начинать партию</b>
        <ol>
            <li>Прежде всего должны быть выведены легкие фигуры.</li>
            <li>Пешками стремиться захватить центр (поля d4, d5, e4, e5).</li>
            <li>Делать рокировку чтобы обезопасить короля и ввести в игру ладью.</li>
            <li>Не делать повторные ходы фигурами без необходимости.</li>
        </ol>
@endsection
