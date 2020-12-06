let data = [];
const daftarBarang = document.getElementById('daftar-barang');
const namaBarang = document.getElementById('nama_barang');

function tambahData() {
    if (namaBarang.value.length > 0) {
        data.push(namaBarang.value);
        UbahDaftarBarang();
    } else {
        console.log("Kosong")
    }

    namaBarang.value = '';
        
}

function editData(item) {
    const indexItem = data.indexOf(item);
    const newName = prompt('Nama Baru');
    if(newName.length > 0) {
        data[indexItem] = newName;
    } else {
        alert('harus diisi');
    }

   UbahDaftarBarang();
}

function hapusData(item) {
    const indexItem = data.indexOf(item);
    data.splice(indexItem, 1);
   UbahDaftarBarang();
}

function UbahDaftarBarang() {
    let items = '';
    data.forEach(datum => {
        items +=   `<div class='item'>
                        <span>${datum}</span> [
                        <a href="#" onclick="return editData('${datum}')">Edit</a>
                        |
                        <a href="#" onclick="return hapusData('${datum}')">Hapus</a>
                        ]
                    </div>`;
    });

    daftarBarang.innerHTML = items;
}