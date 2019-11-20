@extends('layouts.landing_master')

@section('title')

Login | FDK BOT

@endsection

@section('content')

  	<div class="content">
  		
  		
  		<!--Contact Section-->
  		<div class="contactSection section-pad">
        <div class="contact-bg-pattern">
        <img src="landing_page/img/background_large.png" alt="">
        </div>
    
  			<div class="container">
  				<div class="row" style="justify-content: center">
  					
  					<div class="col-md-6 contactForm wow fadeIn" data-wow-delay="0.25s">
              <p class="text-center">Login</p>

          
              <form method="post" action="{{url('/')}}/user_login" class="wow fadeIn" data-wow-delay="0.25s">
                {{csrf_field()}}
                <input type="text" id="username" name="email" placeholder="Email">

                <input type="password" id="password" name="password" placeholder="password">

               

                <input type="submit" value="Submit">
              </form>     
            </div>
  				</div>
  			</div>
  		</div>
  		<!--Contact Section-->
      <!--Tech Stack-->
     
         <div class="contact-bg-pattern-inverse">
           <img src="landing_page/img/background_inverse.png" alt="">
         </div>

         @endsection