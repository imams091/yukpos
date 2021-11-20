<section class="content-header">
    <h1><?=ucwords($title)?>
        <small>Data Tanda Tangan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i></a></li>
        <li class="active"><?=ucwords($title)?></li>
    </ol>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?=ucfirst($page)?> Sfdsr</h3>
			<div class="pull-right">
				<a href="<?=site_url('supplier')?>" class="btn btn-flat btn-warning btn-sm"><i class="fa fa-undo"></i> Back</a>
			</div>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-md-9 col-md-offset-2">
					<form action="<?=site_url('supplier/process')?>" method="post" autocomplete="off">
					<div class="row form-group">
                        <div class="col-md-6">
                            <div class="mb-6">
                                <label for="">NIM</label>
                                <input type="text" name="nim" id="nim" class="form-control" placeholder="...">
                            </div>
                    	</div>
                        <div class="col-md-6">
                            <div class="mb-6">
                          	    <label for="">Tanggal</label>
                     	        <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="...">
                          	</div>
                        </div>
                    </div>
					<div class="row form-group">
                        <div class="col-md-6">
                            <div class="mb-6">
                                <label for="">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="...">
                            </div>
                    	</div>
                        <div class="col-md-6">
                            <div class="mb-6">
                          	    <label for="">Penandatangan</label>
                     	        <input type="text" name="penandatangan" id="penandatangan" class="form-control" placeholder="...">
                          	</div>
                        </div>
                    </div>
					<div class="row form-group">
                        <div class="col-md-6">
                            <div class="mb-6">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="...">
                            </div>
                    	</div>
                        <div class="col-md-6">
                            <div class="mb-6">
                          	    <label for="">Keterangan</label>
                     	        <input type="text" name="ket" id="ket" class="form-control" placeholder="...">
                          	</div>
                        </div>
						
                    </div>
					<div class="row form-group">
                        <div class="col-md-6">
                            <div class="mb-6">
                                <label for="">Kategori</label>
								<select class="form-control" name="kategori" id="kategori" placeholder="...">
									<option>...</option>
									<option>laporan multimedia</option>
									<option>laporan embedded</option>
									<option>4</option>
									<option>5</option>
								</select>
                            </div>
                    	</div>
                        <div class="col-md-6">
                            <div class="mb-6">
                          	    <label for="">Semester</label>
								  <select class="form-control" name="semester" id="semester" placeholder="...">
									<option>...</option>
									<option>Genap</option>
									<option>Ganjil</option>
								
								</select>
                          	</div>

							  <div class="mb-6">
                          	    <label for="">Tahun</label>
								  <select class="form-control" name="tahun" id="tahun" placeholder="...">
									<option>...</option>
									<option>2019</option>
									<option>2020</option>
									<option>2021</option>
									<option>2022</option>
									<option>2023</option>
									<option>2024</option>
								
								</select>
                          	</div>
                        </div>

						

                    </div>
						<div class="form-group pull-right">
							<button type="submit" name="<?=$page?>" class="btn btn-flat btn-success"><i class="fa fa-paper-plane"></i> Save</button> 
							<button type="reset" class="btn btn-flat">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>