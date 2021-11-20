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
            <h3 class="box-title">Data TTD</h3>
            <div class="pull-right">
                <a href="<?=site_url('supplier/add')?>" class="btn btn-flat btn-primary">
                    <i class="fa fa-plus"></i> Tambah TTD
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table id="table1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Penandatangan</th>
                        <th>Keterangan</th>
                        <th>Semester</th>
                        <th>Tahun</th>
                        <th>Action</th>
                        <th>QR Code</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row as $r => $data) { ?>
                        <tr>
                            <td width="35px"><?=$no++?>.</td>
                         
                            <td><?=$data->nim?></td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->jurusan?></td>
                            <td><?=$data->kategori?></td>
                            <td><?=$data->tanggal?></td>
                            <td><?=$data->penandatangan?></td>
                            <td><?=$data->ket?></td>
                            <td><?=$data->semester?></td>
                            <td><?=$data->tahun?></td>
                            <td class="text-center" width="160px">
                                <a href="<?=site_url('supplier/edit/'.$data->id_ttd)?>" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                                <a href="<?=site_url('supplier/del/'.$data->id_ttd )?>" onclick="return confirm('Apakah Anda yakin?')"  class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                                <td><a href="<?=site_url('supplier/qrcode/'.$data->id_ttd)?>" class="btn btn-xs btn-default">
                                    Generate <i class="fa fa-qrcode"></i>
                                </a></td>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>