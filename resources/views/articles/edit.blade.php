@extends('./layouts/app')

@section('page-content')
<div class="card-body mx-auto w-25 bg-secondary border border-end-2 mt-5">
                    @if(session()->has('succes'))
                   
                        <div class="alert alert-success">{{session()->get('succes')}}</div>
                    @endif
                <h4 class="text-dark">Moifier Article</h4>

                <form method="POST" action="{{route('articles.update',$article->id)}}" enctype="multipart/form-data"  class="">
                    @method('PUT')
                    @csrf
                    <div class="form-group pb-3 ">
                            <label for="title" class="text-white pb-3 display-6 ">Title</label>
                            <input type="text" name="title" class="form-control pb-3 " placeholder="Creer un titre" value="{{$article->tilte}}">
                            <div class="text text-danger">
                                @error('title')
                                    {{$message}}
                                @enderror
                            </div>
                            <label for="description" class="text-white pb-3 pt-3 display-6 "> La description</label>
                            <textarea class="form-control  " name="description" >{{$article->description}}</textarea>

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
                                 <button type="submit" name="btn_submit" class="btn btn-success  "> modifier </button> 
                           </div>
                              
                    </div>
                   
                   <!-- <input type="email" name="mail" class="form-control"  placeholder="votre mail" value="{{old('mail')}}"> -->
                </form>      
            </div>   
    @endsection