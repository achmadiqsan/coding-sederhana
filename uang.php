<?php 

$con = mysqli_connect('localhost', 'root', '', 'employe');

if (isset($_POST['simpan'])) {
    
          $uang= str_replace(",", ".", $angka1= str_replace(".", "",$_POST['uang']));

          
            $sql = "INSERT INTO testuang values('$uang')";
            $query = mysqli_query($con, $sql);


            if ($query) {
              echo "<script>alert('Data berhasil ditambahkan!');window.location.href='uang.php'</script>";
            } else {
              echo "Error : " . mysqli_error($con);
            }
          }


 ?>
<html>
<head>
    <title>Format Rupiah Dengan Javascript</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
	body {
        font: 17px "open sans", "segoe ui", tahoma;
    }
    .container {
        width: 200px;
        margin: auto;
        margin-top: 15px;
    }
    input {
        padding: 5px 10px;
        font-size: 17px;
        border: 1px solid #CCCCCC;
        color: #5d5d5d;
        text-align: right;
        width: 200px;
        margin-bottom: 10px;
    }
    h3 {
        margin-bottom: 10px;
    }
    div {
        margin-bottom: 5px;
    }
	</style>
</head>
<body>
<div class="container">
    <h3>FORM</h3>
    <form method="POST" action="">
        <div>Tanpa Rupiah:</div>
        <input type="text" name="uang" id="tanpa-rupiah"/>
        <button type="submit" class="btn btn-success mb-5 float-right" name="simpan">Submit</button>
        </div>

    </form>
</body>
<script type="text/javascript">
     /* Tanpa Rupiah */
    var tanpa_rupiah = document.getElementById('tanpa-rupiah');
    tanpa_rupiah.addEventListener('keyup', function(e)
    {
        tanpa_rupiah.value = formatRupiah(this.value);
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
</html>