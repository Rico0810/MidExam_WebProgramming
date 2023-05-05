@include('template.user1')

@yield('header')
<!-- BUTTON COFFEE -->
<div class="coffee-container">
    <button class="btn-coffee1">Espresso</button>
    <button class="btn-coffee">Signature</button>
    <button class="btn-coffee">Brewed</button>
    <button class="btn-coffee">Blended Coffee</button>
</div>

<!-- LIST KOPI -->
<div class="Product-container">
    <div class="row">
        <div class="col-1">
            <img src="{{ asset('/image/coffee/cappuccino.jpg') }}" alt="icon star">
            <h4>Cappuccino</h4>
            <p>Rp50.000</p>
        </div>
        <div class="col-1">
            <img src="{{ asset('/image/coffee/caffe-americano.jpg') }}" alt="icon star">
            <h4>Caffè Americano</h4>
            <p>Rp35.000</p>
        </div>
        <div class="col-1">
            <img src="{{ asset('/image/coffee/caffe-latte.jpg') }}" alt="icon star">
            <h4>Caffè Latte</h4>
            <p>Rp45.000</p>
        </div>
        <div class="col-1">
            <img src="{{ asset('/image/coffee/caffe-mocha.jpg') }}" alt="icon star">
            <h4>Caffè Mocha</h4>
            <p>Rp55.000</p>
        </div>
        <div class="col-1">
            <img src="{{ asset('/image/coffee/caramel-macchiato.jpg') }}" alt="icon star">
            <h4>Caramel Macchiato</h4>
            <p>Rp50.000</p>
        </div>
        <div class="col-1">
            <img src="{{ asset('/image/coffee/espresso-con-panna.jpg') }}" alt="icon star">
            <h4>Espresso Con Panna</h4>
            <p>Rp40.000</p>
        </div>
        <div class="col-1">
            <img src="{{ asset('/image/coffee/espresso-macchiato.jpg') }}" alt="icon star">
            <h4>Espresso Macchiato</h4>
            <p>Rp30.000</p>
        </div>
        <div class="col-1">
            <img src="{{ asset('/image/coffee/flat-white.jpg') }}" alt="icon star">
            <h4>Flat White</h4>
            <p>Rp30.000</p>
        </div>
    </div>
</div>

<!-- notification box for confirmation -->
<div class="notification-box hidden">
    <div class="message">
        <p>Do you want to buy this coffee?</p>
        <button class="btn-yes">Yes</button>
        <button class="btn-no">No</button>
    </div>
</div>

<!-- notification box for success -->
<div class="notification-box-success hidden">
    <div class="message">
        <p>Thank you for your purchase!</p>
    </div>
</div>

@yield('footer')

<script src="{{ asset('js/java.js') }}"></script>