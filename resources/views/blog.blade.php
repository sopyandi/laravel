@extends('layouts/main')

@section('container')

@foreach($blog as $isi_blog )
<a href="/blog/{{$isi_blog['slug']}}"><h2>{{$isi_blog['title']}}</h2></a>
<h5>{{$isi_blog['author']}}</h5>
<p>{{$isi_blog['body']}}</p>
@endforeach

@endsection
