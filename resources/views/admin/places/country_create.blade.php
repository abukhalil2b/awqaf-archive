@extends('layouts.app')
@section('content')
<form action="{{route('admin.places.country_store')}}" method="post">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				إسم الدولة
				<input type="text" name="ar_name" class="form-control">
			</div>
			<div class="col-md-6">
				<button class="btn btn-primary btn-block mt-4">حفظ</button>
			</div>
		</div>
	</div>
</form>

<div class="container">
	<h3>قائمة الدول</h3>
	<div class="row">
		@foreach($countries as $key => $country)
		<div class="col-md-12">
			({{$key+1}}) <a href="{{route('admin.places.state_create',['country'=>$country->id])}}">{{$country->ar_name}}</a>
		</div>
		@endforeach
	</div>
</div>
@endsection