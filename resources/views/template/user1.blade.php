<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @include('template.greeting')
    <title>Starbucks | {{ $title }} </title>
</head>
<body>
    @section('header')
        <!-- HEADER -->
        <div class="header">
            <div class="navbar">
                <div>
                    <?php
                        // Set timezone
                        date_default_timezone_set('Asia/Jakarta');

                        // Get current hour
                        $hour = date('H');

                        // Set greeting based on hour
                        if ($hour >= 5 && $hour < 12) {
                            $greeting = 'Selamat pagi';
                        } elseif ($hour >= 12 && $hour < 15) {
                            $greeting = 'Selamat siang';
                        } elseif ($hour >= 15 && $hour < 18) {
                            $greeting = 'Selamat sore';
                        } else {
                            $greeting = 'Selamat Malam';
                        }
                        echo $greeting;
                    ?>
                </div>

                <div>
                    <span> {{ $username }} </span>
                    <!-- <span>Rico Frenaldi Tokanto</span> -->
                </div>

                <div class="level">
                    <span>Gold Level</span>
                </div>
            </div>

            <div class="navbar2">
                <div class="navbar2-container">
                    <a href="/vico-lomar/profile"><img src="{{ asset('/image/icon/icon-profile.png') }}" alt="icon profile"></a>
                    <a href="/vico-lomar/profile"><span>Profile</span></a>
                </div>
                    
                <div class="navbar2-container">
                    <a href="/vico-lomar/transaction"><img src="{{ asset('/image/icon/icon-history.png') }}" alt="icon profile"></a>
                    <a href="/vico-lomar/transaction"><span>Transaction</span></a>
                </div>
            </div>
        </div>
    @endsection
    
    <!-- FOOTER -->
    @section('footer')
        <footer class="footer-box-container">
            <div class="copyright-content">
                <h5>© 2023 Starbucks Coffee Company, All Rights Reserved</h5>
            </div>   
        </footer>
    @endsection
    
</body>
</html>