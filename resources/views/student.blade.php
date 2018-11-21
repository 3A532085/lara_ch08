@extends('layouts.master')
@section('title','詳細資料')
@section('content')


	<div class="page-header">

		<h1>詳細資料</h1>

	</div>

	<div class="row">
		<p>
			信箱：{{ $student->user->email }}

		</p>

		<p>
			學號：{{ $student->no }}

		</p>

		<p>
			姓名：{{ $student->user->name }}
		</p>

		<p>
			電話：{{ $student->tel }}
		</p>

		<p>
			國文：{{ $student->score->chinese }}
		</p>

		<p>
			英文：{{$student->score->english }}
		</p>

		<p>
			數學：{{$student->score->math }}
		</p>


    </div>

@stop