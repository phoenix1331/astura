@extends('app')
@section('content')
<div class="inner-banner"></div>
<div class="container">
    <div class="content main">
        <div class="row">
            <div class="col-lg-12">
            <h1>{{$title}} - Customer engagement</h1>
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
            <div class="col-lg-12 text-center large-text">
            <div class="computer-icon"><img src="<?php echo asset('img/Monitor_and_Phone_64.png'); ?>" alt=""></div>
                <p>
                    Market leading customer engagement technology in an easy to use and lightweight interface.
                </p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Book an online demo</a>
                </p>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-6">
                <img class="" src="<?php echo asset('../img/tech.jpg'); ?>" alt="Generic placeholder image">
              <h2>Agent console</h2>
              <p>The only client communication tool built specifically for the financial services market.</p>
            </div>
            <div class="col-lg-6">
                    <img class="" src="<?php echo asset('../img/tech.jpg'); ?>" alt="Generic placeholder image">
              <h2>Customer Screen</h2>
              <p>Market leading customer engagement technology in an easy to use and lightweight interface.</p>
           </div>
        </div>
         <hr />
         <div class="row">
            <div class="col-lg-12 text-center large-text">
            <div class="computer-icon"><img src="<?php echo asset('img/Monitor_and_Phone_64.png'); ?>" alt=""></div>
                <p>
                   Interact with website visitors.<br />
                   Convert cold leads and upsell customers.<br />
                   Seamlessly escalate from text chat to video and collaboration.
                </p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Book an online demo</a>
                </p>
            </div>
        </div>
        <hr />
        <div class="row text-center">
        <div class="col-lg-12"><h2>Communication</h2></div>
            <div class="col-lg-4">
              <h3>Text Chat</h3>
              <p>The only client communication tool built specifically for the financial services market.</p>
            </div>
            <div class="col-lg-4">
              <h3>Video</h3>
              <p>Market leading customer engagement technology in an easy to use and lightweight interface.</p>
           </div>
           <div class="col-lg-4">
              <h3>Voice</h3>
              <p>Market leading customer engagement technology in an easy to use and lightweight interface.</p>
           </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-12"><h2>Collaboration</h2></div>
            <div class="col-lg-3">
              <h3>Screenshare</h3>
              <p>The only client communication tool built specifically for the financial services market.</p>
            </div>
            <div class="col-lg-3">
              <h3>Cobrowse</h3>
              <p>Market leading customer engagement technology in an easy to use and lightweight interface.</p>
           </div>
           <div class="col-lg-3">
              <h3>File Push</h3>
              <p>Market leading customer engagement technology in an easy to use and lightweight interface.</p>
           </div>
           <div class="col-lg-3">
              <h3>Annotate</h3>
              <p>Market leading customer engagement technology in an easy to use and lightweight interface.</p>
           </div>
        </div>
		<hr />
		<div class="row text-center">
		 <div class="col-lg-12"><h2>How it works</h2></div>
		    <div class="col-lg-4">
		    <div class="circle-img">
		        <img class="" src="<?php echo asset('../img/globe.jpg'); ?>" alt="Generic placeholder image">
		    </div>
		  	  <div class="space"></div>
		      <p>The product uses webRTC technology which means everything is done within the browser, with no need for additional software.</p>
		    </div>
		    <div class="col-lg-4">
		        <div class="circle-img">
		            <img class="" src="<?php echo asset('../img/phone.jpg'); ?>" alt="Generic placeholder image">
		        </div>
		  	  <div class="space"></div>
		      <p>The software is mobile ready. It can be deployed into existing iOS and Android apps.</p>
		   </div>
		   <div class="col-lg-4">
		        <div class="circle-img">
		            <img class="" src="<?php echo asset('../img/people.jpg'); ?>" alt="Generic placeholder image">
		        </div>
		  	  <div class="space"></div>
		      <p>Smart routing allows agents to be grouped according to thier skills, so relevant specialists within your organisation can be located with ease.</p>
		   </div>
		</div>
		<div class="row text-center">
		    <div class="col-lg-4">
		    <div class="circle-img">
		        <img class="" src="<?php echo asset('../img/headphones.jpg'); ?>" alt="Generic placeholder image">
		    </div>
		  	  <div class="space"></div>
		      <p>Customisable triggers, such as time spent on a page, prompt a live assist session.</p>
		    </div>
		    <div class="col-lg-4">
		        <div class="circle-img">
		            <img class="" src="<?php echo asset('../img/web.jpg'); ?>" alt="Generic placeholder image">
		        </div>
		    	<div class="space"></div>
		      <p>Just 3 lines of code need to be addeed to your website.</p>
		   </div>
		   <div class="col-lg-4">
		        <div class="circle-img">
		            <img class="" src="<?php echo asset('../img/profile.jpg'); ?>" alt="Generic placeholder image">
		        </div>
		    	<div class="space"></div>
		      <p>Contextual browsing information about the user is captured and provided to agents.</p>
		   </div>
		</div>
		<hr />
		<div class="row text-center">
		    <div class="col-lg-4">
		      <h3>Drive Sales</h3>
		    </div>
		    <div class="col-lg-4">
		      <h3>Engage Customers</h3>
		      <p>
		          <a class="btn btn-primary btn-lg" href="#" role="button">Book an online demo</a>
		      </p>
		    </div>
		    <div class="col-lg-4">
		      <h3>Transform Service</h3>
		    </div>
		</div>
    </div> <!-- Close content -->
</div> <!-- Close container -->
@endsection