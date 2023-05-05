@include('template.user2')

@yield('header')

<style>
    .rincian2 a{
        bottom: 20px;
        right: 20px;
        background-color: #006F42;
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
        @foreach($rincian1 as $detail1)
            <div class="rincian1">
                <img src="{{ asset('/image/starbuck.png') }}" alt="icon star">
                <span> {{ $detail1["tanggal"] }} </span>
                <span> {{ $detail1["invoice"] }} </span>
            </div>
            
            <div class="rincian2">
                <div>
                    <img src="/image/coffee/{{ $detail1["gambar"] }}" alt="">
                    <!-- <img src="{{ asset('/image/coffee/cappucino.jpg') }}" alt="icon star"> -->
                </div>
                <div>
                    <h2> {{ $detail1["coffee_name"] }} </h2>
                    <span> {{ $detail1["coffee_desc"] }} </span>
                    <br>
                    <span> {{ $detail1["coffee_price"] }} </span>
                    <br>
                    <a href="/fei-fei/coffee2">Buy Again</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="logout-button2">
    <a href="/">Logout</a>
</div>

@yield('footer')