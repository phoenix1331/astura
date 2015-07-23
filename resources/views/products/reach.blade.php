@extends('app')
@section('content')
<div class="inner-banner"></div>
<div class="container">
    <div class="content main">
        <div class="row">
            <div class="col-lg-12">
            <h1>{{$title}} - Client relationship tool</h1>
                <p>Instead of you and your clients constantly having to travel to meet with each other,
				Reach allows you communicate and collaborate on documents as if you were face to
				face, but without wasting time and money travelling.</p>
				<p>You and your clients just need a browser to start a meeting. You can even use an iOS/
				android app if you are out and about.</p>
				<p>Reach is whitelabelled, meaning it will carry your logo and branding. The product is
				currently being trialled with a number of legal and financial service firms.</p>
				<p>• Save time and money<br />
				• Generate customers from farther afield<br />
				• Present documents remotely<br />
				• Unrivalled quality of client service</p>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-6">
                <img class="" src="https://placeimg.com/300/150/tech" alt="Generic placeholder image">
              <h2>Your screen</h2>
              <p>The only client communication tool built specifically for the financial services market.</p>
            </div>
            <div class="col-lg-6">
                    <img class="" src="https://placeimg.com/300/150/tech" alt="Generic placeholder image">
              <h2>Clients Screen</h2>
              <p>Market leading customer engagement technology in an easy to use and lightweight interface.</p>
           </div>
        </div>
         <hr />
         <div class="row">
            <div class="col-lg-12 text-center large-text">
            <div class="computer-icon"><img src="<?php echo asset('img/Monitor_and_Phone_64.png'); ?>" alt=""></div>
                <p>
                    The only client communication tool built specifically for the financial services market.
                </p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Book an online demo</a>
                </p>
            </div>
        </div>

    </div> <!-- Close content -->
</div> <!-- Close container -->
@endsection