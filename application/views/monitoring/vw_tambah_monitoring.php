<!-- Begin Page Content -->
<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">Form Tambah Data Monitoring</div>
                    <div class="card-body">
                        <form action="<?= base_url('monitoring/insert')?>" method="POST">

                            <div class="form-group">
                                <label for="judul">Nama</label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul">
                            </div>
                        
                            <div class="form-group">
                                <label for="client">Client</label>
                                <input type="text" name="client" class="form-control" id="client" placeholder="Client">
                            </div>
                            <div class="form-group">
                                <label for="Leader">Project Leader</label>
                                <input type="text" name="proder" class="form-control" id="proder" placeholder="Project Leader">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_mulai">Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" class="form-control" id="tanggal_mulai" placeholder="Tanggal Mulai">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_berakhir">Tanggal Berakhir</label>
                                <input type="date" name="tanggal_berakhir" class="form-control" id="tanggal_berakhir" placeholder="Tanggal Berakhir">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_berakhir">Progress Pengerjaan</label>
                                <input type="number" name="progress" class="form-control" id="progress" placeholder="progress">
                            </div>

                            <a href="<?= base_url('monitoring') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Monitoring</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>