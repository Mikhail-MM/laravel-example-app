@extends('template-example/layout')

@section ('content')


  <!-- Main -->
    <div id="main" class="alt">
      <div class="inner">

        <form method="POST" action={{ "/article/{$article->id}" }}>

            @csrf
            <!-- 
              This allows you to send a PUT request with a framework workaround.
              However, server-logs may be difficult to follow as the method signature is still POST 
            -->
            @method('PUT')

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text"  name="title" id="title" value="{{ $article->title }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body">{{ $article->body }}</textarea>
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