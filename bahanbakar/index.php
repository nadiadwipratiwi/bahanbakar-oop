<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body><center>
    <div class="position-absolute top-50 start-50 translate-middle shadow-lg w-25 p-5 mb-5 bg-body-tertiary rounded fs-5">
    <form action="proses.php" method="POST">
    <table>
        <tr>
            <td >Jenis Bahan Bakar :</td>
        </tr>
        <tr>
            <td>
                <select name="jenis" id="jenis" class="form-select w-auto" required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="Super">Shell Super</option>
                    <option value="Power">Shell V-Power</option>
                    <option value="Diesel">Shell V-Power Diesel</option>
                    <option value="Nitro">Shell V-Power Nitro</option>
                </select>
            </td>
        </tr>
        <tr> 
            <td >Jumlah Liter :</td>
        </tr>
        <tr>
            <td><input type="number" name="jumlah" id="jumlah" class="form-control" required></td>

        </tr>
        <tr>
            <td><button name="btn" type="submit" class="btn btn-primary mt-3">Beli</button></td>
        </tr>    
    </table>
    </form></div>
</center></body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>