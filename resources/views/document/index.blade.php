@extends('layouts.app')

@section('content')

<div class="content">
	<div class="bar3">
		<h5>بيانات الحافظة</h5>
		<div class="row">
	    	<div class="col-md-4">رقم التصنيف: {{$folder->cate_num}}</div>
			<div class="col-md-4">اسم الفرع: {{$folder->branch_name}}</div>
			<div class="col-md-4">التسلسل: {{$folder->serial}}</div>
			<div class="col-md-4">تاريخ أول وثيقة: {{$folder->date_first_document}}</div>
			<div class="col-md-4">تاريخ آخر وثيقة: {{$folder->date_last_document}}</div>
			<div class="col-md-4">تاريخ غلق الملف: {{$folder->date_closed}}</div>
		</div>
	</div>
</div>

<hr>
<div class="content">
	<a href="{{route('document.create',['folder'=>$folder])}}"><span class="plus-icon">
	+</span> اضف وثيقة في هذه الحافظة</a>
	<hr>
	<div>الوثائق</div>
	@foreach($documents as $document)
		<a href="{{route('document.show',['document'=>$document->id])}}">
			<div class="bar1">
				{{$document->writer_name}} - {{$document->subject}}
			</div>
		</a>
		<hr>
	@endforeach
</div>
@endsection
