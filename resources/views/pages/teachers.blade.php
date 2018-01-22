
@extends('layouts.header')

@section('content') 
        
    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="get-started center wow fadeInDown">
                <h2>Ready to get started</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. <br>  Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                <div class="request">
                </div>
            </div><!--/.get-started-->

            <div class="clients-area center wow fadeInDown">
                <h2><input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here"></h2>
                <p class="lead"></p>
            </div>

            <div class="row">
                @foreach($teacher as $teachers)
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <a href="{{route('teacher_detail' , $teachers->id)}}">
                            <img src="{{asset("assets/demo-bower/images/home/$teachers->avatar_url")}}" class="img-circle" alt="">
                            <h3></h3>
                            <h4><span>{{ $teachers->name }}</span></h4>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="center wow fadeInDown">
                {!! $teacher->render() !!}
            </div>  
        </div><!--/.container-->
    </section><!--/#feature-->

        @include('layouts.footer');
@endsection
