@extends('layouts.app')
@section('content')
<h1>tutolar</h1>
<h2><a href="{{ route('posts.create') }}">{{ $post->content }}</a></h2>


<span>{{ $post->image ? $post->image->path : 'n\'existe pas d \'image' }}</span>
<hr>
@forelse ($post->comments as $comment )
    <div>{{ $comment->content }} | creer le {{ $comment->created_at===NULL? '' : $comment->created_at->format('d-m y') }}</div>
@empty
    <span>aucun commentaire pour ce post</span>
@endforelse

<hr>
@forelse ($post->tags as $tag )
<div>{{ $tag->name }}</div>
@empty
<span>Aucun tags n'existe pour ce poste</span>
@endforelse
@endsection
