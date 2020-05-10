@extends('layout')

@section('body')
<section class="slider d-flex align-items-center"> 
    <div class="container"> 
        <div class="row d-flex justify-content-center"> 
            <div class="col-md-12"> 
                <div class="slider-title_box"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="slider-content_wrap"> 
                                <h1 style="color:white;">ITS Shortlink</h1> 
                                <h5 style="color:white;">Shortlink by DPTSI</h5>
                            </div> 
                        </div> 
                    </div> 
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10">
                            <div id="action">
                                <div id="form_action">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="Original Link" name="link_asli" class="btn-group1">
                                        <input type="text" placeholder="Custom Link" name="link_pendek" class="btn-group2">
                                        <button id="button_form_action" style="background-color:#ffc413;" class="btn-form">Generate Link<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </div>
                                <div id="loader_action" align="center">
                                    <div class="lds-facebook"><div></div><div></div><div></div></div>
                                    <p style="color:white;">Harap Tunggu, Sedang dalam Proses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</section>    
@endsection

@section('modal')
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body" style="background-image: url('{{url('img/slider.jpg')}}');">
            <h6>Harap Tunggu</h6>
        </div>
      </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $( document ).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $( "#loader_action" ).hide();
        $( "#button_form_action" ).click(function() {
            var link_asli = $("input[name=link_asli]").val();
            var link_pendek = $("input[name=link_pendek]").val();

            $( "#form_action" ).fadeOut( "fast", function() {
                $( "#loader_action" ).fadeIn();
                $.ajax({
                    type:'POST',
                    url: '/generateLink',
                    data:{
                        link_asli:link_asli, link_pendek:link_pendek
                    },
                    success:function(data){
                        $( "#loader_action" ).fadeOut(2000, function(){
                            $( "#action").append(data)
                        });
                    }
                });
            });
        });
    });
</script>
@endsection