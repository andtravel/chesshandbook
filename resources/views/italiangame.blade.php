@extends ('layouts.base')
@section ('title','Итальянская партия')
@section ('main')
        <h1 class="text-center">Итальянская партия</h1>
        <div class="d-flex">
        <div class="cbdiagram"
             data-size="400"
             data-buttons="0"
             data-title="Начинается с ходов"
             data-moves="1.e4 e5 2.Nf3 Nc6 3.Bc4 Bc5">
        </div>
            <div class="cbdiagram"
                 data-size="400"
                 data-title="Начинается с ходов" data-moves="1.e4 e5 2.Nf3 Nc6 3.Bc4 Bc5 {$1 asdff} 4.b4 Bb4">
            </div>
        </div>
        <div class="cbreplay" data-url="{{asset('chess-games/fpc.pgn')}}">

        </div>
@endsection
