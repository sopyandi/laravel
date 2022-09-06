@extends('layouts/main')

@section('container')
<h1>Halaman Blog</h1>
<br>
@foreach($blog as $isi_blog )
<article class="mb-5 border-bottom pb-3">
<a href="/blog/{{$isi_blog->slug}}"><h3>{{$isi_blog->title}}</h3></a>
<p>By . <a href="">{{$isi_blog->user->name}}</a> Thiss <a href="/categories/{{$isi_blog->category->slug}}">  {{$isi_blog->category->nama}}</a></p>
<h5>{{$isi_blog->author}}</h5>
<p>{{$isi_blog->exerp}}</p>
<a href="/blog/{{$isi_blog->slug}}">Read More...</a>
<br>
</article>
@endforeach
@endsection
