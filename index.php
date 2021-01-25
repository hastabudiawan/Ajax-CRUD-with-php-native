<!DOCTYPE html>
<html>
    <head>
        <title>Ajax CRUD with php native</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
        <div class="container">
            <h2 align=center>Ajax CRUD with php native</h2>
            <div class="container" id="contentData"></div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>        
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                //load data mahasiswa saat aplikasi dijalankan 
                loadData();
                //Load form add
                $("#contentData").on("click", "#addButton", function() {
                    $.ajax({
                        url: 'form-add.php',
                        type: 'get',
                        success: function(data) {
                            $('#contentData').html(data);
                        }
                    });
                });
                //Load form edit dengan parameter IdMhsw
                $("#contentData").on("click", "#EditButton", function() {
                    var IdMhsw = $(this).attr("value");
                    $.ajax({
                        url: 'form-edit.php',
                        type: 'get',
                        data: {
                            IdMhsw: IdMhsw
                        },
                        success: function(data) {
                            $('#contentData').html(data);
                        }
                    });
                });
                //button batal
                $("#contentData").on("click", "#cancelButton", function() {
                    loadData();
                });
                //simpan data mahasiswa
                $("#contentData").on("submit", "#formAdd", function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: 'service.php?action=save',
                        type: 'post',
                        data: $(this).serialize(),
                        success: function(data) {
                            alert(data);
                            loadData();
                        }
                    });
                });
                //edit data mahasiswa
                $("#contentData").on("submit", "#formEdit", function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: 'service.php?action=edit',
                        type: 'post',
                        data: $(this).serialize(),
                        success: function(data) {
                            alert(data);
                            loadData();
                        }
                    });
                });
                //hapus data mahasiswa berdasarkan IdMhsw
                $("#contentData").on("click", "#DeleteButton", function() {
                    var IdMhsw = $(this).attr("value");
                    $.ajax({
                        url: 'service.php?action=delete',
                        type: 'post',
                        data: {
                            IdMhsw: IdMhsw
                        },
                        success: function(data) {
                            alert(data);
                            loadData();
                        }
                    });
                });
            })
            function loadData() {
                $.ajax({
                    url: 'data-mahasiswa.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            }
            //Data Tables
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>    
    </body>
</html>