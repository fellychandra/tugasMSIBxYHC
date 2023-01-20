<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Mahasiswa</div>
                <div class="card-body">
                    <h2 class="card-title"><?= $mahasiswa['nama']; ?></h2>
                    <!-- <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6> -->
                    <div class="row">
                        <div class="col-md-2">Prodi</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><?= $mahasiswa['namaprodi']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">Semester</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><?= $mahasiswa['semester']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">Kelas</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><?= $mahasiswa['kelas']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">Tahun Angkatan</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-6"><?= $mahasiswa['tahunangkatan']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-primary">Tutup</a>
                </div>
            </div>
        </div>

    </div>
</div>

</div>