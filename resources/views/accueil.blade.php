@extends('./layouts/app')  

@section('page-content')

   @auth
        <div class="card  col-sm-5 bg-secondary mx-auto ">
         
            <div class="card-body mx-auto ">
                    @if(session()->has('succes'))
                   
                        <div class="alert alert-success">{{session()->get('succes')}}</div>
                    @endif
                <h4 class="text-white">Enregistrer un Article</h4>

                <form method="POST" action="" enctype="multipart/form-data" >
                    @method('post')
                    @csrf
                    <div class="form-group pb-3 ">
                            <label for="title" class="text-white pb-3 display-6 ">Title</label>
                            <input type="text" name="title" class="form-control pb-3 " placeholder="Creer un titre" value="{{old('title')}}">
                            <div class="text text-danger">
                                @error('title')
                                    {{$message}}
                                @enderror
                            </div>
                            <label for="description" class="text-white pb-3 pt-3 display-6 "> La description</label>
                            <textarea class="form-control  " name="description" value="{{old('description')}}"></textarea>

                            <div class="text text-danger">
                                @error('description')
                                {{$message}}
                                @enderror
                           </div>
                           <div class=" mt-2 btn btn-primary btn-rounder">
                            <label class="form-label text-whit m-1 bold" for="">choisir une image</label>
                            <input type="file" class="form-control d-none mt-5" name="image" accept="image/png, image/jpeg">
                           </div>
                           <div class="pt-3">
                                 <button type="submit" name="btn_submit" class="btn btn-success  "> Ajouter </button> 
                           </div>
                              
                    </div>
                   
                   <!-- <input type="email" name="mail" class="form-control"  placeholder="votre mail" value="{{old('mail')}}"> -->
                </form>      
            </div>   
    </div>
   @endauth
    
    <div class="col-sm-7 mx-auto ">
         <h5 class="mbr-sub-title align-left mbr-fonts-style pb-2 display-6"><strong>Liste des Articles</strong></h5>
         <ul class="list-group-flush mt-2" >
                @forelse($articles as $article)
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
        <div>
            {{$articles->links()}}    
        </div>   
    </div>

 @endsection
 