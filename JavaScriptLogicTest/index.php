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
            <a class="navbar-brand" href="https://github.com/kvnrynfl/Digitalent">JavaScript Logic Test</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ms-auto" id="Tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="login-tab-pane" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="formloop-tab" data-bs-toggle="tab" data-bs-target="#formloop-tab-pane" type="button" role="tab" aria-controls="formloop-tab-pane" aria-selected="true">FormLoop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kalkulator" data-bs-toggle="tab" data-bs-target="#kalkulator-tab-pane" type="button" role="tab" aria-controls="kalkulator-tab-pane" aria-selected="true">Kalkulator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../">BackToHome</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="tab-content" id="TabContent">
        <!-- content for login -->
        <div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab" tabindex="0">
            <div class="container">
                <!-- ALERT -->
                <div class="alert alert-success" id="success-notification">
                    Login berhasil
                    <a href="#" class="alert-close-btn" onclick="this.parentNode.style.display='none'">&times;</a>
                </div>
                <div class="alert alert-danger" id="error-notification">
                    Email atau password salah
                    <a href="#" class="alert-close-btn" onclick="this.parentNode.style.display='none'">&times;</a>
                </div>
                <!-- FORM -->
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="*****" required>
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn-primary" onclick="validateLogin()">Submit</button>
                </div>
                <!-- NOTE -->
                <br><br><br>
                <div class="alert alert-note">
                    kevinreynaufal@gmail.com<br>test12345
                </div>
                <br>
                <div class="alert alert-note">
                    Code : https://github.com/kvnrynfl/Digitalent
                </div>
            </div>
        </div>

        <!-- content for formloop -->
        <div class="tab-pane fade" id="formloop-tab-pane" role="tabpanel" aria-labelledby="formloop-tab" tabindex="0">
            <div class="container">
                <!-- FORM -->
                <div class="input-group mb-3">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="" required min="0">
                    </div>
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn-primary" onclick="formLoop()">Submit</button>
                </div>
                <!-- OUTPUT -->
                <br><br>
                <div class="alert alert-note" id="output"></div>
            </div>
        </div>

        <!--  content for calculator -->
        <div class="tab-pane fade" id="kalkulator-tab-pane" role="tabpanel" aria-labelledby="kalkulator-tab" tabindex="0">
            <div class="container">
                <!-- ALERT -->
                <div class="alert alert-danger" id="warning-alert">
                    Message
                </div>
                <!-- FORM -->
                <div class="row mb-3">
                    <label for="input-pertama" class="col-sm-4 col-form-label">Input Pertama</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control text-center" name="input-pertama" id="input-pertama" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input-kedua" class="col-sm-4 col-form-label">Input Kedua</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control text-center" name="input-kedua" id="input-kedua" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input-option" class="col-sm-4 col-form-label">Option</label>
                    <div class="col-sm-8">
                        <select id="input-option" class="form-select text-center" name="input-option">
                            <option selected>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn-primary" onclick="validateKalkulator()">Submit</button>
                </div>
                <!-- OUTPUT -->
                <br><br>
                <div class="row mb-3 div-kalkulator" id="div-kalkulator">
                    <label for="output-kalkulator" class="col-sm-4 col-form-label">Hasilnya Adalah</label>
                    <div class="col-sm-8">
                        <div class="alert alert-note p-md-2" id="output-kalkulator"></div>
                    </div>
                </div>
            </div>
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