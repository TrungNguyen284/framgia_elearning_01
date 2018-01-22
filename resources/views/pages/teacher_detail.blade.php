@extends('layouts.header')

@section('content') 

    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Portfolio</h2>
               <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>      
                <div class="row">
                    <div class="col-md-4 center wow fadeInDown">
                    </div>
                    <div class="col-md-4 center wow fadeInDown">
                        <div class="clients-comments text-center center">
                            <a href="#">
                                <img src="{{asset("assets/demo-bower/images/home/$id->avatar_url")}}" class="img-circle" alt="">
                                <h3>Đi thi chỉ cần thay số là 8 điểm</h3>
                                <h4><span>{{ $id->name }}</span></h4>
                            </a>
                        </div>
                    </div>
                    
                </div>                                   
            </div>
        </div>
    </section><!--/#portfolio-item-->
		
@include('layouts.footer');

@endsection