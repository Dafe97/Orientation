@extends('layouts/app')
@section('content')  
    <div class="container  mt-5">
        <div class="pt-4">
            <h1>
                Nouveau Forum
            </h1>
        </div>
       <form action="{{route('forum.store')}}" method="post" enctype="multipart/form-data" class="pt-4">
        @csrf
       
          <div class="mb-2">
              <label for="title">Titre</label>
              <input type="text" name="title" id="title" class="form-control " >
              @error('title')
                   <div class="">{{$message}}</div>
              @enderror
          </div>
          <div class="mb-2">
              <label for="contents">Description</label>
              <textarea name="contents" id="contents" cols="30" rows="10" class="form-control" ></textarea>
              @error('contents')
                 <div class="">{{$message}}</div>
              @enderror
          </div>
          <div class="mb-2">
              <label for="img"></label>
              <input type="file" name="img" id="img" class="form-control">
              @error('img')
                    <div class="">{{$message}}</div>
              @enderror
          </div>
        <div class="mb-2">
            <input type="submit" value="Valider" class="btn btn-primary">
        </div>
       </form>
    </div>
@endsection