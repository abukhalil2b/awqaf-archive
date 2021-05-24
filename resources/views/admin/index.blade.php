@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="{{route('admin.places.country_create')}}" class="btn btn-outline-primary">
				<b>اضافة البلدان</b>
			</a>
		</div>
	</div>
</div>
@endsection