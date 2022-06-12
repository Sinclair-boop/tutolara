@extends('layouts.app')
@section('content')
<h1>creer un nouveau post</h1>
<form action="{{ route('posts.stores') }}" method="post">
    @csrf
    <input type="text" name="title" class="border-gray-600 border-2">
    <textarea name="content" id="content" cols="30" rows="10" class="border-gray-600 border-2"></textarea>
    <button type="submit" class="bg-green-500">envoyer</button>
</form>
@endsection
