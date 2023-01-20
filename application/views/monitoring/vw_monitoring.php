                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="clearfix">
                        <div class="float-left">
                            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                        </div>

                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="float-left">
                                <a href="<?= base_url('monitoring/tambah') ?>" class="btn btn-success">Tambah Monitoring</a>

                            </div>
                            <div class="table">
                                <table class="table table-bordered" id="dataTable">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Judul</td>
                                            <td>Project Leader</td>
                                            <td>Client</td>
                                            <td>Tanggal Mulai</td>
                                            <td>Tanggal Berakhir</td>
                                            <td>Progress</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($monitoring as $ka) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $ka['judul']; ?></td>
                                                <td><?= $ka['client']; ?></td>
                                                <td><?= $ka['project_leader']; ?></td>
                                                <td><?= $ka['tanggal_mulai']; ?></td>
                                                <td><?= $ka['tanggal_berakhir']; ?></td>
                                                <td>
                                                    <div class="progress-bar progress-bar-striped" style="width:<?= $ka['progress']; ?>%"><?= $ka['progress']; ?> %</div>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('monitoring/hapus/') . $ka['id']; ?>" class="btn btn-danger">Hapus</a>
                                                    <a href="<?= base_url('monitoring/edit/') . $ka['id']; ?>" class="btn btn-success">Edit</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>