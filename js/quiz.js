//Metodo do Quiz
let app = {

    //Função inicio
    start: function(){

        this.Atualpos = 0;
        this.Totalpontos = 0;
        this.acertos=0;
        this.erros=0;
        //porcentagem
        this.porcentagem = 0.6;

        let alts= document.querySelectorAll('.alternativa');
        alts.forEach((element,index)=>{
            element.addEventListener('click',()=>{

                this.checaResposta(index);

            })
        })

        this.atualizaPontos();
        app.mostraquestao(perguntas[this.Atualpos]);

    },

    //função de mostrar a questão na tela
    mostraquestao: function(q){

        //Pegando a questão atual
        this.qatual = q;

        //mostrando o titulo
        let titleDiv = document.getElementById('titulo');
        titleDiv.textContent = q.titulo;

        //mostrando as alternativas
        let alts= document.querySelectorAll('.alternativa');
        alts.forEach(function(element,index){
            element.textContent = q.alternativas[index];

        })

    },

    //Avançar para a proxima pergunta    
    Proximaperg: function(){

        //"this.Atualpos" é a questão atual
        //"perguntas.length" é a quantidade total de perguntas

        this.Atualpos++;

        if(this.Atualpos == perguntas.length){

            //Depois de concluir as questões
            //Acertos de 60%
            if(((this.acertos + this.erros) * this.porcentagem <= this.acertos)){

                //1 para retornar falha
                return window.location.assign("../View/end_quiz.php?key="+variavel+"&?tipo="+2+"&?acertos="+this.acertos+"&?erros="+this.erros+"&?pontos="+this.Totalpontos)

            } else {

                //2 para retornar acerto
                return window.location.assign("../View/end_quiz.php?key="+variavel+"&?tipo="+1+"&?acertos="+this.acertos+"&?erros="+this.erros+"&?pontos="+this.Totalpontos)

            }    
        }

    },    

    //Chegar que a resposta está certa
    checaResposta: function(user){

        if(this.qatual.correta == user){

            this.acertos++;
            console.log("Certa");
            this.Totalpontos++;
            this.mostraresposta(true);

        } else {
            this.erros++;
            console.log("Errada");
            this.mostraresposta(false);

        }

        this.atualizaPontos();
        this.Proximaperg();
        this.mostraquestao(perguntas[this.Atualpos]);
    },

    //Atualizar a pontuação do usuario    
    atualizaPontos: function(){

        let scoreDiv = document.getElementById('pontos');
        scoreDiv.textContent = `Points: ${this.Totalpontos}`; 

    },    

    //Mostra qual é a resposta correta    
    mostraresposta: function(correto){

        let resultDiv = document.getElementById('result');
        let result = '';

        //formatar como a mensagem será exibida
        if(correto == true){

            result = 'Resposta Correta!';

        } else {

            //obtendo a questão atual
            let pergunta = perguntas[this.Atualpos];

            //obtendo o indice da resposta correta da questão atual
            let cindice = pergunta.correta;

            //obtendo o resto da resposta correta da questão atual
            let ctexto = pergunta.alternativas[cindice];

            result = `Incorreto! Resposta Correta: ${ctexto}`;

        }

        resultDiv.textContent = result;

    }

}


//main
app.start();