<?php 
    include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kritik & Saran </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <main> 
        <section id="kritiksaran-form" class="content-form">
            <h2> Kritik & Saran </h2>
            <form id="donationForm" action="thanks.php" method="post" onsubmit="return submitKritikSaranForm()">
                <label for="name"> Nama: </label> <br>
                <input type="text" id="name" name="name" placeholder="Nama Lengkap/Panggilan" required> <br> <br>

                <label for="email"> Email: </label><br>
                <input type="email" id="email" name="email" placeholder="Email Aktif"required><br><br>
                  
                <label for="email"> Nomor Telepon: </label><br>
                <input type="tel" id="phone" name="phone" placeholder="Nomor Aktif" required><br><br>
				
				<label for="kritik"> Kritik:</label><br>
				<textarea id="kritik" name="kritik" rows="5" placeholder="Masukkan Kritik Anda" required></textarea><br><br>
                
                <label for="saran"> Saran:</label><br>
				<textarea id="saran" name="saran" rows="5" placeholder="Masukkan Kritik Anda" required></textarea><br>

                <button type="submit"> Kirim </button>
            </form>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>

<?php 
    include 'footer.php'
?>
