@include('Home._banner')
<!-- blog_main -->
<div class="blog_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Son Gönderiler</h2>
                    <span>Paylaşılan son gönderiler. </span>
                </div>
            </div>
        </div>
        <!-- three section -->
        <div class="row">
            @foreach ($data as $rs)
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


        <!-- end three section -->

    </div>
</div>
<!-- end blog_main -->
