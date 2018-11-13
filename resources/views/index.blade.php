@extends('layouts.master')
@section('content')
<section class="category">
	<div class="container">
		<ul>
			<li><a href="">All</a></li>	
			@foreach ($categorys as $category)
				<li><a href="">{{ $category->name }}</a></li>	
			@endforeach
		</ul>	
	</div>
</section>
<section class="content">
	<div class="container">
		@foreach ($posts as $post)
		<div class="box">
			<p><span class="category">/ {{ $post->name }}</span><span class="date">{{ $post->date }}</span></p>
			<p class="title"><a href="{{ url('/view/'.$post->c_idx.'/'.$post->idx.'') }}">{{ $post->title }}</a></p>
		</div>
		@endforeach
	</div>	
</section>
@endsection('content')
