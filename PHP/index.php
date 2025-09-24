<?php
// Cukup include file class paling akhir
require_once 'PerangkatPortabel.php';

// Fungsi untuk menampilkan semua data dalam tabel HTML
function tampilkanSemuaData(array $daftarProduk): void {
    if (empty($daftarProduk)) {
        echo "<p>Belum ada produk terdaftar.</p>";
        return;
    }
    $headers = $daftarProduk[0]->getHeaders();
    
    echo '<div class="table-container">';
    echo '<table>';
    echo '<thead><tr>';
    foreach ($headers as $header) {
        echo "<th>" . htmlspecialchars($header) . "</th>";
    }
    echo '</tr></thead><tbody>';

    foreach ($daftarProduk as $produk) {
        $data = $produk->getData();
        echo '<tr>';
        foreach ($data as $index => $value) {
            if ($headers[$index] === "Foto Produk") {
                echo "<td>";
                if (!empty($value)) {
                    echo "<img src='" . htmlspecialchars($value) . "' alt='Foto Produk'>";
                } else {
                    echo "<span>N/A</span>";
                }
                echo "</td>";
            } else {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
    echo '</div>';
}

// Fungsi untuk menambah produk baru dari data form
function tambahProdukBaru(array &$daftarProduk): void {
    $kodeProduk = $_POST['kodeProduk'] ?? '';
    $namaProduk = $_POST['namaProduk'] ?? '';
    $merek = $_POST['merek'] ?? '';
    $harga = (float)($_POST['harga'] ?? 0);
    $tahunProduksi = $_POST['tahunProduksi'] ?? '';
    $fotoProduk = $_POST['fotoProduk'] ?? '';
    $garansi = $_POST['garansi'] ?? '';
    $warna = $_POST['warna'] ?? '';
    $material = $_POST['material'] ?? '';
    $kapasitasBaterai = $_POST['kapasitasBaterai'] ?? '';
    $berat = $_POST['berat'] ?? '';
    $jenisPort = $_POST['jenisPort'] ?? '';

    if (!empty($kodeProduk) && !empty($namaProduk)) {
        $daftarProduk[] = new PerangkatPortabel($kodeProduk, $namaProduk, $merek, $harga, $tahunProduksi, $fotoProduk, $garansi, $warna, $material, $kapasitasBaterai, $berat, $jenisPort);
        // Pesan sukses bisa ditampilkan jika diperlukan
    }
}

// Inisialisasi 5 data awal
$daftarProduk = [
    new PerangkatPortabel("APL01", "MacBook Air M3", "Apple", 17999000, "2024", "images/macbook.webp", "2 Tahun", "Starlight", "Aluminium", "52.6 Whr", "1.24 kg", "Thunderbolt"),
    new PerangkatPortabel("SSG02", "Samsung S 25", "Acer", 13999000, "2024", "images/download.jpeg", "2 Tahun", "Silver", "Aluminium", "65 Whr", "1.32 kg", "USB-C"),
    new PerangkatPortabel("MSI03", "Modern 14", "MSI", 6999000, "2023", "images/msi.jpeg", "2 Tahun", "Black", "Plastic", "39.3 Whr", "1.4 kg", "USB-C, HDMI"),
    new PerangkatPortabel("DEL04", "XPS 13 9345", "Dell", 45999000, "2024", "images/dell.jpeg", "3 Tahun", "Graphite", "Aluminium", "55 Whr", "1.19 kg", "Thunderbolt 4"),
    new PerangkatPortabel("ASU05", "ROG Strix SCAR 18", "ASUS", 75999000, "2024", "images/rog.jpeg", "4 Tahun", "Black", "Aluminium", "90 Whr", "3.1 kg", "Thunderbolt 4")
];

$pesan_sukses = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    tambahProdukBaru($daftarProduk);
    $pesan_sukses = '✅ Produk berhasil ditambahkan!';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk Portabel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* --- General Style --- */
        :root {
            --primary-color: #2c5e3f; /* Green */
            --secondary-color: #f4f4f5; /* Light Gray */
            --border-color: #e4e4e7;
            --text-color: #3f3f46;
            --white-color: #ffffff;
            --success-color: #22c55e;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--secondary-color);
            color: var(--text-color);
            margin: 0;
            padding: 2em;
        }

        /* --- Container & Typography --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: var(--white-color);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
        }
        h1, h2 {
            color: var(--primary-color);
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 10px;
            margin-bottom: 1.5rem;
        }
        h1 { font-size: 2rem; }
        h2 { font-size: 1.5rem; margin-top: 2.5rem; }

        /* --- Table Style --- */
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
            vertical-align: middle;
        }
        thead th {
            background-color: var(--primary-color);
            color: var(--white-color);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85em;
        }
        tbody tr:hover {
            background-color: #f0fdf4;
        }
        td img {
            max-width: 80px;
            height: auto;
            border-radius: 6px;
            box-shadow: var(--shadow-sm);
        }

        /* --- Form Style --- */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 0.9em;
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 1em;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(44, 94, 63, 0.1);
        }
        .form-full-width {
            grid-column: 1 / -1; /* Span full width */
            text-align: right;
        }
        button {
            padding: 12px 24px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-size: 1em;
            font-weight: 700;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: #1e422b;
        }
        
        /* --- Notifikasi --- */
        .notification {
            padding: 1rem;
            background-color: #dcfce7;
            color: #166534;
            border-left: 5px solid var(--success-color);
            border-radius: 6px;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Manajemen Produk Portabel</h1>

        <?php if ($pesan_sukses): ?>
            <div class="notification"><?php echo $pesan_sukses; ?></div>
        <?php endif; ?>

        <h2>Daftar Produk</h2>
        <?php tampilkanSemuaData($daftarProduk); ?>

        <h2>Tambah Perangkat Portabel Baru</h2>
        <form action="" method="post">
            <div class="form-grid">
                <div class="form-group">
                    <label for="kodeProduk">Kode Produk:</label>
                    <input type="text" id="kodeProduk" name="kodeProduk" required>
                </div>
                <div class="form-group">
                    <label for="namaProduk">Nama Produk:</label>
                    <input type="text" id="namaProduk" name="namaProduk" required>
                </div>
                <div class="form-group">
                    <label for="merek">Merek:</label>
                    <input type="text" id="merek" name="merek" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" id="harga" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="tahunProduksi">Tahun Produksi:</label>
                    <input type="text" id="tahunProduksi" name="tahunProduksi" required>
                </div>
                <div class="form-group">
                    <label for="fotoProduk">Path Foto (contoh: images/nama.jpg):</label>
                    <input type="text" id="fotoProduk" name="fotoProduk">
                </div>
                <div class="form-group">
                    <label for="garansi">Garansi:</label>
                    <input type="text" id="garansi" name="garansi" required>
                </div>
                <div class="form-group">
                    <label for="warna">Warna:</label>
                    <input type="text" id="warna" name="warna" required>
                </div>
                <div class="form-group">
                    <label for="material">Material:</label>
                    <input type="text" id="material" name="material" required>
                </div>
                <div class="form-group">
                    <label for="kapasitasBaterai">Kapasitas Baterai:</label>
                    <input type="text" id="kapasitasBaterai" name="kapasitasBaterai" required>
                </div>
                <div class="form-group">
                    <label for="berat">Berat:</label>
                    <input type="text" id="berat" name="berat" required>
                </div>
                <div class="form-group">
                    <label for="jenisPort">Jenis Port:</label>
                    <input type="text" id="jenisPort" name="jenisPort" required>
                </div>
                <div class="form-group form-full-width">
                     <button type="submit">Tambah Produk</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>