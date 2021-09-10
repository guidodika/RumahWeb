<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tes Pemograman - Guido Dika</title>

    <style type='text/css'>
        body {
            background-image: url("C:/xampp/htdocs/rumahweb/logorumahweb.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: arial;
            font-size: 12pt;
        }

        fieldset {
            font-size: 12px;
            padding: 10px;
            width: 250px;
            line-height: 1.8;
        }

        label:hover {
            cursor: hand;
        }
    </style>

</head>

<body>
    <center>
        <h1>TES PROGRAMMER RUMAHWEB</h1>

        <form action="proses.php" method="post">
            <fieldset>
                <legend>Registrasi</legend>
                <p>
                    <label for="email">Email : </label>
                    <input type="email" name="email" placeholder="alamat email anda" required />
                </p>

                <p>
                    <label for="password">Password : </label>
                    <input type="password" name="password" pattern="(?=.*\d)(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{12,}" title="Password setidaknya terdapat angka,
            huruf kapital, huruf non kapital, minimal terdiri dari 12 karakter
            dan minimal mengandung 2 karakter nonalfabet" required />
                </p>


                <p>
                    <label for="birthday">Tanggal Lahir : </label>
                    <input type="date" name="birthday" max="2004-01-01" title="Minimal berusia 17 tahun keatas" required />
                </p>


                <p>
                    <input type="submit" value="Daftar">
                    <input type="reset" value="Reset">
                </p>

            </fieldset>
        </form>
    </center>
</body>

</html>