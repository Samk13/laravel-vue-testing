@extends('projects.layout')


@section('content')

    <h1 class="title"> Edit project</h1>
<form method="POST" action="/projects/{{ $project->id }}">

        {{ method_field('PATCH')}}

        {{ csrf_field() }}
    
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
        <div class="field">
                <div class="control">
                <button  class="button is-link" type="submit" placeholder="description">
                        Update project
                    </button>
                </div>
            
        </div>
    </form>

@endsection