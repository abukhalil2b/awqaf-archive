@extends('layouts.app')

@section('content')
<form action="{{route('folder.store')}}" method="post">
 @csrf
<div class="container">
    <div class="row">
        <div class="col-md-4">
    		<div class="form-group">
                رقم التصنيف
                <input name="cate_num" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                اسم الفرع
                <input name="branch_name" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                التسلسل
                <input name="serial" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                تاريخ أول وثيقة
                <input name="date_first_document" class="form-control" type="date">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                تاريخ آخر وثيقة
                <input name="date_last_document" class="form-control" type="date">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                تاريخ إغلاق الملف
                <input name="date_closed" class="form-control" type="date">
            </div>
        </div>
        <div class="col-md-12">
    		<div class="form-group">
    			<button class="btn btn-primary btn-block" type="submit">حفظ</button>
    		</div>
        </div>
    </div>
</div>
</form>
@endsection
