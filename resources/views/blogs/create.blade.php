<x-app-layout>
  <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
              {{ __('Create your Blog') }}
          </h2>
  </x-slot>
  
     
  <form action="{{ route('blogs.store')}}" method="POST">
    @csrf
    <div>
      <label class="font-semibold" for="author">AUTHOR:</label>
          <select class="font-semibold" name="user_id">
              @foreach($authors as $author)
                  <option value="{{ $author->id }}">{{$author->name}}</option>
              @endforeach  
          </select>  
          <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
          <div>
  </div><br>
      <div class="mt-4">
        <x-input-label for="title" :value="__('Title')" />
        <x-text-input id="title" class="block mt-1 w-half" type="text" name="title" />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div></br>


        <br> <label for="">Summary:</label><br>
          <textarea name="summary" id="" cols="50" rows="20" class="form-control"></textarea>
      </div>
      @error('summary')
      <div style="color:red;">{{ $message }}</div>
      @enderror

      <div class="form-group">

        <br> <label for="">Content:</label><br>
          <textarea name="content" id="" cols="50" rows="20" class="form-control"></textarea>
      </div>
      @error('content')
      <div style="color:red;">{{ $message }}</div>
      @enderror
    </div>
</body>
          <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3" type="submit">
                  Create
              </x-primary-button>
          </div>
  </form>
  </x-app-layout>