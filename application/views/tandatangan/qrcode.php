<section class="content-header">
    <h1>TTD
        <small>QR Code</small>
    </h1>
    <ol class="breadcrumb">
		<li><a><i class="fa fa-dashboard"></i></a></li>
		<li><a>Data TTD</a></li>
        <li class="active">QR Code</li>
    </ol>
</section>

<section class="content">

    <div class="box">
		<div class="box-header">
			<h3 class="box-title">QRcode Generator <i class="fa fa-qrcode"></i></h3>
		</div>
		<div class="box-body">
			<?php
				$qrCode = new \Endroid\QrCode\QrCode('https://yukpos/tandatangan/qrcode/'.$row->id_ttd);
				$qrCode->writeFile('upload/qrcode/ttd-'.$row->id_ttd.'.png');
			?>
			<img src="<?=base_url('upload/qrcode/ttd-'.$row->id_ttd.'.png')?>">
		</div>
	</div>
</section>