function ubahJenisZakat() {
    const jenisZakat = document.getElementById('jenis-zakat').value;
    if (jenisZakat === 'penghasilan') {
        document.getElementById('form-penghasilan').style.display = 'block';
        document.getElementById('form-perdagangan').style.display = 'none';
    } else {
        document.getElementById('form-penghasilan').style.display = 'none';
        document.getElementById('form-perdagangan').style.display = 'block';
    }
}

document.getElementById('penghasilan-form').addEventListener('input', function() {
    const gaji = parseFloat(document.getElementById('gaji').value) || 0;
    const penghasilanLain = parseFloat(document.getElementById('penghasilan-lain').value) || 0;
    const totalPenghasilan = gaji + penghasilanLain;
    document.getElementById('jumlah-penghasilan').value = totalPenghasilan;
});

document.getElementById('perdagangan-form').addEventListener('input', function() {
    const asetLancar = parseFloat(document.getElementById('aset-lancar').value) || 0;
    const laba = parseFloat(document.getElementById('laba').value) || 0;
    const totalPerdagangan = asetLancar + laba;
    document.getElementById('jumlah-perdagangan').value = totalPerdagangan;
});

function hitungZakat(jenis) {
    if (jenis === 'penghasilan') {
        const totalPenghasilan = parseFloat(document.getElementById('jumlah-penghasilan').value);
        const nisabBulan = parseFloat(document.getElementById('nisab-bulan').value);

        if (totalPenghasilan > nisabBulan) {
            const zakat = totalPenghasilan * 0.025;
            alert(`Zakat yang harus dikeluarkan: Rp. ${zakat.toFixed(2)}`);
        } else {
            alert("Penghasilan bulanan Anda belum melebihi nisab, sehingga tidak wajib zakat.");
        }
    } else if (jenis === 'perdagangan') {
        const totalPerdagangan = parseFloat(document.getElementById('jumlah-perdagangan').value);
        const nisabTahun = parseFloat(document.getElementById('nisab-tahun-perdagangan').value);

        if (totalPerdagangan > nisabTahun) {
            const zakat = totalPerdagangan * 0.025;
            alert(`Zakat yang harus dikeluarkan: Rp. ${zakat.toFixed(2)}`);
        } else {
            alert("Penghasilan perdagangan Anda belum melebihi nisab, sehingga tidak wajib zakat.");
        }
    }
}
