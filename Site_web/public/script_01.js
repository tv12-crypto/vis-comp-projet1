function PushtoForm() {

    let contador = 1
    
    let hors_forfait =  "<p>" + contador + " : " + 
    "Date : <input type='date' name='date_hors_frais'> Libellé : <input type='text' name='motif'> Qté : <input type='text' name='amount'></p>";
    
    document.getElementById('hors_frais').innerHTML += hors_forfait;
}

