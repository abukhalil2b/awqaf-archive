@extends('layouts.app')

@section('content')
<div class="container">
	نتائج البحث: {{count($documents)}}
    <div class="row">
    	<div class="col-md-12">
            <hr>
    		@foreach($documents as $document)
    			<a href="{{route('document.show',['document'=>$document->id])}}">
    				<h5><span class="text-primary">الفرع: </span>{{$document->subject}}</h5>
    				<h5><span class="text-primary"> التسلسل في الحافظة: </span>{{$document->folder->serial}}</h5>
    			</a>
                <hr>
    		@endforeach
    	</div>
    </div>
</div>
@endsection
