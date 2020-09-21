@extends('template-example/layout')

@section ('content')


  <!-- Main -->
    <div id="main" class="alt">
      <div class="inner">

        <form method="POST" action="/article">
          <!-- Without including a CSRF token, this will return with a 419 -->
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>
                
                <div class="control">
                  <input 
                    class="input" 
                    type="text"  
                    name="title" 
                    id="title"
                    value="{{ old('title') }}"
                    
                  >
                  <!-- 
                    You can use the old() helper to persist data between validations.
                    Here is how to do it with a checkbox array:
                    https://stackoverflow.com/questions/39521726/how-to-show-old-data-of-dynamic-checkbox-in-laravel
                  -->
                </div>
                @if ($errors->has('title'))
                  <p>
                    {{ $errors->first('title') }}
                  </p>
                @endif
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea 
                      class="textarea" 
                      name="body" 
                      id="body"></textarea>
                    <!-- 2 identical ways to render errors -->
                    @if ($errors->has('body'))
                      <p>{{ $errors->first('body') }}</p>
                    @endif
                    
                    @error('body')
                      <p>{{ $message }}</p>
                    @enderror
                </div> 
            </div>

            <div class="field">
              <label class="label" for="body">Tags</label>

              <div class="control">
                  <select 
                    id="tags"
                    name="tags[]"
                    class="select"
                    multiple
                  >
                    @foreach ($tags as $tag)
                      <option value="{{$tag->id}}">
                        {{ $tag->name }}
                      </option>
                    @endforeach
                  </select>
                  @error('tags')
                    <p> {{ $message }} </p>
                  @enderror
              </div> 
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
        
      </div>
    </div>
@endsection