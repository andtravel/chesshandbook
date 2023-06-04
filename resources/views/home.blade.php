@extends ('layouts.base')

@section ('title','Главная')

@section ('main')
    <div class="row">
        <div class="col-sm-4">
            <div class="card mt-3 mb-3 text-center bg-gradient card-style">
                <div class="card-body">
                    <h2 class="card-title">Дебют</h2>
                    <div class="cbdiagram"
                         data-size="75%"
                         data-buttons="0"
                         data-fen="rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1">
                    </div>
                    <p class="card-text">Начальная стадия шахматной партии</p>
                    <a href="{{route ('openings')}}" class="btn brown bg-gradient">Перейти</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mt-3 mb-3 text-center bg-gradient card-style">
                <div class="card-body">
                    <h2 class="card-title">Миттельшпиль</h2>
                    <div class="cbdiagram"
                         data-size="75%"
                         data-buttons="0"
                         data-fen="1r2k1r1/pbppnp1p/1bn2P2/8/Q7/B1PB1q2/P4PPP/3RR1K1 w - - 0 20">
                    </div>
                    <p class="card-text">Середина шахматной партии</p>
                    <a href="{{route ('middlegame')}}" class="btn brown bg-gradient">Перейти</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mt-3 mb-3 text-center bg-gradient card-style">
                <div class="card-body">
                    <h2 class="card-title">Эндшпиль</h2>
                    <div class="cbdiagram"
                         data-size="75%"
                         data-buttons="0"
                         data-fen="8/8/3pkp1p/7P/4KP2/8/8/8 b - - 0 53">
                    </div>
                    <p class="card-text">Окончание шахматной партии</p>
                    <a href="{{route ('endgame')}}" class="btn brown bg-gradient">Перейти</a>
                </div>
            </div>
        </div>
    </div>
@endsection
