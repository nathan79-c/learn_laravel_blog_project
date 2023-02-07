@extends('./layouts/app')
@section('page-content')

<div class="mx-auto w-25">
   
                    @if(session()->has('errors'))
                   
                        <div class="alert alert-danger">{{session()->get('errors')}}</div>
                    @endif
    <form action="{{route('login')}}" method="POST" class="was-validated">
        @method("POST")
        @csrf
  <div class="mb-3 mt-3">
    <label for="username" class="form-label">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
                           <div class="text text-danger">
                                
                            </div>
  </div>
  
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                            <div class="text text-danger">
                                
                            </div>
   
   
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<h6 class="mt-1">je veut <a href="{{route('registrer')}}">m'inscrire </a></h6>

</div>
@endsection