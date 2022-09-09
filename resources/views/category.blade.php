@extends('layouts/main')

@section('container')
<h4>Post Category : {{$category}}</h4>
@foreach($blog as $isi_blog )
<article class="mb-5 border-bottom pb-3">
<a href="/blog/{{$isi_blog->slug}}"><h2>{{$isi_blog->title}}</h2></a>
<h5>{{$isi_blog->author}}</h5>
<p>{{$isi_blog->exerp}}</p>
</article>
@endforeach
@endsection