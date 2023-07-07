<?php include './controller/getData.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Digitalent</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://github.com/kvnrynfl/Digitalent">Kevin Reynaufal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ms-auto" id="Tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="create-tab" data-bs-toggle="tab" data-bs-target="#create-tab-pane" type="button" role="tab" aria-controls="create-tab-pane" aria-selected="true">Create Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="update-tab" data-bs-toggle="tab" data-bs-target="#update-tab-pane" type="button" role="tab" aria-controls="update-tab-pane" aria-selected="true">Update Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="delete-tab" data-bs-toggle="tab" data-bs-target="#delete-tab-pane" type="button" role="tab" aria-controls="delete-tab-pane" aria-selected="true">Delete Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./JavaScriptLogicTest/">JS Logic Test</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="tab-content" id="TabContent">
        <!-- content for home -->
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="container">
                <table id="TabelHome" class="table table-striped table-bordered table-responsive table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Usia</th>
                            <th scope="col">Tanggal Lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $result = getDataUser();
                        $sn = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        $today = date_create();
                        $birthday = date_create($row['tanggal_lahir']);
                        $diff = date_diff($birthday, $today);
                        $usia = $diff->y;
                        
                        ?>
                        <tr>
                            <td scope="row"><?= $sn++; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['jenis_kelamin']; ?></td>
                            <td><?= $usia ?></td>
                            <td><?= $row['tanggal_lahir']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- content for create -->
        <div class="tab-pane fade" id="create-tab-pane" role="tabpanel" aria-labelledby="create-tab" tabindex="0">
            <div class="container">
                <form action="./controller/postData.php" method="POST">
                    <div class="input-group mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="" required>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="alamat" id="alamat" rows="2" required></textarea>
                        </div>
                    </div>

                    <fieldset class="input-group mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="lakilaki" value="Laki-Laki" checked>
                                <label class="form-check-label" for="lakilaki">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="lainnya" value="Lainnya">
                                <label class="form-check-label" for="lainnya">Lainnya</label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="input-group mb-3">
                        <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" required>
                        </div>
                    </div>

                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-primary" name="createnewdata">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- content for update -->
        <div class="tab-pane fade" id="update-tab-pane" role="tabpanel" aria-labelledby="update-tab" tabindex="0">

        </div>

        <!-- content for delete -->
        <div class="tab-pane fade" id="delete-tab-pane" role="tabpanel" aria-labelledby="delete-tab" tabindex="0">

        </div>
    </div>

    <!-- jQuery, DataTables, PopperJS, BootstrapJS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Optional JavaScript -->
    <script src="script.js"></script>
</body>

</html>
