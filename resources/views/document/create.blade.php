@extends('layouts.app')

@section('content')


<form action="{{route('document.store')}}" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="row">
		@csrf
		<div class="col-md-4">
            رقم الوثيقة في الحافظة

            <input  name="document_number" class="form-control">

		</div>
		<div class="col-md-4">
            موضوع الوثيقة

            <input  name="subject" class="form-control">

		</div>
        <div class="col-md-4">
            نوع المرسل
        <select name="sender_type" class="form-control">
            <option value="person">شخص</option>
            <option value="ministry">مؤسسة أو وزارة</option>
        </select>

        </div>
		<div class="col-md-3">
            اسم المرسل

            <input  name="sender_name" class="form-control">

		</div>
		<div class="col-md-3">
            الدولة
            <select name="sender_country" class="form-control js-example-basic-single">
                <option></option>
                @foreach($countries as $county)
                <option @if($county->en_name=='Oman') selected @endif value="{{$county->id}}">{{$county->ar_name}}</option>
                @endforeach
            </select>
		</div>
        <div class="col-md-3">
            المحافظة

            <select name="sender_state" class="form-control mt-1">
                @foreach($states as $state)
                <option value="{{$state->id}}"> {{$state->ar_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            الولاية

            <select name="sender_village" class="form-control mt-1">
                @foreach($villages as $village)
                <option value="{{$village->id}}"> {{$village->ar_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            اسم المرسل إليه
            <input  name="receiver_name" class="form-control">

        </div>
        <div class="col-md-3">
            الدولة
            <select name="receiver_country" class="form-control js-example-basic-single">
                <option></option>
                @foreach($countries as $county)
                <option @if($county->ar_name=='سلطنة عمان') selected @endif value="{{$county->id}}">{{$county->ar_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            المحافظة

            <select name="receiver_state" class="form-control mt-1">
                @foreach($states as $state)
                <option value="{{$state->id}}"> {{$state->ar_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            الولاية

            <select name="receiver_village" class="form-control mt-1">
                @foreach($villages as $village)
                <option value="{{$village->id}}"> {{$village->ar_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            تاريخ الوثيقة

            <input  name="document_date" class="form-control" type="date">

        </div>
        <div class="col-md-4">
            تاريخ الرد
            <input  name="replay_date" class="form-control" type="date">

        </div>

        <div class="col-md-4">
            الملف
            <input  name="url" class="form-control" type="file">

        </div>
        

		<div class="col-md-12 mt-2">

            <input type="hidden" name="folder_id" value="{{$folder->id}}">

			<button class="btn btn-primary btn-block" type="submit">حفظ</button>
		</div>
    </div>
</div>
</form>

@endsection

@section('script')

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

@endsection
