// File: Main.java

import java.util.ArrayList;
import java.util.InputMismatchException;
import java.util.Scanner;

public class main {
    private static ArrayList<PerangkatPortabel> daftarPerangkat = new ArrayList<>();
    private static Scanner scanner = new Scanner(System.in);

    private static void tampilkanData() {
        // Definisi lebar kolom
        final int wKode = 8;
        final int wNama = 20;
        final int wMerek = 13;
        final int wHarga = 12;
        final int wTahun = 6;
        final int wStatus = 8;
        final int wGaransi = 9;
        final int wWarna = 12;
        final int wMaterial = 15;
        final int wBaterai = 10;
        final int wBerat = 10;
        final int wPort = 15;

        // Membuat format string untuk printf
        String format = "| %-" + wKode + "s | %-" + wNama + "s | %-" + wMerek + "s | %-" + wHarga + "s | %-" + wTahun + "s | %-" + wStatus + "s | %-" + wGaransi + "s | %-" + wWarna + "s | %-" + wMaterial + "s | %-" + wBaterai + "s | %-" + wBerat + "s | %-" + wPort + "s |\n";
        
        // Membuat garis pemisah
        String separator = "+";
        separator += "-".repeat(wKode + 2) + "+";
        separator += "-".repeat(wNama + 2) + "+";
        separator += "-".repeat(wMerek + 2) + "+";
        separator += "-".repeat(wHarga + 2) + "+";
        separator += "-".repeat(wTahun + 2) + "+";
        separator += "-".repeat(wStatus + 2) + "+";
        separator += "-".repeat(wGaransi + 2) + "+";
        separator += "-".repeat(wWarna + 2) + "+";
        separator += "-".repeat(wMaterial + 2) + "+";
        separator += "-".repeat(wBaterai + 2) + "+";
        separator += "-".repeat(wBerat + 2) + "+";
        separator += "-".repeat(wPort + 2) + "+";

        System.out.println("\n" + separator);
        // Header
        System.out.printf(format, "Kode", "Nama Produk", "Merek", "Harga", "Tahun", "Status", "Garansi", "Warna", "Material", "Baterai", "Berat", "Jenis Port");
        System.out.println(separator);

        if (daftarPerangkat.isEmpty()) {
            System.out.printf("| %-" + (separator.length() - 4) + "s |\n", "Data masih kosong.");
        } else {
            // Data
            for (PerangkatPortabel device : daftarPerangkat) {
                System.out.printf(format,
                        device.getKodeProduk(),
                        device.getNamaProduk(),
                        device.getMerek(),
                        device.getHarga(),
                        device.getTahunProduksi(),
                        device.getStatus(),
                        device.getGaransi() + " bln",
                        device.getWarna(),
                        device.getMaterial(),
                        device.getKapasitasBaterai() + "mAh",
                        device.getBerat() + " gr",
                        device.getJenisPort());
            }
        }
        System.out.println(separator);
    }

    private static void tambahData() {
        System.out.println("\n--- Tambah Data Baru ---");
        System.out.print("Kode Produk: ");
        String kode = scanner.next();
        scanner.nextLine(); 
        System.out.print("Nama Produk: ");
        String nama = scanner.nextLine();
        System.out.print("Merek: ");
        String merek = scanner.nextLine();
        System.out.print("Harga: ");
        int harga = scanner.nextInt();
        System.out.print("Tahun Produksi: ");
        int tahun = scanner.nextInt();
        scanner.nextLine(); 
        System.out.print("Status (Baru/Bekas): ");
        String status = scanner.nextLine();
        System.out.print("Garansi (Bulan): ");
        int garansi = scanner.nextInt();
        scanner.nextLine(); 
        System.out.print("Warna: ");
        String warna = scanner.nextLine();
        System.out.print("Material: ");
        String material = scanner.nextLine();
        System.out.print("Kapasitas Baterai (mAh): ");
        int baterai = scanner.nextInt();
        System.out.print("Berat (gram): ");
        int berat = scanner.nextInt();
        scanner.nextLine(); 
        System.out.print("Jenis Port: ");
        String port = scanner.nextLine();

        daftarPerangkat.add(new PerangkatPortabel(kode, nama, merek, harga, tahun, status, garansi, warna, material, baterai, berat, port));
        System.out.println("\nData berhasil ditambahkan!");
    }

    public static void main(String[] args) {
        // --- JANJI ---
        // Saya, [Isi Nama Lengkap Anda] dengan NIM [Isi NIM Anda], mengerjakan soal TP2
        // untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

        // 5 Objek awal (hardcode)
        daftarPerangkat.add(new PerangkatPortabel("SP001", "Galaxy S25", "Samsung", 20000000, 2025, "Baru", 12, "Titanium", "Aluminium", 5000, 180, "USB-C"));
        daftarPerangkat.add(new PerangkatPortabel("LP001", "MacBook Pro M4", "Apple", 45000000, 2025, "Baru", 12, "Silver", "Aluminium", 8000, 1500, "Thunderbolt"));
        daftarPerangkat.add(new PerangkatPortabel("TB001", "iPad Pro", "Apple", 22000000, 2024, "Baru", 12, "Gray", "Aluminium", 7500, 600, "USB-C"));
        daftarPerangkat.add(new PerangkatPortabel("HP002", "XPS 15", "Dell", 30000000, 2024, "Baru", 24, "Black", "Carbon Fiber", 7000, 1800, "USB-C"));
        daftarPerangkat.add(new PerangkatPortabel("SP003", "Pixel 10", "Google", 15000000, 2025, "Baru", 12, "White", "Glass", 4500, 190, "USB-C"));
        
        int pilihan = 0;
        do {
            System.out.println("\n=== MENU TOKO ELEKTRONIK ===");
            System.out.println("1. Tampilkan Data");
            System.out.println("2. Tambah Data");
            System.out.println("3. Keluar");
            System.out.println("============================");
            System.out.print("Masukkan pilihan Anda (1/2/3): ");
            
            try {
                pilihan = scanner.nextInt();
                scanner.nextLine(); // Membersihkan buffer

                switch (pilihan) {
                    case 1:
                        tampilkanData();
                        System.out.print("\nTekan Enter untuk kembali ke menu...");
                        scanner.nextLine();
                        break;
                    case 2:
                        tambahData();
                        tampilkanData(); // Langsung tampilkan data terbaru
                        System.out.print("\nTekan Enter untuk kembali ke menu...");
                        scanner.nextLine();
                        break;
                    case 3:
                        System.out.println("\nProgram Selesai.");
                        break;
                    default:
                        System.out.println("\nPilihan tidak valid.");
                        System.out.print("\nTekan Enter untuk kembali ke menu...");
                        scanner.nextLine();
                        break;
                }
            } catch (InputMismatchException e) {
                System.out.println("\nInput harus berupa angka!");
                scanner.next(); // Membersihkan input yang salah
                System.out.print("\nTekan Enter untuk kembali ke menu...");
                scanner.nextLine();
            }

        } while (pilihan != 3);
        
        scanner.close();
    }
}