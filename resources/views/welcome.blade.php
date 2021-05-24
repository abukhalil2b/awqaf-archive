@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row ">
    	<div class="col-md-12">
			<a href="{{route('folder.index')}}" class="btn btn-outline-primary">
				<b>الحافظات</b>
			</a>
			<a href="{{route('admin.index')}}" class="btn btn-outline-primary">
				<b>إدارة</b>
			</a>
		</div>
    </div>
    <hr>
    <h4 class="text-primary">البحث في الوثائق</h4>
    <form action="{{route('search')}}" method="post">
    	@csrf
	    <div class="row">
	    	<div class="col-md-4">
	    		موضوع الوثيقة
				<input class="form-control mt-1" name="subject">
			</div>
			<div class="col-md-4">
				اسم المرسل
				<input class="form-control mt-1" name="sender_name">
			</div>
			<div class="col-md-4">
				اسم المرسل إليه
				<input class="form-control mt-1" name="receiver_name">
			</div>
			<div class="col-md-4">
				دولة المرسل إليه
				<select name="receiver_country" class="form-control mt-1">
					@foreach($countries as $country)
					<option value="{{$country->id}}"> {{$country->ar_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				المحافظة
				<select name="sender_state" class="form-control mt-1">
					@foreach($states as $state)
					<option value="{{$state->id}}"> {{$state->ar_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				تاريخ الوثيقة
				<input type="date" class="form-control mt-1" name="document_date">
			</div>

	    </div>
	    <div class="row mt-2">
	    	<div class="col-md-12">
	    		<button class="btn btn-primary btn-block" type="submit"><b>بحث</b></button>
	    	</div>
	    </div>
    </form>
</div>
@endsection

