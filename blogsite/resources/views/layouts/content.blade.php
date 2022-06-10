@include('Home._head')
@include('Home._loader')

<div class="head_top_for_content">
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('images') }}/logo2.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9" style="margin-left:-100px;">
                    <nav class="navigation navbar navbar-expand-md navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link a" href="/"> ANASAYFA</a>
                                </li><span class="noselect stars">&starf;</span>
                                <li class="nav-item">
                                    <a class="nav-link a" href="/content">ARŞİV</a>
                                </li><span class="noselect stars">&starf;</span>
                                <li class="nav-item">
                                    <a class="nav-link a" href="/about">HAKKIMDA</a>
                                </li><span class="noselect stars">&starf;</span>
                                <li class="nav-item">
                                    <a class="nav-link a" href="/contact">İLETİŞİM</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog_main">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="titlepage" style="margin-left:270px;">
                    <h2>Arşiv</h2>
                    <span>Paylaşılan tüm gönderiler. </span>
                </div>
            </div>
            <div class="col-md-3" style="float: right; width:150px; height:40px;">
                <input type="text" class="form-control" placeholder="Ara...">
                <button class="search">Ara</button>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $rs)
                <div class="col-md-6 ">
                    <div class="date">
                        <p>Gönderim Tarihi: {{ $rs->date }}</p>
                    </div>
                    <div class="our_img">
                        <figure><a href="{{ route('insidecontent', ['id' => $rs->id]) }}"><img src="{{ asset('images') }}/our_img3.jpg" alt="#" /></a></figure>
                    </div>
                    <div class="our_text_box three_box">
                        <div class="post_box d_flex padding_top3">
                            <h3 class="awesome padding_flot"><a href="{{ route('insidecontent', ['id' => $rs->id]) }}">{{ $rs->title }}</a></h3>
                        </div>
                        <h4 >{{ $rs->postby }}</h4>
                        <ul class="like padding_left2 ulborder">
                            <li><a href="#"><img src="{{ asset('images') }}/like.png" alt="#" />Like</a></li>
                        </ul>
                        <br><br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<br><br><br><br>
<div style="margin: auto; width: 10%; ">
    {!! $posts->links() !!}
</div>
@include('Home._footer')
