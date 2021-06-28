//valida jogador por apelido
	
function verificar(){
	var t0 = document.getElementById('td');
	var t1 = document.getElementById('td1');
	var t2 = document.getElementById('td2');
	var t3 = document.getElementById('td3');
	var t4 = document.getElementById('td4');
	
	if(
	nickname.value == t0.innerHTML ||
	nickname.value == t1.innerHTML ||
	nickname.value == t2.innerHTML ||
	nickname.value == t3.innerHTML ||
	nickname.value == t4.innerHTML ||
	nickname.value == ''
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
