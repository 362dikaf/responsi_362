<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengiriman</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Data Pengiriman</h1>
        <pre>
            <?php
            $file = fopen("data.txt", "r");
            if ($file) {
                echo fread($file, filesize("data.txt"));
                fclose($file);
            } else {
                echo "Tidak ada data.";
            }
            ?>
        </pre>
    </div>
</body>
</html>
