
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
                                @foreach($shortLinks as $row)
                                <div align="center">
                                    <p style="color:white;"><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></p>
                                    <a href="{{url($row->code)}}" class="btn btn-primary" style="background-color:#ffc413; color:white;">Menuju Link</a>
                                    
                                    <a href="{{url('/')}}" class="btn btn-primary" style="background-color:#ffc413; color:white;">Generate Ulang</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</section>    
@endsection
