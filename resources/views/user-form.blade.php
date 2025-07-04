<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- @if($errors->any())
    @foreach ($errors->all() as $error)
    <div style="color: red">
        {{$error}}
    </div>
    @endforeach
    @endif --}}
<form action="adduser" method="post" class="row g-3 needs-validation" novalidate>
    @csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <br>
    <span style="color: red">@error('name'){{$message}}@enderror</span>
    <input type="text" class="form-control" id="validationCustom01" name="name" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <br>
    <span style="color: red">@error('lastname'){{$message}}@enderror</span>
    <input type="text" class="form-control" id="validationCustom02" value="" name="lastname" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <br>
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" name="username" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>

  </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

</body>
</html>