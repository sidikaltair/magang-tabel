<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

    <title><?= $title; ?></title>

</head>


<body>

    <div class="jumbotron bg-info text-white" style=" height: 5px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>
                            <?= $jumbo; ?>

                        </h3>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="navbar-nav" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Supplier</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" style="align-content: center;">
                                    <a class="dropdown-item" href="/Supplier/tinta">Tinta</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/Supplier/Kertas">Kertas</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/Supplier/Plastik">Plastik</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/Supplier/Lem">Lem</a>

                                </div>
                            </div>

                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('Client') ?>">Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('home/produk') ?>">produk</a>
                            </li>

                            <ul class="position-relative">

                                <button type="button" class=" position- absolute bottom-0 end-0 btn btn-danger">Logout</button>
                            </ul>

                    </div>
                </div>
            </nav>
        </div>
</body>

<?= $this->renderSection('content'); ?>


<!-- <footer>
    <div class="container text-center">Copyright &copy <?= Date('Y') ?> PT Nusa indah Utama</div>
</footer> -->

<!-- Jquery dan Bootsrap JS -->
<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    $.noConflict();
    $(document).ready(function() {
        $('#table').DataTable({

            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

</body>

</html>