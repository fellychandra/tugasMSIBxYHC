<!-- Begin Page Content -->
<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">Form Ubah Data monitoring</div>
                    <div class="card-body">
                        <form action="<?= base_url('monitoring/update/'.$monitoring['id'])?>" method="POST">
                            <input type="hidden" name="id" value="<?= $monitoring['id']; ?>">
                            <div class="form-group">
                                <label for="judul">Nama</label>
                                <input type="text" name="judul" value="<?= $monitoring['judul']?>" class="form-control" id="judul" placeholder="Judul">
                            </div>
                        
                            <div class="form-group">
                                <label for="client">Client</label>
                                <input type="text" name="client" value="<?=$monitoring['client']?>" class="form-control" id="client" placeholder="Client">
                            </div>
                            <div class="form-group">
                                <label for="Leader">Project Leader</label>
                                <input type="text" name="proder" value="<?= $monitoring['project_leader']?>" class="form-control" id="proder" placeholder="Project Leader">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_mulai">Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" value="<?= $monitoring['tanggal_mulai']?>" class="form-control" id="tanggal_mulai" placeholder="Tanggal Mulai">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_berakhir">Tahun angkatan</label>
                                <input type="date" name="tanggal_berakhir" value="<?= $monitoring['tanggal_berakhir']?>" class="form-control" id="tanggal_berakhir" placeholder="Tanggal Berakhir">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_berakhir">Progress Pengerjaan</label>
                                <input type="number" name="progress" value="<?= $monitoring['progress']?>" class="form-control" id="progress" placeholder="progress">
                            </div>
                        
                            <a href="<?= base_url('monitoring') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah monitoring</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>