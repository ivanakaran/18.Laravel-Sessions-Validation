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


  <form action="{{ route('infoPage')}}" method="post">
    @csrf
    <div class="row">

      <div class="form-group col-6 mx-auto">
        @error('firstName')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label class="form-label text-uppercase">Name</label>
        <input type="text" class="form-control" name="firstName" value="{{ old('firstName')}}">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-6 mx-auto">
        @error('lastName')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label class="form-label text-uppercase">Last Name</label>
        <input type="text" class="form-control" name="lastName" value="{{ old('lastName')}}">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-6 mx-auto">
        @error('email')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label class="form-label text-uppercase">Email</label>
        <input type="text" class="form-control" name="email" value="{{ old('email')}}">
      </div>
    </div>

    <button type="submit" class="btn btn-primary btn-block col-6 mx-auto">Submit</button>
  </form>

  @include('footer');

</body>

</html>