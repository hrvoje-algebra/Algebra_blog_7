@extends('Centaur::layout')

@section('title', 'Algebra blog')

@section('content')
<div class="row">
    @if(count($posts) > 0)
			@foreach($posts as $post)
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="well">
					<h4>
						<a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
					</h4>
					<hr>
					<p>{{ str_limit(strip_tags($post->content), 200) }}</p>
				</div>
			</div>
			@endforeach
	@else
		<div class="well">
			<h3 class="text-center"> No Posts! </h3>
		</div>
	@endif
</div>
@stop