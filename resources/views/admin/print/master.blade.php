<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Pengajuan {{ $submission->letter->name }} oleh {{ $submission->user->name }} | {{ config('app.name') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
	<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" id="bootstrap-light" rel="stylesheet" type="text/css" />
	<style type="text/css">
		body {
			background: rgb(204, 204, 204);
		}

		page {
			background: white;
			display: block;
			margin: 0 auto;
		}

		page[size="A4"] {
			width: 21cm;
		}

		@media print {

			body,
			page {
				width: 21cm;
			}
		}
	</style>
</head>

<body>
	<page size="A4">
		<div class="row">
			<div class="col-3">
				<img class="mt-4 ml-5" src="{{ asset(setting('logo')) }}" width="160">
			</div>
			<div class="col-9">
				<h3 class="mt-5 text-center">PEMERINTAH KABUPATEN {{ ucwords(setting('districts')) }}</h3>
				<h3 class="mt-3 text-center">KECAMATAN {{ ucwords(setting('sub-districts')) }}</h3>
				<h3 class="mt-3 text-center">DESA {{ ucwords(setting('village')) }}</h3>
				<p class="mt-3 text-center">Alamat : Jln Raya Bresela, Kode Pos : 80572 , Telp : (0361) 9081598</p>
			</div>
		</div>
		<hr>
		@yield('content')
		<div class="row pl-5 pr-5 mt-5">
			<div class="col-6 ml-auto">
				<p class="text-center h5">Mengetahui</p>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				@if(setting('vh_status') == 'On')
				<p class="text-center h5">@setting('village_head')</p>
				<p class="text-center h6">( Kepala Desa )</p>
				@else
				<p class="text-center h5">@setting('secretary')</p>
				<p class="text-center h6">( Sekretaris )</p>
				@endif
			</div>
		</div>
	</page>
	<script src="{{ URL::asset('assets/libs/jquery/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
	<script type="text/javascript">
		window.print();
	</script>
</body>

</html>