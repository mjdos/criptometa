@include('painel.layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
	<div id="kt_content_container" class="container-xxl">

		<div class="row g-5 g-xl-8" style="padding-top: 0px important!;">


				<div class="col-xl-2">
					<div class="card card-xl-stretch mb-xl-5">
						<div class="card-header border-0 py-3" style="min-height: 0px !important;">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-0">Projetos</span>
							</h3>
						</div>
						<div class="card-body d-flex flex-column">
							<div class="pt-0" align="center">
								<img src="{{ url('assets/img/titulo.png') }}" class="h-70px mb-2">
								<br>
								<a href="{{ route('projeto_gestao.index')}}" class="btn btn-primary w-80 py-3">Acessar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-2">
					<div class="card card-xl-stretch mb-xl-5">
						<div class="card-header border-0 py-3" style="min-height: 0px !important;">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-0">Usuários</span>
							</h3>
						</div>
						<div class="card-body d-flex flex-column">
							<div class="pt-0" align="center">
								<img src="{{ url('assets/img/users.png') }}" class="h-70px mb-2">
								<br>
								<a href="{{ route('usuario_gestao.index')}}" class="btn btn-primary w-80 py-3">Acessar</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2">
					<div class="card card-xl-stretch mb-xl-5">
						<div class="card-header border-0 py-3" style="min-height: 0px !important;">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-0">Auditoria</span>
							</h3>
						</div>
						<div class="card-body d-flex flex-column">
							<div class="pt-0" align="center">
								<img src="{{ url('assets/img/tra.png') }}" class="h-70px mb-2">
								<br>
								<a href="{{ route('auditoria_gestao.index')}}" class="btn btn-primary w-80 py-3">Acessar</a>
							</div>

						</div>
					</div>
				</div>
		</div>
	</div>
</div>

@include('painel.layout.footer')