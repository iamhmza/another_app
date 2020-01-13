<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

    <div id="app">
        <div class="install">
            <div class="install_wrapper">
                <section class="install">
                    <a class="logo" href="/dashboard">
                        <img src="{{asset('assets/img/logo.png')}}" alt="logo" />
                    </a>

                    <h2 class="title-2">Link account</h2>
                    <img src="{{asset('assets/img/paypal.png')}}" alt="paypal logo" />
                    <p class="sub-text">
                        We work with secure Paypal credentials. Paypal monitors and encrypts
                        this connection. This way your privacy and funds are 100% safe.
                        <br />Please log in to Paypal and provide your client and secret here!
                        <br />Need Help ? Click
                        <a href="#" style="text-decoration: underline;">
                            <b>the link</b>
                        </a>
                        to see Video!
                    </p>
                    <form action="{{url('/paypal/login')}}" method="post">
                        {{csrf_field()}}
                        <input class="input" type="text" placeholder="API key" />
                        <input class="input" type="text" placeholder="API secret" />
                        <button class="cta paypal" type="submit">Install</button>
                    </form>
                </section>

                <section class="hero">
                    <!-- <img src="../../assets/hero_bg.svg" alt="t" /> -->

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1149.342"
                        height="1042" viewBox="0 0 1149.342 1042" :class="color">
                        <defs>
                            <linearGradient id="a" x1="0.281" y1="0.283" x2="0.962" y2="0.931"
                                gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#95bf47" />
                                <stop offset="1" stop-color="#016fff" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <g transform="translate(0 55.092)">
                            <g transform="translate(0 -55.092)">
                                <path
                                    d="M1149.342,324.018V686.5L766.22,654.539V1042h-383.1V425.052L0,387.138V0L766.245,121.72V267.678l.2.623Z"
                                    fill="url(#a)" />
                            </g>
                        </g>
                    </svg>

                    <div class="hero_text">
                        <h1 class="lg_text">Install our app in your Shopify store</h1>

                        <p class="text">Log in to your Trackiny account to get back your tracks.</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>