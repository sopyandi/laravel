@extends('layouts/main')

@section('container')
@foreach($category as $data_category)
<ul>
    <li>
    <h4><a href="/categories/{{$data_category->slug}}">{{$data_category->nama}}</a></h4>
    </li>
</ul>
@endforeach()
@endsection()