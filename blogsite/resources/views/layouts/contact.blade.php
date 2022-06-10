@include('Home._head')
@include('Home._header')
<!-- contact -->
<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>İletişim</h2>
                    <span>Form üzerinden isteklerinizi, önerilerinizi, şikayetlerinizi bana gönderebilirsiniz. </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <form class="main_form" action="{{ route('contact_store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="form_contril" placeholder="İsim " type="text" name="name">
                        </div>
                        <div class="col-md-12">
                            <input class="form_contril" placeholder="Telefon Numarası" type="text" name="phone">
                        </div>
                        <div class="col-md-12">
                            <input class="form_contril" placeholder="E-posta" type="text" name="mail">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Mesaj" type="text" name="message"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button class="send_btn">GÖNDER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->
@include('Home._footer')
