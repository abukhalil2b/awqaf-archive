<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<style>
		*{
			text-align: right;
			width: 80%;
			margin: auto;
		}
	</style>
</head>
<body>
	<table class="table table-bordered">
		@foreach($documents as $document)
		<tr>
			<td>{{$document->subject}}</td>
			<td>{{$document->sender_naem}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>