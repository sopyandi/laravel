@extends('layouts/main')

@section('container')

@foreach($blog as $isi_blog )
<h4>Post Category : {{$category}}</h4>
<a href="/blog/{{$isi_blog->slug}}"><h2>{{$isi_blog->title}}</h2></a>
<h5>{{$isi_blog->author}}</h5>
<p>{{$isi_blog->exerp}}</p>
@endforeach
@endsection