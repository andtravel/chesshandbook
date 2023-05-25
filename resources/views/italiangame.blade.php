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
        <div class="cbreplay" data-url="pgn/greatgames.pgn">
            [Event "?"]
            [Site "Hastings"]
            [Date "1922.??.??"]
            [Round "?"]
            [White "Bogoljubow,J"]
            [Black "Alekhine,A"]
            [Result "0-1"]

            1.d4 f5 2.c4 Nf6 3.g3 e6 4.Bg2 Bb4+ 5.Bd2 Bxd2+ 6.Nxd2 Nc6 7.Ngf3 O-O 8.O-O d6 9.Qb3 Kh8 10.Qc3 e5 11.e3 a5 12.b3 Qe8 13.a3 Qh5 14.h4 Ng4 15.Ng5 Bd7 16.f3 Nf6 17.f4 e4 18.Rfd1 h6 19.Nh3 d5 20.Nf1 Ne7 21.a4 Nc6 22.Rd2 Nb4 23.Bh1 Qe8 24.Rg2 dxc4 25.bxc4 Bxa4 26.Nf2 Bd7 27.Nd2 b5 28.Nd1 Nd3 29.Rxa5 b4 30.Rxa8 bxc3 31.Rxe8 c2 32.Rxf8+ Kh7 33.Nf2 c1=Q+ 34.Nf1 Ne1 35.Rh2 Qxc4 36.Rb8 Bb5 37.Rxb5 Qxb5 38.g4 Nf3+ 39.Bxf3 exf3 40.gxf5 Qe2 41.d5 Kg8 42.h5 Kh7 43.e4 Nxe4 44.Nxe4 Qxe4 45.d6 cxd6 46.f6 gxf6 47.Rd2 Qe2 48.Rxe2 fxe2 49.Kf2 exf1=Q+ 50.Kxf1 Kg7 51.Kf2 Kf7 52.Ke3 Ke6 53.Ke4 d5+ 0-1

        </div>
@endsection
