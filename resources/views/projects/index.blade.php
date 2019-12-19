@extends('projects.layout')


@section('content')

<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Projects
      </h1>
      <h2 class="subtitle">
        my projects list
      </h2>
    </div>
  </div>
</section>
<div class="container is-fluid">
    <div class="media">
        <div class="level">

        
            
             <div class="media-content">
                @foreach ($projects as $project)
            
                <ul>
                    <a  class="title is-1" href="/projects/{{ $project->id}}"
                        <li>{{ $project->title }}</li>
                    </a>
                </ul>
                @endforeach
            <div class="field">
      <p class="control">
          
                
               <a class="button" href="/projects/{{ $project->id }}/edit">Edit</a>
               <a class="button" href="/projects/create">add</a>
                    </div>
  </div>
            </div>
        </div>
    </div>
</div>
@endsection