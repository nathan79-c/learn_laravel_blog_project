@extends('./layouts/app')
@section('page-content')
<ul class="list-group-flush mt-2 mx-auto col-sm-5 pt-5" >
      <a href="/accueil" class="btn btn-primary">retour</a>
    <div class="card mb-3">
       
        <div class="card-body mb-5">
           
            <li class="list-group-item nav-link active"><h4 class="card-title text-white ">{{$article->tilte}}</h4></li>
            
            <p class="card-text">{{$article->description}}</p>
            
             
        </div>
        @auth
        @if(Auth::user()->id===$article->user_id)
               <div class="card-footer">
                    <a href="{{route('articles.edit',$article->id)}}" type="submit" name="btn_edit" class="btn btn-info  "> editer </a> 
                    <form action="{{route('articles.delete',$article->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    
                    <button type="submit" name="btn_delete" class="btn btn-danger  "> supprimer </button> 
              </form>
              
        </div>
        @endif
        @endauth
    
    </div>
</ul>
@endsection