@extends('layouts.master')
@section('content')
<section class="view">
	<div class="container">
		<?= htmlspecialchars_decode($data->content_mark) ?>
	</div>
</section>
@endsection('content')
