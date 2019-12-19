@extends('projects.layout')


@section('content')

    <h1 class="title"> Edit project</h1>
<form method="POST" action="/projects/{{ $project->id }}">


        @method('PATCH')
        @csrf
           
        <div class="field">
            <label class="label" for="title"> Title </label> 
                <div class="control">
                    <input value="{{$project->title}}" class="input" type="text" placeholder="title" name="title">
                </div>    
        </div>

        <div class="field">
            <label class="label" for="description"> description </label> 

                <div class="control">
                 <input value="{{$project->description}}" class="textarea" type="text" placeholder="description" name="description">
                </div>
                </div>
        </div>
        <div class="buttons">
                <div class="buttons">
                <button  class="button is-link" type="submit" placeholder="description">
                        Update project
                    </button>  
                </div>            
        </div>           
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
      
        @method('DELETE')
        @csrf

         <div class="buttons">
                <button  class="button is-link" type="submit" placeholder="description">
                        Delete project
                    </button>  
                </div>   
    </form>



@endsection