const CLOSE = document.querySelector('.fenetre_menu_1');
const BOX   = document.querySelector('.supp');

const CLOSE_2 = document.querySelector('.fenetre_menu_2');

CLOSE.addEventListener('click', function() {
    let test = confirm('Vous allez supprimer ce risque définitivement');
    if(test === true) {
        BOX.style.display = "none";
    }
});



let openFenetre = () =>{
    open('../grille_identification_vierge.html','toto','width=600,height=300');
}

CLOSE_2.addEventListener("click",function(){
    openFenetre();
});
