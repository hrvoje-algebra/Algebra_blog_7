@extends('Centaur::layout')

@section('title', 'Posts')

@section('content')
   
<div class="page-header">
	<div class="btn-toolbar pull-right">
		<a class="btn btn-primary btn-lg" href="{{ route('posts.create') }}" >
			<span class="glyphicon glyphicon-plus"></span> Create new post
		</a>
	</div>
	<h1>Posts</h1>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="table-responsive">
			
			@if(count($posts) > 0)
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Title</th>
							<th>User</th>
							<th>Created_at</th>
							<th>Updated_at</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($posts as $post)
							<tr>
								<td> {{ $post->title }} </td>
								<td> {{ $post->user->email }} </td>
								<td> {{ \Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->diffForHumans() }} </td>
								@if($post->updated_at !== null)  
								  <td> {{ \Carbon\Carbon::createFromTimestamp(strtotime($post->updated_at))->diffForHumans() }} </td>
							    @else
									<td> {{ 'Never' }} </td>
								@endif
								  <td>
									<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
									<a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger btn-sm action_confirm" data-method="delete" data-token="{{ csrf_token() }}"><span class="glyphicon glyphicon-remove"></span> Delete</a>
								</td>
							</tr>
						@endforeach
					</tbody>
					
				</table>
			@else
				{{ 'No posts!' }}
			@endif
			
		</div>
		<!--  render() za paginaciju  -->
	</div>
</div>
@stop