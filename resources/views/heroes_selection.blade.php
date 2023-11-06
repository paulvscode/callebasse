@extends('start')

@section('content')
    <div id="heroes-selection">
        <div class="heroes">

            <a href="{{ route('introduction.second') }}" class="btn-main-design">
                <img src="./art/heroes/caleb.jpeg" alt="">
                <span>Caleb</span>
            </a>

            <div value="caleb">
                <img src="./art/heroes/caleb.jpeg" alt="">
                <span>Caleb</span>
            </div>
            <div value="durbrik">
                <img src="./art/heroes/durbrik.png" alt="">
                <span>Durbrik</span>
            </div>
            <div value="gaius">
                <img src="./art/heroes/gaius.png" alt="">
                <span>Gaius</span>
            </div>
        </div>
    </div>
@endsection
