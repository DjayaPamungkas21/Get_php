
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="barang1" id="inlineRadio1" value="Televisi">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barang1" id="inlineRadio2" value="Kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barang1" id="inlineRadio3" value="Mesin cuci">
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="number" name="total" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for=""></label>
                    <input type="date" name="date" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select name="pilih" class="form-select form-control" class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="Tiki">Tiki</option>
                    <option value="Si Cepat">Si Cepat</option>
                    <option value="Pos">Pos</option>
                    <option value="Grab">Grab</option>
                    <option value="Gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="number" name="biaya" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="number" name="jaminan" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="proses" class="btn btn-success btn-sm btn-block">

            </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>

                <?php
                 $nama = $_POST['nama'];
                 $barang1 = $_POST['barang1'];
                 $total = $_POST['total'];
                 $tanggal = $_POST['date'];
                 $pilihan = $_POST['pilih'];
                 $alamat = $_POST['alamat'];
                 $biaya = $_POST['biaya'];
                 $jaminan = $_POST['jaminan'];
                 $proses = $_POST['proses'];

                 if ($barang1 == 'Televisi'){
                     $price = 3000000;
                 }elseif ($barang1 == 'Kulkas'){
                     $price = 6000000;
                 }elseif ($barang1 == 'Mesin cuci'){
                    $price = 4000000;
                 }

                 $total_price = ($total * $price) + $biaya + $jaminan;

                ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?php echo $nama ?></li>
                    <li class="list-group-item">Item : <?php echo $barang1 ?></li>
                    <li class="list-group-item">Total Item : <?php echo $total ?><?php ?></li>
                    <li class="list-group-item">Date Shipping :  <?php echo $tanggal ?></li>
                    <li class="list-group-item">Courier Type : <?php echo $pilihan ?></li>
                    <li class="list-group-item">Shipping Address : <?php echo $alamat ?></li>
                    <li class="list-group-item">Courier Cost : <?php echo $biaya ?></li>
                    <li class="list-group-item">Assurance Cost :  <?php echo $jaminan ?></li>
                    <li class="list-group-item">Total Cost : <?php echo $total_price ?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>
