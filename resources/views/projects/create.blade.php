@extends('layout')

@section('content')
    

    <h1 class="title">Create A New Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input type="text" class="input {{ $errors->has('title')  ? 'is-danger' : '' }}" name="title" placeholder="Title" required value="{{ old('title') }}">
                </div>
            </div>
            <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">  
                    <textarea name="description" class="textarea {{ $errors->has('description')  ? 'is-danger' : '' }}" placeholder="Description" required>{{ old('description') }}</textarea>
                </div>
            </div>  
        <div class="field">
            <button type="submit" class="button is-link">Create Project</button>
        </div>

        @include('errors')
    </form>
@endsection