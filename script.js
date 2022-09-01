//Recebendo a questão e as alternativas
let pergunta = {
    titulo: 'Gato',
    alternativas: ['gat','cat','gate','dog'],
    correta: 1
};

//função de mostrar a questão na tela
function mostraquestao(q){
    let titleDiv = document.getElementById('titulo');
    titleDiv.textContent = q.titulo;
    
    let alts= document.querySelectorAll('.alternativa');
    alts.forEach(function(element,index){
        element.textContent = q.alternativas[index];
        element.addEventListener('click',function(){
            
            if(index == q.correta){
                
                console.log("Acertou!");
                
            } else {
                
                console.log("Errrrroooooou!");
                
            }
            
        })
    })
    
}

//parte da main
mostraquestao(pergunta);