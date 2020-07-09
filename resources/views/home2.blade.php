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
                                <h1 style="color:white;">ITS-bismillah-Shortener</h1> 
                                <h5 style="color:white;">Link Shortener by DPTSI ITS</h5>
                            </div> 
                        </div> 
                    </div> 
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10">
                            <div id="action">
                                <form method="POST" action="{{route('generate.shorten.link.post')}}">
                                @csrf
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="Original Link" name="link" class="btn-group1">
                                        <input type="text" placeholder="Custom Link" name="code" class="btn-group2">
                                        <button id="button_form_action" style="background-color:#ffc413;" class="btn-form">Generate Link<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</section>    
@endsection

