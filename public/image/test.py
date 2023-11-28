categories = ["Makanan", "Minuman"]
items = {
    1: {"Makanan A": 20000, "Makanan B": 25000, "Makanan C": 30000, "Makanan D": 35000, "Makanan E": 40000},
    2: {"Minuman A": 10000, "Minuman B": 12000, "Minuman C": 15000, "Minuman D": 18000, "Minuman E": 20000}
}

# Display menu
for i in range(len(categories)):
    print(str(i + 1) + ". " + categories[i])

# Get category choice
category_choice = int(input("Pilih kategori: "))
if category_choice != 1 and category_choice != 2:
    print("Pilihan tidak valid.")
    exit()

# Display submenu
for item, price in items[category_choice].items():
    print(item + ": Rp " + str(price))

# Get item and quantity
item_choice = input("Pilih item yang akan dibeli: ")
quantity = int(input("Masukkan jumlah item: "))

# Calculate price
price = items[category_choice].get(item_choice, 0) * quantity
print("\nAnda telah memilih " + item_choice + " sebanyak " + str(quantity) + " dengan total harga Rp " + str(price))

# Calculate discount
if price >= 500000:
    discount_rate = 0.25
elif price >= 250000:
    discount_rate = 0.15
elif price >= 100000:
    discount_rate = 0.1
else:
    discount_rate = 0

# Apply discount
discounted_price = price - (price * discount_rate)

print("Diskon: " + str(discount_rate * 100) + "%")
print("Total Harga Setelah Diskon: Rp " + str(discounted_price))

# Get NIM and Nama
input("Masukkan NIM: ")
input("Masukkan Nama: ")

# Process payment
payment_amount = float(input("Masukkan nominal pembayaran: "))
change = payment_amount - discounted_price

if change >= 0:
    print("Kembalian: Rp " + str(change))
    print("Terima kasih telah berbelanja!")
else:
    print("Pembayaran tidak mencukupi anda hanya memiliki saldo sebesar : ", payment_amount,  "Silakan tambahkan nominal pembayaran anda sebesar.", payment_amount+)
