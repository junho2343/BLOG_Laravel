@extends('layouts.master')
@section('content')
<section class="admin">
	<div class="container">
		@if(session()->has('admin'))

		<!-- 카테고리에 해당하는 포스트 목록 -->
		<form action="{{ url('/admin/post/'.$post->idx) }}" method="post" class="form w-100">
			@csrf
			<input type="hidden" name="tpye" value="post">
			<div class="body">
				<select class="form-control w-25" name="category">
						<option>{{ $category->name }}</option>
				</select>

				<input type="text" name="title" placeholder="Title" class="form-control" autofocus="" value="{{ $post->title }}">
				<!-- <div class="text_box"> -->
					<!-- htmlspecialchars_decode($post->content_mark) -->
				<!-- </div> -->
				<textarea class="form-control" name="content" placeholder="Textarea" rows="25">{{ $post->content }}</textarea>
				<button type="submit" class="btn form-control">Save</button>	
			</div>
		</form>

		@else
		<!-- 어드민 로그인 -->
		<h2>Error</h2>
		@endif

	</div>
</section>
@endsection('content')
