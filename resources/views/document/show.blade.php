@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
		<div class="col-md-6">
            رقم الوثيقة في الحافظة

            <span class="text-secondary">{{$document->document_number}}</span>
		</div>
		<div class="col-md-6">
            موضوع الوثيقة

            <span class="text-secondary">{{$document->subject}}</span>
		</div>
		<div class="col-md-4">
            اسم المرسل

            <span class="text-secondary">{{$document->writer_name}}</span>
		</div>
		<div class="col-md-4">
            الدولة

            <span class="text-secondary">{{$document->writer_country}}</span>
		</div>
        <div class="col-md-4">
            المحافظة

            <span class="text-secondary">{{$document->writer_state}}</span>
        </div>
        <div class="col-md-4">
            الولاية

            <span class="text-secondary">{{$document->writer_village}}</span>
        </div>
        <div class="col-md-4">
            اسم المرسل إليه
            <span class="text-secondary">{{$document->receiver_name}}</span>
        </div>
        <div class="col-md-4">
            الدولة

            <span class="text-secondary">{{$document->receiver_country}}</span>
        </div>
        <div class="col-md-4">
            المحافظة
            <span class="text-secondary">{{$document->receiver_state}}</span>
        </div>
        <div class="col-md-4">
            الولاية
            <span class="text-secondary">{{$document->receiver_village}}</span>
        </div>
        <div class="col-md-4">
            تاريخ الوثيقة

            <span class="text-secondary">{{$document->document_date}}</span>
        </div>
        <div class="col-md-4">
            تاريخ الرد
            <span class="text-secondary">{{$document->replay_date}}</span>
        </div>
        <div class="col-md-4">
            الملف
            <a href="{{asset('storage/'.$document->url)}}">تنزيل</a>
        </div>

    </div>


@endsection

