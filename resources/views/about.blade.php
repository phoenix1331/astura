@extends('app')
@section('content')
<div class="inner-banner"></div>
<div class="container">
    <div class="content main">
        <div class="row">
            <div class="col-lg-12">
            <h1>{{$title}}</h1>
                <p>
                We see boundless opportunity for improvement and change in the way
				organisations communicate. As facilitators of this change we value both the
				importance of clear and concise communication, as well as translating the
				potential of technology into accessible solutions.
                </p>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-4">
                <img class="" src="https://placeimg.com/300/150/tech" alt="Generic placeholder image">
              <h2>Reach</h2>
              <p>The only client communication tool built specifically for the financial services market.</p>
              <p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                    <img class="" src="https://placeimg.com/300/150/tech" alt="Generic placeholder image">
              <h2>Engage</h2>
              <p>Market leading customer engagement technology in an easy to use and lightweight interface.</p>
              <p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
           </div>
            <div class="col-lg-4">
                    <img class="" src="https://placeimg.com/300/150/tech" alt="Generic placeholder image">
              <h2>About</h2>
              <p>market leading customer engagement technology in an easy to use and lightweight interface.</p>
              <p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-12 text-center">
            <div class="computer-icon"><img src="<?php echo asset('img/Monitor_and_Phone_64.png'); ?>" alt=""></div>
                <p>
                    Astura are experts in video and collaboration technology.<br />
                    To see the products in action, please get in touch:
                </p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Book an online demo</a>
                </p>
            </div>
        </div>
    </div> <!-- Close content -->
</div> <!-- Close container -->
@endsection