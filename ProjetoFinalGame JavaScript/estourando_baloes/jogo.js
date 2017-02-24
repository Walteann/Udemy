var timeId = null; //variavel que armazena chmada da função timeout

function iniciaJogo(){

	var url = window.location.search;
	
	var nivel_jogo = url.replace("?","");

	var tempo_segundos = 0;
	var quantidade = 0;



	if(nivel_jogo == 1){// 1 facil -> 120 segundos
		tempo_segundos = 120;
		quantidade = 30;
	}

	if(nivel_jogo == 2){// 2 normal -> 60 segundos
		tempo_segundos = 60;
		quantidade = 50;
	}

	if(nivel_jogo == 3){// 3 dificil -> 30 segundos
		tempo_segundos = 30;
		quantidade = 80;
	}

	//inserido segundos no span;


	document.getElementById('cronometro').innerHTML = tempo_segundos;


	// quantidade de baloes

	var qtde_baloes = quantidade;



	cria_baloes(qtde_baloes);

	// imprimir baloes inteiros

	document.getElementById('baloes_inteiros').innerHTML = qtde_baloes;
	document.getElementById('baloes_estourados').innerHTML = 0;


	contagem_tempo(tempo_segundos + 1);
	
}

function contagem_tempo(segundos){

	segundos = segundos - 1;

	if(segundos == -1){
		clearTimeout(timeId); // ela para a execução da função setTimeout
		game_ouver();
		return false;
	}

	document.getElementById('cronometro').innerHTML = segundos;

	timeId = setTimeout("contagem_tempo("+segundos+")", 1000);


}

function game_ouver(){
	alert('fim de jogo, vc não conseguiu estorar todos os baloes a tempo')
}


function cria_baloes(qtde_baloes){
	for(var i = 1; i <= qtde_baloes; i++){

		var balao = document.createElement("img");
		balao.src = 'imagens/balao_azul_pequeno.png';

		balao.style.margin = "10px";
		balao.id = 'b'+ i;
		balao.onclick = function(){ estourar(this);}


		document.getElementById('cenario').appendChild(balao);
	}
}


function estourar(e){

	var id_balao = e.id;

	document.getElementById(id_balao).setAttribute("onclick","");
	document.getElementById(id_balao).src = "imagens/balao_azul_pequeno_estourado.png";
	pontuacao(-1);
}

function pontuacao(acao){
	var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML;
	var baloes_estourados= document.getElementById('baloes_estourados').innerHTML;

	baloes_inteiros = parseInt(baloes_inteiros);
	baloes_estourados = parseInt(baloes_estourados);

	baloes_inteiros = baloes_inteiros + acao;
	baloes_estourados = baloes_estourados - acao;

	document.getElementById('baloes_inteiros').innerHTML = baloes_inteiros;
	document.getElementById('baloes_estourados').innerHTML = baloes_estourados;


	sintuacao_jogo(baloes_inteiros);
	
}

function sintuacao_jogo(baloes_inteiros){
	if(baloes_inteiros == 0){
		alert('parabens, vc conseguiu estourar todos os valoes a tempo');
		parar_jogo();

	}
}

function parar_jogo(){
	clearTimeout(timeId);
}