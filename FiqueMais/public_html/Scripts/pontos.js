//valida jogador por apelido

var t0 = document.getElementById('td');
var t1 = document.getElementById('td1');
var t2 = document.getElementById('td2');
var t3 = document.getElementById('td3');
var t4 = document.getElementById('td4');

function verificar(){
	
	if(
	nickname.value.replaceAll(" ","") == t0.innerHTML.replaceAll(" ","") ||
	nickname.value.replaceAll(" ","") == t1.innerHTML.replaceAll(" ","") ||
	nickname.value.replaceAll(" ","") == t2.innerHTML.replaceAll(" ","") ||
	nickname.value.replaceAll(" ","") == t3.innerHTML.replaceAll(" ","") ||
	nickname.value.replaceAll(" ","") == t4.innerHTML.replaceAll(" ","") ||
	nickname.value.replaceAll(" ","").length == 0
	){
		
		enviarbt.disabled = true;
		nickname.style.color = 'yellow';
		enviarbt.style.cursor = 'default';
	}else{
		nickname.style.color = 'green';
		enviarbt.disabled = false;
		enviarbt.style.cursor = 'pointer';
	}
	
}
 
 window.addEventListener('click',
    function(){ setInterval(verificar,10);}
);
