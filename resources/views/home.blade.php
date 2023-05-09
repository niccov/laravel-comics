@extends('layouts/main-layout')

@section('content')
<main>

    <div id="container">
       <div id="container-card">
      
         @foreach ($comics as $singleComic)
             <div class="card">
  
               <div class="card-inner">
                 <div class="container-img">
                    <img src="{{$singleComic['thumb']}}" alt="immagine comic">
                 </div>
              
                 <div>
                    {{$singleComic['title']}}
                 </div>
               </div>
             </div>
         @endforeach
         </div>
      
         <div id="container-button">
             <button>LOAD MORE</button>
         </div>
    </div>

    
</main>
@endsection