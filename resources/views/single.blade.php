@extends('layouts/main')

@section('container')
<h2>{{$single_blog->title}}</h2>
<h5>{{$single_blog->author}}</h5>
<p>By . Rian sopyandi<a href="/categories/{{$single_blog->category->slug}}">  {{$single_blog->category->nama}}</a></p>
 {!!$single_blog->body!!}
 <br><br>
    <a href="/blog">>>Kembali Ke Halaman Sebelumnya<<</a>
@endsection

<!-- <html>   
Post::create([
    'title' => 'Judul ke tiga',
    'category_id' => 3,
    'slug'  => 'judul-ketiga',
    'exerp' => 'Judul Pertama Adalah Judu Pertama',
    'body'  => 'saya adalah rian sopyandi 3'
    ])
</html> -->


