<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.bar.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>
<link type='text/css' href="<?php echo base_url()?>assets/front/css/default.css" rel='Stylesheet' />
<link type='text/css' href="<?php echo base_url().'themes/'.$this->theme.'/css/default.css'?>" rel='Stylesheet' />
<?php if(is_file("desa/css/".$this->theme."/desa-default.css")): ?>
  <link type='text/css' href="<?php echo base_url()?>desa/css/<?php echo $this->theme?>/desa-default.css" rel='Stylesheet' />
<?php endif; ?>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<?php foreach($menu_atas as $data){?>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url()."first/".$data['link']?>"><?php echo $data['nama']?><span class="caret"></span></a>
						<?php if(count($data['submenu']>0)): ?>
							<ul class="dropdown-menu">
								<?php foreach($data['submenu'] as $submenu): ?>
									<li><a href="<?php echo site_url()."first/".$submenu['link']?>"><?php echo $submenu['nama']?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php }?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

