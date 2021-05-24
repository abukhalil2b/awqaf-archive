@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
    	<div class="col-md-12">
			<div>
				<a href="{{route('folder.create')}}"><span class="plus-icon">+</span> حافظة جديدة</a>
			</div>
			@foreach($folders as $folder)
			<a href="{{route('document.index',['folder'=>$folder])}}">
				<div class="alert alert-info mt-2">
					{{$folder->cate_num}}
					||{{$folder->branch_name}}
					||{{$folder->serial}}
					|| عدد الوثائق: {{$folder->documents->count()}}
				</div>
				</a>
			@endforeach
		</div>
    </div>
</div>
@endsection

