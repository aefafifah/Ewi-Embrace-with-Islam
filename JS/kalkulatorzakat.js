function calculateFitrah() {
    const familyMembers = document.getElementById('familyMembers').value;
    const foodPrice = document.getElementById('foodPrice').value;
    const zakatFitrahPerPerson = 2.5; // 2.5 kg of food

    if (familyMembers && foodPrice) {
        const totalZakatFitrah = familyMembers * zakatFitrahPerPerson * foodPrice;
        document.getElementById('totalZakatFitrah').innerText = totalZakatFitrah;
    } else {
        alert('Mohon masukkan semua data yang diperlukan');
    }
}
