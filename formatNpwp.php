<?php 

$con = mysqli_connect('localhost', 'root', '', 'employe');

        if (isset($_POST['simpan'])) {
    
          $npwp = $_POST['npwp'];

          
            $sql = "INSERT INTO testnpwp values('$npwp')";
            $query = mysqli_query($con, $sql);


            if ($query) {
              echo "<script>alert('Data berhasil ditambahkan!');window.location.href='formatNpwp.php'</script>";
            } else {
              echo "Error : " . mysqli_error($con);
            }
          }


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <div>Format NPWP :</div>
        <input type="text" name="npwp" id="npwp" maxlength="20">
        <button type="submit" class="btn btn-success mb-5 float-right" name="simpan">Submit</button>
        </div>

    </form>
    <div>
        <caption>Result:</caption>
                <table>
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                  </tr>
                  </thead>
                  <tbody>
              <?php 

                $sql = "SELECT * FROM testnpwp";
                $query = mysqli_query($con, $sql);
                $no = 0;
                while ($row = mysqli_fetch_assoc($query)):
                  $no++;
               ?>
               <tr>
                <td width="5%"><?php echo $no ?>.</td>
                <td><?= $row['npwp'] ?></td>
               </tr>
              <?php endwhile; ?>
            </tbody>
                </table>
              </div>
    <script>
        const NPWP = document.getElementById("npwp")

        NPWP.oninput = (e) => {
            e.target.value = autoFormatNPWP(e.target.value);
        }

        function autoFormatNPWP(NPWPString) {
            try {
                var cleaned = ("" + NPWPString).replace(/\D/g, "");
                var match = cleaned.match(/(\d{0,2})?(\d{0,3})?(\d{0,3})?(\d{0,1})?(\d{0,3})?(\d{0,3})$/);
                return [      
                        match[1], 
                        match[2] ? ".": "",
                        match[2], 
                        match[3] ? ".": "",
                        match[3],
                        match[4] ? ".": "",
                        match[4],
                        match[5] ? "-": "",
                        match[5],
                        match[6] ? ".": "",
                        match[6]].join("")
                
            } catch(err) {
                return "";
            }
        }
    </script>
</body>
</html>