

<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Listing Blogs') }}
            </h2>
    </x-slot>
    
@csrf
@method('DELETE')
    @foreach($authors as $author)
    @foreach ($author->posts as $blog)
        <div>
        
            <div class="container  bg-fuchsia-300 mb-3 p-5">
        <h1> Created by: {{$author->name}} </h1>
            <h2>Title: {{$blog['title']}}</h2>
                <h3>Summary: {{$blog['summary']}}</3>
                    <h4>Content: {{$blog['content']}}</h4>
                    <a href ="{{route ('blogs.edit', $blog->id)}}">EDIT</a> 
                    <a href ="{{route ('blogs.destroy', $blog->id)}}">DELETE</a> 
                    <br>
                    ~~~~~~~~~~~~~~~~~~~~~~
                    
            
    </div>
            @endforeach
    @endforeach
    {{-- @include('layouts.footer') --}}
    </x-app-layout>
