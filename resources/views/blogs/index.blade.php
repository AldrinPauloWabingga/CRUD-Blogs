
    @foreach($authors as $author)
    @foreach ($author->posts as $blog)
        
    <div class="container mx-auto px-4">
        <h1> Created by: {{$author->name}} </h1>
            <h2>Title: {{$blog['title']}}</h2>
                <h3>Summary: {{$blog['summary']}}</3>
                    <h4>Content: {{$blog['content']}}</h4>
                    
     <br>
            <a href ="{{route ('blogs.edit', $blog->id)}}">EDIT</a> 
             <a href ="{{route ('blogs.destroy', $blog->id)}}">DELETE</a> 
          
            
    </div>
            @endforeach
    @endforeach
    
    </x-app-layout>