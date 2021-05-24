@extends('layouts.app')
@section('content')
<form action="{{route('admin.places.state_store')}}" method="post">
	@csrf
	<div class="container">
		<h3 class="text-primary">{{$country->ar_name}}</h3>
		<div class="row">
			<div class="col-md-6">
				إسم المحافظة
				<input type="text" name="ar_name" class="form-control">
			</div>
			<div class="col-md-6">
				<input type="hidden" name="country_id" value="{{$country->id}}">
				<button class="btn mt-4 btn-primary btn-block">حفظ</button>
			</div>
		</div>
	</div>
</form>

<div class="container">
	<h3>قائمة المحافظات</h3>
	<div class="row">
		@foreach($states as $key => $state)
		<div class="col-md-12">
			({{$key+1}}) <a href="{{route('admin.places.village_create',['state'=>$state->id])}}">{{$state->ar_name}}</a>
		</div>
		@endforeach
	</div>
</div>
@endsection