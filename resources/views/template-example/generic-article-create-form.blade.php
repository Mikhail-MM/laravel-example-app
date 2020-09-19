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
                    <input class="input" type="text"  name="title" id="title">
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body"></textarea>
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