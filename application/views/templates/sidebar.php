<!-- Active Nav -->
<?php
	$tempId 	= $this->uri->segment(3);
	$currentUrl = current_url();
	if($currentUrl == base_url('dashboard')){
		$active = "active";
	}else if($currentUrl == base_url('template/main')){
		$active = "active";
	}else if($currentUrl == base_url('template/create')){
		$active = "active";
	}else if($currentUrl == base_url('template/lists')){
		$active = "active";
	}else if($currentUrl == base_url('template/add_device/'.$tempId)){
		$active = "active";
	}

?>
<!-- End Active Nav -->
<!-- sidebar -->
<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?= base_url(''); ?>">
                <b>IT Asset Pro</b>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="<?= base_url('dashboard'); ?>" class="dropdown-toggle no-arrow <?php if($currentUrl == base_url('dashboard')){echo $active; }?>">
							<span class="micon dw dw-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<!-- Check จาก DB ว่ามีการสร้าง Template ของอะไรเอาไว้บ้าง จากนั้นเอารายการ Template Type นั้นมาแสดงเป็น Menu -->
					<?=loadmenu()?>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">						
							<span class="micon icon-copy dw dw-notepad-2"></span><span class="mtext">Setting</span>
						</a>
						<ul class="submenu">
							<!-- <li><a href="<?= base_url('template/main'); ?>" class="<?php if($currentUrl == base_url('template/main')){echo $active; }?>">Template Setup</a></li>
							<li><a href="<?= base_url('template/lists'); ?>" class="<?php if($currentUrl == base_url('template/lists')){echo $active; }?>">Template List</a></li>
							<li><a href="<?= base_url('template/create'); ?>" class="<?php if($currentUrl == base_url('template/create')){echo $active; }?>">Create template</a></li> -->
							<li><a href="<?=base_url('template/manageobj/')?>">Templates</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
<!-- End sidebar -->