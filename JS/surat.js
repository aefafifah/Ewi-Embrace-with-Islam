function getURL(e){
    const pageURL = window.location.search.substring(1);
    const urlVariable = pageURL.split('&');

    for (let i = 0; i < urlVariable.length; i++){
        const parameterName = urlVariable[i].split('=');
        if(parameterName[0] == e){
            return parameterName[1];
        }
    }
}

const nomorsurat = getURL('nomorsurat');
console.log(nomorsurat);

// function getSurat(){
//     fetch(`https://equran.id/api/v2/surat/:${nomorsurat}`)
//         .then(response => response.json())
//         .then(response => {

//             const judulSurat = document.querySelector('judul-surat');
//             const cardJudulSurat = `
//             <strong>${response.nama_latin} - ${response.nama}</strong>
//                         <p>Jumlah ayat: ${response.jumlah_ayat} (${response.arti})</p>
//                         <button class="btn btn-primary">
//                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-play-fill" viewBox="0 0 16 16">
//                                 <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6 6.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43V6.884z"/>
//                               </svg>
//                             Dengarkan
//                         </button>
//             `;
//             judulSurat.innerHTML = cardJudulSurat;

//             // isi surat
//             const surat = response.ayat;
//             let IsiSurat = '';
//             surat.forEach( s => {
//                 IsiSurat += `
//                     <div class="card mb-3">
//                     <div class="card-body">
//                         <p>${s.nomor}</p>
//                         <h3 class="text-end mb-1">${s.ar}</h3>
//                         <p>${s.tr}</p>
//                         <p>${s.idn}</p>
//                     </div>
//                 </div>
//                 `;
//             });

//             const cardIsiSurat = document.querySelector('.card-isi-surat');
//             cardIsiSurat.innerHTML = IsiSurat;

//             console.log(surat);
//         });
// }

// getSurat();