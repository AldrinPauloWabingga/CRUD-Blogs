<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Are you sure you want to delete?') }}
            </h2>
    </x-slot>
    
    <form action="{{ route('blogs.destroy', $blog->id) }}" method="DELETE">
        @csrf
        @method('DELETE')
    <div>
        <h1>Title: {{$blog['title']}}</h1>
            <h2>Summary: {{$blog['summary']}}</h2>
                <h3>Content: {{$blog['content']}}</h3>
    </div>


    <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3" type="submit">
                   Delete
                </x-primary-button>
            </div>
    </form>
    
    <form action="{{ route('blogs.index')}}" method="GET">
        <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3" type="submit">
                   CANCEL
                </x-primary-button>
        </div>
    </form>
    </x-app-layout>
    