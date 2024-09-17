<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class="position-absolute top-50 start-50 translate-middle shadow-lg p-5 mb-5 bg-body-tertiary rounded">
<body>
    <h1 class="text-primary">Bukti Pembayaran</h1>
</body>

<?php
class Shell {
    public $jumlah;
    public $jenis;
    public $Super,
            $Power,
            $Diesel,
            $Nitro;
    public $ppn;

    public function __construct() {
        $this->ppn = 0.1;
    }

    public function setHarga($type1, $type2, $type3, $type4) {
        $this->Super = $type1;
        $this->Power = $type2;
        $this->Diesel = $type3;
        $this->Nitro = $type4;
    }

    public function getHarga() {
        $data['Super'] = $this->Super;
        $data['Power'] = $this->Power;
        $data['Diesel'] = $this->Diesel;
        $data['Nitro'] = $this->Nitro;
        return $data;
    }
}

class Beli extends Shell {
    public function pembelian() {
        $harga = $this->getHarga();
        $hargaBeli = $this->jumlah * $harga[$this->jenis];
        $hargaPPN = $hargaBeli * $this->ppn;
        $hargaBayar = $hargaBeli + $hargaPPN;

        switch ($this->jenis) {
            case 'Super':
                $bahanBakar = 'Shell Super';
                break;
            case 'Power':
                $bahanBakar = 'Shell V-Power';
                break;
            case 'Diesel':
                $bahanBakar = 'Shell V-Power Diesel';
                break;
            case 'Nitro':
                $bahanBakar = 'Shell V-Power Nitro';
                break;
            default:
                $bahanBakar = $this->jenis;
                break;
        }

        echo "<center>";
        echo "Jenis bahan bakar : " . $bahanBakar . "<br>";
        echo "Jumlah liter : " . $this->jumlah . "<br>";
        echo "Harga per liter : " . number_format($harga[$this->jenis], 0, "", ".") . "<br>";
        echo "Harga dasar : " . number_format($hargaBeli, 0, "", ".") . "<br>";
        echo "PPN (10%) : " . number_format($hargaPPN, 0, "", ".") . "<br><hr>";
        echo "Total yang harus dibayar : " . number_format($hargaBayar, 0, "", ".") . "<br>";
        echo "</center>";
    }
}

$proses = new Beli(); 
$proses->setHarga(15000, 16000, 18000, 16500);

if (isset($_POST['btn'])) {
    $proses->jenis = $_POST['jenis'];
    $proses->jumlah = $_POST['jumlah'];

    $proses->pembelian();
}
?>

<form action="index.php" method="post">
    <button name="btn" id="btn" type="submit" class="btn btn-primary mt-3">Kembali</button>
</form>
</div></html>

