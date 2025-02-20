<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NeedKos HTML Template BuildWithAngga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
   @include('components.navbar')
    <section class="header mb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="jumbo-header mb-30">
                        Cari Kos Kosan<br>
                        Nyaman & Murmer
                    </h1>
                    <p class="paragraph mb-30">
                        Lorem house ipsum could be a reall good home<br>
                        without thinking si amet dolor safety around.
                    </p>
                    <p class="mb-50"><a href="#" class="btn btn-primary">Explore Houses</a></p>
                    <div class="row stats text-center">
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                23,491
                            </h3>
                            <p class="paragraph">
                                Koskosan
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                983
                            </h3>
                            <p class="paragraph">
                                Awards
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                182M+
                            </h3>
                            <p class="paragraph">
                                Happy People
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/banner.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="best-items">
        <div class="container">
            <div class="row text-center mb-50">
                <div class="col-lg-12">
                    <img src="{{ asset('images/ic_best.svg') }}" height="42" alt="" class="mb-16">
                    <h3 class="big-header">
                        Best of The Best
                    </h3>
                    <p class="paragraph">
                        Dolor space comfortable moments
                    </p>
                </div>
            </div>
            {{--  <div class="row">
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details', 'coral-pik-seven') }}">
                            <img src="{{ asset('images/house1.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details', 'coral-pik-seven') }}">
                                <h3 class="small-header mb-2">
                                    Coral Pik Seven
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                @php
                                $booking = true;
                                @endphp
                                <div class="price">
                                    <p class="mb-0">
                                        {{ $booking ? 'sold out' : '$28,109' }}<span class="extra-small-paragraph">
                                            {{ $booking ? '' : '/mon' }}
                                        </span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{  route('landing.details', 'coral-brown')  }}">
                            <img src="{{ asset('images/house2.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{  route('landing.details', 'coral-brown')  }}">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{  route('landing.details', 'the-box')  }}">
                            <img src="{{ asset('images/house3.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{  route('landing.details', 'the-box')  }}">
                                <h3 class="small-header mb-2">
                                   The Box
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{  route('landing.details', 'havana-kalla')  }}">
                            <img src="{{ asset('images/house4.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{  route('landing.details', 'havana-kalla')  }}">
                                <h3 class="small-header mb-2">
                                    Havana Kalla
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{  route('landing.details', 'king-the-land')  }}">
                            <img src="{{ asset('images/house5.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{  route('landing.details', 'king-the-land')  }}">
                                <h3 class="small-header mb-2">
                                    King The Land
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{  route('landing.details', 'home-sweet')  }}">
                            <img src="{{ asset('images/house6.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{  route('landing.details', 'home-sweet')  }}">
                                <h3 class="small-header mb-2">
                                    Home Sweet
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{  route('landing.details', 'amour')  }}">
                            <img src="{{ asset('images/house7.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{  route('landing.details', 'amour')  }}">
                                <h3 class="small-header mb-2">
                                   Amour
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{  route('landing.details', 'biru-batu')  }}">
                            <img src="{{ asset('images/house8.png') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{  route('landing.details', 'biru-batu')  }}">
                                <h3 class="small-header mb-2">
                                    Biru Batu
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  --}}
            <div class="row">
                {{--  tables best of best --}}
               @component('components.house_card')
               @slot('cover', 'images/house2.png')
               @slot('title', 'King The Land')
               @slot('price', '28,880')
               @slot('location', 'Banyuwangi')
               @endcomponent
           </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
