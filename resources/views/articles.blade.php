@extends('layouts.app')
@section('content')
<h1>Liste des articles</h1>
@if ($posts->count()>0)
    @foreach ($posts as $post)
    <h3><a href="{{ route('posts.show',['id'=>$post->id]) }}">{{ $post->title }}</a></h3>
    @endforeach
@else
    <span>Aucun post en base de donner</span>
@endif

<h1>Liste des videos</h1>
@forelse ($video->comments as $comment )
    <div>{{ $comment->content }} | creer le {{ $comment->created_at===NULL? '' : $comment->created_at->format('d-m y') }}</div>
@empty
    <span>aucun commentaire pour cette video</span>
@endforelse

@endsection
