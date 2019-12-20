@extends('projects.layout')

@section('content')

<div class="tile is-ancestor">
  <section class="section">
    <div class="container">
<div class="card">
  <header class="card-header">
    <p class="card-header-title">
      {{ $project->title }}
    </p>
    
  </header>
  <div class="card-content">
    <div class="content">
      {{ $project->description}}
     
      <br>
     
    </div>
  </div>
  <footer class="card-footer">
    <a class="button" href="/projects/{{ $project->id }}/edit">Edit</a>

    <form method="POST" action="/projects/{{ $project->id }}">
      
        @method('DELETE')
        @csrf

         <div class="buttons">
                <button  class="button is-danger" type="submit" placeholder="description">
                        Delete project
                    </button>  
                </div>   
    </form>
  </footer>
</div>
   </div>
  </section>
</div>

@endsection