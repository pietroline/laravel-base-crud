require('./bootstrap');



//funzione per la conferma di eliminazione di un fumetto
function checkDelete(){
    return confirm("Sei sicuro di voler eliminare il fumetto?");  
}

window.checkDelete = checkDelete;