@include('Home._head')
@include('Home._header')
<!-- about -->
<div id="contact" class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>{{$data->title}}</h2>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      {{$data->date}}
      <div class="row">
         <div class="col-md-12 ">
            <div style="width:100%; height:100%; background-color:rgba(255, 255, 255, 0.849)">
                <p style="color: rgb(0, 0, 0)"><?php echo nl2br($data->content,false);  ?></p>
            </div>
         </div>
      </div>
   </div>
</div>
<br><br><br><br><br>
<br><br><br>
<!-- end about -->
@include('Home._footer')