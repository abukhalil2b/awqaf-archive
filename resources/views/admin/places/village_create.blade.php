@extends('layouts.app')
@section('content')
<form action="{{route('admin.places.village_store')}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				إسم الولاية
				<input type="text" name="ar_name" class="form-control">
			</div>
			<div class="col-md-6">
				<input type="hidden" name="state_id" value="{{$state->id}}">
				<button class="btn mt-4 btn-primary btn-block">حفظ</button>
			</div>
		</div>
	</div>
</form>
<div class="container">
	<h3>قائمة الولاية</h3>
	<div class="row">
		@foreach($villages as $key => $village)
		<div class="col-md-12">
			({{$key+1}}) {{$village->ar_name}}
		</div>
		@endforeach
	</div>
</div>
@endsection