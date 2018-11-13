@extends('layouts.master')
@section('content')
<section class="admin">
	<div class="container">
		@if(session()->has('admin'))

		<!-- 카테고리추가 -->
		<form action="{{ url('/admin/category') }}" method="post" class="form w-100">
			@csrf
			<input type="hidden" name="type" value="category">
			<div class="head">
				<h3>Category Add</h3>
			</div>
			<div class="body">
				<input type="text" name="name" placeholder="Name" class="form-control" autofocus="">
				<button type="submit" class="btn form-control">Save</button>	
			</div>
		</form>

		<!-- 카데고리 -> 내용추가 -->
		<form action="{{ url('/admin/post') }}" method="post" class="form w-100">
			@csrf
			<input type="hidden" name="type" value="post">
			<div class="head">
				<h3>Post Add</h3>
			</div>
			<div class="body">
				<select class="form-control w-25" name="category">
					@foreach ($categorys as $category)
						<option value="{{ $category->idx }}">{{ $category->name }}</option>
					@endforeach
				</select>
				<input type="text" name="title" placeholder="Title" class="form-control" autofocus="">
				<textarea class="form-control" name="content" placeholder="Textarea" rows="5"></textarea>
				<button type="submit" class="btn form-control">Save</button>	
			</div>
		</form>

		<div class="form w-100">
			{{ csrf_field() }}
			<div class="head">
				<h3>Category List</h3>
			</div>
			<div class="body">
				@foreach ($categorys as $category)
					<p><a href="{{ url('/admin/'.$category->idx.'') }}">{{ $category->name }}</a> - {{ $category->count }}개 <a href="{{ url('/admin/category/'.$category->idx.'?type=category') }}">삭제</a></p>
				@endforeach
			</div>
		</div>
		@else
		<!-- 어드민 로그인 -->
		<form action="{{ url('/admin/login') }}" method="post" class="form">
			{{ csrf_field() }}
			<div class="head">
				<h3>Admin Page</h3>
			</div>
			<div class="body">
				<input type="text" name="password" placeholder="Password" class="form-control" autofocus="">
				<button type="submit" class="btn form-control">Send</button>	
			</div>
		</form>
		@endif

	</div>
</section>
@endsection('content')
