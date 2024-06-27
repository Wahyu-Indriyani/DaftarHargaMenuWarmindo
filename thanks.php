<?php 
    include 'header.php'; 

    $name = $email = $phone = $kritik = $saran = "";
    $nameErr = $emailErr = $phoneErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $kritik = $_POST['kritik'];
        $saran = $_POST['saran'];

        $isValid = true;

        // Validasi email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email tidak valid.";
            $isValid = false;
        }

        // Validasi nomor telepon
        if (!preg_match('/^[0-9]{10,15}$/', $phone)) {
            $phoneErr = "Nomor telepon tidak valid.";
            $isValid = false;
        }

        // Jika validasi berhasil, simpan data
        if ($isValid) {
            // Simpan data ke dalam file atau database
            $data = "Nama: $name\nEmail: $email\nNomor Telepon: $phone\nKritik: $kritik\nSaran: $saran\n\n";
            file_put_contents('kritiksaran.txt', $data, FILE_APPEND);

            // Tampilkan halaman terima kasih
            echo '
                <!DOCTYPE html>
                <html lang="en">
                <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Terima Kasih</title>
                <link rel="stylesheet" href="css/styles.css"> 
                </head>
                <body>
                    <main>
                        <section id="thank-you" class="content-thankyou">
                            <h2>Terima kasih atas kritik dan saran anda!</h2>
                            <p> Semoga kedepannya dapat menjadi evaluasi bagi kami. </p>
                            <button type="button" onclick="window.location.href=\'index.php\'"> Back to Home </button>
                        </section>
                    </main>
                </body>
                </html>
            ';
        } else {
            echo '
                <!DOCTYPE html>
                <html lang="en">
                <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Terima Kasih</title>
                <link rel="stylesheet" href="css/styles.css"> 
                </head>
                <body>
                    <main>
                        <section id="thank-you" class="content-thankyou">
                            <h2> <center> Form tidak valid. </center> </h2>
                            <p> Silahkan Coba Lagi. </p>
                            <button type="button" onclick="window.location.href=\'index.php\'"> Back to Home </button>
                        </section>
                    </main>
                </body>
                </html>
            ';
        }
    }

    include 'footer.php'; 
?>