<section class="wrapper scrollable">
	<nav class="user-menu">
		<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
		</a>
	</nav>
	<section class="title-bar">
		<div class="logo">
			<h1><a href="adm-eventos.php"><img src="img/logo.png" alt="" />SisGEv</a></h1>
		</div>
		
		<div class="header-right">
			<div class="profile_details_left">
				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<h5><?php echo $_SESSION['nome_completo']; ?></h5>
								<br>
								<li> <a href="#"><i class="fa fa-cog"></i> Editar perfil</a> </li>
								<li> <a href="sair.php"><i class="fa fa-sign-out"></i> Sair</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<div class="clearfix"> </div>
</section>