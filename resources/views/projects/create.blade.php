
@extends('projects.layout')


@section('content')

<h1>Create new project</h1>

<form method="POST" action="/projects">

    {{csrf_field()}}

<div class="field">
  <label class="label">title</label>
  <div class="control">
    <input class="input"type="text" name="title" placeholder="Project Title">
  </div>
</div>


<div class="field">
  <label class="label">description</label>
  <div class="control">
    <textarea class="textarea" name="description" placeholder="Project description"></textarea>
  </div>
</div>

  <div class="control">
    <button class="button is-link">Create Project</button>
  </div>

</form>

@endsection


