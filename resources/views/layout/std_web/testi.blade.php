@extends('layout.std_web.main')
@section('container')
<article class="blog-post">
    <div class="container-fluid mt-5">
        <div class="row ">
          <div class="col">
            <div class="text-center mb-5">
                <img src="https://dummyimage.com/400" class="rounded" alt="...">
              </div>
          </div>
          <div class="col-md-8">
            <h2 class="display-5 link-body-emphasis mb-1">{{$data["title"]}}</h2>
    <p class="blog-post-meta">December 14, 2020 by <a href="#" class="text-decoration-none">{{$data["author"]}}</a></p>
    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
    <ul>
      <li>First list item</li>
      <li>Second list item with a longer description</li>
      <li>Third list item to close it out</li>
    </ul>
    <p>{{$data["body"]}}</p>
          </div>
        </div>
      </div>
  </article>
@endsection

