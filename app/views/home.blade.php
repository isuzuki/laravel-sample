@extends('layouts.default')

@section('content')
<p>ホーム</p>
<input id="register" type="button" value="登録">
<input id="update" type="button" value="更新">
<input id="delete" type="button" value="削除">
@stop

@section('append_js')
<script>
$(function() {
	$.ajax({
		type: 'GET',
		url: '/api/artists/',
		dataType: 'json',
		success: function(data) {
			console.log(data);
		}
	});

	$('#register').on('click', function() {
		$.ajax({
			type: 'POST',
			url: '/api/artists',
			dataType: 'json',
			data: 'name=piyo',
			success: function(data) {
				console.log(data);
			}
		});
	});

	$('#update').on('click', function() {
		$.ajax({
			type: 'PUT',
			url: '/api/artists/8',
			dataType: 'json',
			data: 'name=fuga',
			success: function(data) {
				console.log(data);
			}
		});
	});

	$('#delete').on('click', function() {
		$.ajax({
			type: 'DELETE',
			url: '/api/artists/5',
			success: function(data) {
				console.log(data);
			}
		});
	});
});
</script>
@stop
