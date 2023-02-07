@extends('./layouts/app')
@section('page-content')

<div class="mx-auto w-25">
   
                    @if(session()->has('succes'))
                   
                        <div class="alert alert-success">{{session()->get('succes')}}</div>
                    @endif
    <form action="{{route('registrer')}}" method="POST" class="was-validated">
        @method("POST")
        @csrf
  <div class="mb-3 mt-3">
    <label for="username" class="form-label">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
                           <div class="text text-danger">
                                @error('username')
                                    {{$message}}
                                @enderror
                            </div>
  </div>
   <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="uname" placeholder="Enter un mail" name="email" required>
                            <div class="text text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                            <div class="text text-danger">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </div>
   
   
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<h6>vous avez deja un compte<a href="{{route('login')}}">connecter vous </a></h6>

</div>
@endsection