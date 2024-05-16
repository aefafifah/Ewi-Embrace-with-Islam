function calculateZakat() {
    var totalWealth = parseFloat(document.getElementById('totalWealth').value);
    var zakatRate = parseFloat(document.getElementById('zakatRate').value);

    if (isNaN(totalWealth) || isNaN(zakatRate)) {
        alert('Mohon masukkan angka yang valid.');
        return;
    }

    // Nisab zakat (contoh: 85.3 gram perak)
    var nisabAmount = 85.3 * 1000; // Konversi ke milirupiah (Rp)

    // Hitung zakat
    var zakatAmount = (zakatRate / 100) * totalWealth;

    // Tampilkan hasil
    var resultElement = document.getElementById('result');
    resultElement.innerHTML = `
        <p>Jumlah Harta Anda: Rp ${totalWealth.toLocaleString()}</p>
        <p>Nisab Zakat: Rp ${nisabAmount.toLocaleString()}</p>
        <p>Persentase Zakat: ${zakatRate}%</p>
        <hr>
        <p>Jumlah Zakat yang Harus Dibayar: Rp ${zakatAmount.toLocaleString()}</p>
    `;
}
