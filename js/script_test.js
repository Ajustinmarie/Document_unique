const identifiant=document.querySelectorAll('.ident');


for(i=0; i<5; i++)
{
   console.log(i);
       identifiant[i].addEventListener("click",function(){
       
       // Récuperer le numero de la question
        let numero = this.getAttribute('data_numero');
        console.log(numero);
       // mise en relation avec la bonne réponse
       // document.querySelector('#rep'+numero).classList.toggle('afficheReponse');

       // reponse.classList.toggle('afficheReponse');  

       // question.classList.toggle('questioncouleur');

       

       //  this.className = "select";



         // this.classList.toggle('afficheReponse');  
        


        });

}