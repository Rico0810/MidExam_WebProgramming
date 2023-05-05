@include('template.user1')

@yield('header')

<style>
    .rincian2 a{
        bottom: 20px;
        right: 20px;
        background-color: #C6A961;
        color: black;
        padding: 2px;
        border-radius: 20%;
        text-align: center;
        box-shadow: 0px 2px 5px #666;
        text-decoration: none;
    }
</style>

<div class="history">
    <h3> {{ $username }} </h3>
    <div class="history1">
        @foreach($rincian2 as $detail2)
            <div class="rincian1">
                <img src="{{ asset('/image/starbuck.png') }}" alt="icon star">
                <span> {{ $detail2["tanggal"] }} </span>
                <span> {{ $detail2["invoice"] }} </span>
            </div>
            
            <div class="rincian2">
                <div>
                    <img src="/image/coffee/{{ $detail2["gambar"] }}" alt="">
                    <!-- <img src="{{ asset('/image/coffee/cappucino.jpg') }}" alt="icon star"> -->
                </div>
                <div>
                    <h2> {{ $detail2["coffee_name"] }} </h2>
                    <span> {{ $detail2["coffee_desc"] }} </span>
                    <br>
                    <span> {{ $detail2["coffee_price"] }} </span>
                    <br>
                    <a href="/vico-lomar/coffee">Buy Again</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- FLOATING BOTTON -->
<div class="logout-button">
    <a href="/">Logout</a>
</div>

@yield('footer')