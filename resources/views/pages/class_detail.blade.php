@extends('layouts.header')

@section('content') 
            
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" class="form-control" required="required" value="{{ $id->name }}">
                        </div>
                        <div class="form-group">
                            <label>Begin at </label>
                            <input type="email" name="email" class="form-control" required="required" value="{{ $id->begin_at }}">
                        </div>
                        <div class="form-group">
                            <label>Number of lesson</label>
                            <input type="text" class="form-control" value="{{ $id->number_of_lesson }}">
                        </div>
                        <div class="form-group">
                            <label>Max slot</label>
                            <input type="text" class="form-control" value="{{ $id->max_slot }}">
                        </div>
                        <div class="form-group">
                            <label>Available slot</label>
                            <input type="text" class="form-control" value="{{ $id->available_slot }}">
                        </div>                                                  
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    @include('layouts.footer');
@endsection