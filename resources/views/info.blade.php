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


  <div class="containter text-white">
    @if(session()->has('firstName'))
    <h4>Your name is:{{ session()->get('firstName')}}</h4>
    @endif

    @if(session()->has('lastName'))
    <h4>Your last name is:{{ session()->get('lastName')}}</h4>
    @endif

    @if(session()->has('email'))
    <h4>Your email is:{{ session()->get('email')}}</h4>
    @endif
  </div>

  @include('footer');

</body>

</html>