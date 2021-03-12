<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel validation and sessions</title>
</head>

<body>
  @include('header');

  @include('navigation');


  <div class="container visit-us py-5">
    <div class="row">
      <div class="col-6 content">
        <div class="card w-75">
          <h5 class="text-center text-uppercase">Lorem Ipsum</h5>
          <div class="card-body">
            <h3 class="card-title text-center text-uppercase">Lorem Ipsum</h3>
            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus
              facilis fuga,
              repudiandae suscipit aut dolorum ut maxime necessitatibus eveniet sed.</p>
          </div>
        </div>
        <a href="#" class="btn btn-warning text-center visit-btn">Visit us today</a>
      </div>
      <div class="col-6 image-container">
        <img src="/images/cafe.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>

  <div class="container-fluid promise_section">
    <div class="row">
      <div class="col-12">
        <div class="promise_section_content">
          <h6>OUR PROMISE</h6>
          @if(session()->has('firstName') && session()->has('lastName'))
          <h3 class="text-uppercase">TO {{session('firstName')}} {{session('lastName')}}</h3>
          @else
          <h3>TO YOU</h3>
          @endif
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing
            elit. Ipsam quibusdam necessitatibus autem rem
            libero vel tempore quia aut beatae repellat a esse
            est minus aliquid, magni, adipisci saepe nisi
            voluptatem dolorum eos nesciunt accusantium sit
            numquam placeat?
          </p>
        </div>
      </div>
    </div>
  </div>

  @include('footer');

</body>

</html>