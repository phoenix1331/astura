@extends('app')
@section('content')
<div class="container-fluid">
    <video poster="<?php echo asset('img/home.jpg'); ?>" autoplay loop>
    <source src="<?php echo asset('video/home.mp4'); ?>" type="video/mp4">
    </video>
    <div class="jumbotron">
        <div class="container">
          <h1>Human Communication, Online...</h1>
          <p>
              <a class="btn btn-primary btn-lg" href="#" role="button">
                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Reach - Client relationships
              </a>
              <a class="btn btn-primary btn-lg" href="#" role="button">
                Engage - Customer engagement<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              </a>
          </p>
        </div>
    </div>
    <div class="down-arrow"></div>
</div>

<div class="container">
    <div class="content main">
        <div class="row">
            <div class="col-lg-12">
            <h1>Welcome</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repudiandae rerum perferendis assumenda quos id cupiditate maiores animi architecto dicta, autem excepturi laudantium sint soluta, velit quam illum, alias magni distinctio nam aliquid ea reiciendis. Nostrum, doloremque! Adipisci delectus, corrupti voluptates aut, quos, fuga velit fugiat quia explicabo autem repellendus veritatis rerum a. Voluptates rem temporibus quisquam, exercitationem labore sint ab earum doloribus libero? Impedit eaque, ab quos totam ipsa culpa quae magni enim nisi ex. Officia dolorum, excepturi, ab iure, unde saepe inventore nobis illo eaque harum quos. Quod iure eos, impedit fugit delectus deserunt in excepturi, amet animi illo soluta dolor magnam et debitis ipsam necessitatibus voluptatibus dignissimos quis. Repudiandae inventore, totam illum nostrum suscipit id reiciendis unde magnam facilis quo dolores a ratione explicabo nesciunt quasi 
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
              <p>Engage - market leading customer engagement technology in an easy to use and lightweight interface.</p>
              <p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-12 text-center large-text">
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


                

