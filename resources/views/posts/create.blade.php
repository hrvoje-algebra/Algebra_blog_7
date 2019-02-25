@extends('Centaur::layout')

@section('title', 'Create New Posts')

@section('content')

@push ('tinymce')
	<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
@endpush

<div class="row">
	<div class="col-md-6 col-md-offset-3">
       <div class="panel panel-primary">
         <div class="panel-heading">
           <h3 class="panel-title">Create New Post</h3>
         </div>
         <div class="panel-body">
			<form accept-charset="UTF-8" role="form" method="post" action="{{ route('posts.store') }}">
				<fieldset>
					<div>
						<div class="form-group">
							<input type="text" class="form-control" name="title" placeholder="Enter post title">
							{!! ($errors->has('title') ? $errors->first('title', '<p class="text-danger">:message</p>') : '' )  !!}
						</div>
						
						<div class="form-group">
							<textarea class="form-control" name="content" placeholder="Enter post content" style="max-width:100%;height:250px">
							</textarea>
							{!! ($errors->has('content') ? $errors->first('content', '<p class="text-danger">:message</p>') : '' )  !!}
						</div>
					</div>
						{{ csrf_field() }}
						<input class="btn btn-primary btn-block" type="submit" value="Create">
				</fieldset>
		    </form>
         </div>
       </div>
	</div>
</div>

@stop