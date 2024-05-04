<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>{{ config('app.name') }}</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /><link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
<script src="assets/plugins/global/plugins.bundle.js"></script>


	</head>

	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">

				@include('painel.layout.menu')
				@include('painel.layout.topo')