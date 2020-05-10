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
                                <h1 style="color:white;">404</h1> 
                                <h5 style="color:white;">Halaman Tidak Ditemukan :(</h5>
                                <a href="{{ url('/') }}" style="background-color:#ffc413;" class="btn btn-primary">Ke Halaman Utama</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
</section>    
@endsection