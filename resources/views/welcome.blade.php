@extends('layout.main')
{{-- @yield('title', 'default') --}}
@section('content')
	<main id="parsinta">
		<navigasi></navigasi>
		<router-view></router-view>
	</main>
@endsection