def pesanan():
    pilihan = "y"
    while pilihan == "y":
        print("1. makanan")
        print("2. minuman")
        kategori = input("Pilih kategori (1/2): ")
        
        while kategori != "1" and kategori != "2":
            print("Kategori tidak valid. Silahkan pilih kategori 1 atau 2.")
            kategori = input("Pilih kategori (1/2): ")

        if kategori == "1":
            print("""
            A. drink a : Rp 10.000
            B. drink b : Rp 20.000
            C. drink c : Rp 30.000
            D. drink d : Rp 50.000
            """)
            pesan = input("Masukkan abjad menu minuman = ")
            jumlahpesan = int(input("Masukkan jumlah pesanan = "))
            if pesan == "a" or pesan == "A":
                listnama = "drink a"
                harga = 10000 * jumlahpesan
            elif pesan == "b" or pesan == "B":
                listnama = "drink b"
                harga = 20000 * jumlahpesan
            elif pesan == "c" or pesan == "C":
                listnama = "drink c"
                harga = 30000 * jumlahpesan
            elif pesan == "d" or pesan == "D":
                listnama = "drink d"
                harga = 50000 * jumlahpesan
            else:
                exit()
        elif kategori == "2":
            print("""
            A. food a : Rp 30.000
            B. food b : Rp 40.000
            C. food c : Rp 50.000
            D. food d : Rp 60.000
            """)
            pesan = input("Masukkan abjad menu makanan = ")
            jumlahpesan = int(input("Masukkan jumlah pesanan = "))
            if pesan == "a" or pesan == "A":
                listnama = "food a"
                harga = 30000 * jumlahpesan
            elif pesan == "b" or pesan == "B":
                listnama = "food b"
                harga = 40000 * jumlahpesan
            elif pesan == "c" or pesan == "C":
                listnama = "food c"
                harga = 50000 * jumlahpesan
            elif pesan == "d" or pesan == "D":
                listnama = "food d"
                harga = 60000 * jumlahpesan
            else:
                exit()
        else:
            print("Kategori tidak valid. Silahkan pilih kategori 1 atau 2.")

        print("Menu :", listnama)
        print("Jumlah Pesan :", jumlahpesan)
        print("total Harga sebelum diskon:", harga)

        if harga > 500000:
            diskon = int(harga * 0.25)
        elif harga > 250000:
            diskon = int(harga * 0.15)
        elif harga > 100000:
            diskon = int(harga * 0.1)
        else:
            diskon = 0

        totalharga = harga - diskon
        print("Diskon :", diskon)
        print("total harga setelah diskon", totalharga)
        print("--------------------------")
        
        pembayaran = input("Apakah Anda ingin membayar? (Y/N): ")
        if pembayaran == "Y" or pembayaran == "y":
            nim = input("Masukkan NIM: ")
            nama = input("Masukkan Nama: ")
        elif pembayaran == "N" or pembayaran == "n":
            exit()
        else:
            exit()

        nominal_pembayaran = int(input("Masukkan nominal pembayaran: "))

        kembalian = nominal_pembayaran - totalharga
        while kembalian < 0:
            print("Anda hanya membayarkan", nominal_pembayaran, "Pembayaran anda kurang", (nominal_pembayaran - totalharga), "Mohon masukkan nominal yang cukup.",)
            nominal_pembayaran = int(input("Masukkan nominal pembayaran yang nbeanr: "))
            kembalian = nominal_pembayaran - totalharga 

        print("--------------------------")
        print("Struk Pembayaran")
        print("--------------------------")
        print("Nama :", nama)
        print("NIM :", nim)
        print("Jumlah Bayar :", nominal_pembayaran)
        print("Kembalian :", kembalian)
        print("--------------------------")

        pilihan = input("Apakah Anda ingin order kembali (Y/N): ")

pesanan()