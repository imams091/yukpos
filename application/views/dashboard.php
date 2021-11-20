<section class="content-header">
	<h1><?=$title?>
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a><i class="fa fa-dashboard"></i></a></li>
		<li class="active"><?=$title?></li>
	</ol>
</section>

<section class="content">
	<?php if($this->session->userdata('level') == 1) { ?>
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-user-plus"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">User Total</span>
					<span class="info-box-number"><?=$this->fungsi->count_supplier()?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="fa fa-qrcode"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">TTD Total</span>
					<span class="info-box-number"><?=$this->fungsi->count_user()?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-blue"><i class="fa fa-info"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Kategori Total</span>
					<span class="info-box-number"><?=$this->fungsi->count_user()?></span>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</section>

<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/morris.js/morris.css">
<script src="<?=base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/morris.js/morris.min.js"></script>

<script>
Morris.Bar({
    element: 'hero-bar',
    data: [
		<?php foreach($row as $r => $data) {
			echo "{item: '".$data->name."', sold: ".$data->sold."},";
		} ?>
    ],
    xkey: 'item',
    ykeys: ['sold'],
    labels: ['Sold'],
    barRatio: 0.4,
    xLabelAngle: 35,
    hideHover: 'auto'
});
</script>