@extends('./layouts/app')

@section('page-content')
<div class="div">
    <div class="col-sm-7 mx-auto ">
         <h5 class="mbr-sub-title align-left mbr-fonts-style pb-2 display-6"><strong>Liste des Articles</strong></h5>
         <ul class="list-group-flush mt-2" >
                @forelse($myArticles as $article)
                        <div class="card mb-3">
                            <div class="card-body mb-5">
                                <li class="list-group-item nav-link active">
                                    <h4 class="card-title text-white ">{{$article->tilte}} </h4>   
                                </li>
                                <p class="card-text">{{$article->description}}</p>
                                
                            </div>
                            <div class="card-footer"><a href="{{route('articles.show',$article->id)}}" class="btn btn-primary">show Article</a></div>
                        </div>
                    @empty
                        <p class="alert alert-info">Aucun Article trouve</p>
                @endforelse 
        </ul>     
    </div>
</div>

@endsection