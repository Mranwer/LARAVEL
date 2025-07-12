<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <style>
      .input-error{
        color: red;
        border:1px solid red;
      }
    </style>
<body>
    
          {{-- @if($errors->any())
    @foreach ($errors->all() as $xyz)
    <div style="color: red">
        {{$xyz}}
    </div>
    @endforeach
    @endif --}}
    <form action="user-info" class="row g-3 needs-validation" novalidate method="post">
        @csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <br>
    <span style="color: red">@error('fname'){{$message}}@enderror</span>
    <input type="" name="fname" class="{{($errors->first('fname')? 'input-error':'')}} form-control" id="validationCustom01" value="{{old('fname')}}" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <br>
    <span style="color: red">@error('lname'){{$message}}@enderror</span>
    <input type="text" name="lname" class="{{($errors->first('lname')? 'input-error':'')}} form-control" id="validationCustom02" value="{{old('lname')}}" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <br>
    <span style="color: red">@error('uname'){{$message}}@enderror</span>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" value="{{old('uname')}}" name="uname" class="{{($errors->first('uname')? 'input-error':'')}} form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>