@extends("layout")
@section("content")
{{--  <?php foreach($posts as $post): ?> --}}
@foreach ($posts as $post)

<article>
   <h1>
     <a href="/posts/{{$post->slug; }} ">{{$post->title}}</a>
    </h1>
    <p>
        By <a href="/authors/{{$post->author->userName}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
      </p>
   <div>
       {{$post->excerpt}}
   </div>
</article>
@endforeach
{{-- <?php endforeach; ?> --}}
</body>
@endsection
