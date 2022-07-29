@extends('layouts/main')

@section('container')
<h2>{{$single_blog['title']}}</h2>
<h5>{{$single_blog['author']}}</h5>
<p>{{$single_blog['body']}}</p>

    <a href="/blog">>>Kembali Ke Halaman Sebelumnya<<</a>
@endsection