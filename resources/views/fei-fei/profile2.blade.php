@include('template.user2')

@yield('header')

<!-- MEMBERSHIP -->
<div class="star">
    <div class="star-container">
        <span>151</span>
        <img src="{{ asset('/image/icon/star-green.png') }}" alt="icon star">
    </div>
        
    <div>
        <span>Star Balance</span>
    </div>

    <!-- <div class="likert-scale">
        <div class="likert-labels">
            <span>25</span>
            <span>50</span>
            <span>100</span>
            <span>200</span>
        </div>
        <div class="likert-items">
            <input type="radio" name="likert-scale" value="1">
            <input type="radio" name="likert-scale" value="2">
            <input type="radio" name="likert-scale" value="3">
            <input type="radio" name="likert-scale" value="4">
        </div>
    </div> -->

    <div class="tombol-reedem">
        <a href="#">Reedem</a>
        <!-- <button class="btn-reedem">Reedem</button> -->
    </div>
</div>

<!-- CARAOUSEL -->
<div class="caraousel">
    <img src="{{ asset('/image/promo/image-promo.jpg') }}" alt="icon star">
</div>

<!-- PROMO INFORMATION -->
<div class="information">
    <div class="info-lengkap">
        <div>
            <img src="{{ asset('/image/promo/buy1get1.png') }}" alt="icon star">
        </div>
        <div>
            <h3>Buy 1 Get 1 Coffee</h3>
            <span>Looking for a delicious and affordable way to start your day? Look no further than our "buy 1 get 1" coffee promotion!</span>
        </div>
    </div>
    <hr>
    <br>

    <div class="info-lengkap">
        <div>
            <img src="{{ asset('/image/promo/tumblers-promo.jpg') }}" alt="icon star">
        </div>
        <div>
            <h3>Tumblers Day</h3>
            <span>Celebrate Tumblers Day with us and get your hands on the perfect reusable cup to keep your drinks hot or cold all day long. Don't miss out on this limited time offer!</span>
        </div>
    </div>
    <hr>
    <br>

    <div class="info-lengkap">
        <div>
            <img src="{{ asset('/image/promo/buy2get3.jpg') }}" alt="icon star">
        </div>
        <div>
            <h3>Treat On Sunday</h3>
            <span>Are you ready for a sweet treat this Sunday? Head over to Starbucks and indulge in our latest promotion: Buy 2 Get 3 on all your favorite beverages!</span>
        </div>
    </div>
    <hr>
    <br>

    <div class="info-lengkap">
        <div>
            <img src="{{ asset('/image/promo/bca-promo.jpg') }}" alt="icon star">
        </div>
        <div>
            <h3>BCA ANNIVERSARY</h3>
            <span>Exciting news for all coffee lovers and BCA cardholders! Starbucks is thrilled to join in celebrating the anniversary of BCA by offering special discounts for all BCA cardholders.</span>
        </div>
    </div>
</div>
    
<!-- FLOATING BOTTON -->
<div class="floating-button2">
    <a href="/fei-fei/coffee2">Coffee</a>
</div>

@yield('footer')