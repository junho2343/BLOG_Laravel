@extends('layouts.master')
@section('content')
<section class="admin">
	<div class="container">
		@if(session()->has('admin'))

		<!-- 카테고리에 해당하는 포스트 목록 -->
		<ul class="list-group">
			@foreach ($posts as $post)
				<li class="list-group-item"><a href="{{ url('/admin/'.$idx.'/'.$post->idx) }}">{{ $post->title }}</a> - <a href="{{ url('/admin/post/'.$post->idx.'?type=post') }}">삭제</a> <span>{{ $post->date }}</span></li>
		  	@endforeach
		</ul>

		@else
		<!-- 어드민 로그인 -->
		<h2>Error</h2>
		@endif

	</div>
</section>
@endsection('content')
