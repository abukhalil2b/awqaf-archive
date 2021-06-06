@extends('layouts.app')

@section('content')
<div class="mr-2">
	<a href="{{route('folder.create')}}"><span class="plus-icon">+</span> حافظة جديدة</a>
</div>
<div class="container">
    <div class="row ">
    	<div class="col-md-12">
			
			@foreach($folders as $folder)
				<div class="alert alert-info mt-2 h60">
					<a class="pull-right" href="{{route('document.index',['folder'=>$folder])}}">
						<div class="">
							{{$folder->cate_num}}
							||{{$folder->branch_name}}
							||{{$folder->serial}}
							|| عدد الوثائق: {{$folder->documents->count()}}
						</div>
					</a>
					<a class="pull-left" href="{{route('document.print',['folder'=>$folder])}}">جدول للطباعة</a>
				</div>
			@endforeach
		</div>
    </div>
</div>
@endsection

