@extends('projects.layout')


@section('content')

    <section class="section">
         <div class="container">
             <div class="card">
                 <header class="card-header">

                <h2 class="title"> Edit project</h2>
                 </header>
                  <div class="card-content">
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
                        
                        <input value="{{$project->description}}" class="input" type="text" placeholder="description" name="description">
                        
                        
                </div>
            
                  <footer class="card-footer">
                      <div class="buttons">
                        
                           
                            <button class="button is-success" type="submit" placeholder="description">
                                    Update
                                </button>                  
                         </form>

                    <form method="POST" action="/projects/{{ $project->id }}">
                        
                            @method('DELETE')
                            @csrf

                            <button  class="button is-danger" type="submit" placeholder="description">
                                    Delete
                                </button>  
                            
                            </div>
                    </form>
                  </footer>
                   </div>
        </div>
    </section>


@endsection