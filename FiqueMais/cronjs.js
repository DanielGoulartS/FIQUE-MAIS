let ml = 0;
let seg = 0;
let min = 0;
let hora = 0;

function timer(){
	ml++;
	if(ml == 100){
	    ml = 0;
	    seg++;
	    if(seg == 60){
		    seg=0;
		    min++;
		    if(min==60){
			    min = 0;
			    hora++;
		    }
	    }
	}
	//PARA COMPARAÇAO DE PLACAR 
	let num = ''+(hora < 10 ? '0'+hora : hora) + (min < 10? '0'+min : min) + (seg < 10? '0'+seg : seg) + (ml < 10? '0'+ml : ml);
	
	let format = (hora < 10 ? '0'+hora : hora) +':'+(min < 10? '0'+min : min)+':'+(seg < 10? '0'+seg : seg)+':'+(ml < 10? '0'+ml : ml);
	body.innerText = format;
	time.value = num;

}

window.addEventListener('load', function(){lol.style.cursor = 'pointer'});
window.addEventListener('click',
    function start(){
	    lol.innerHTML='FIQUE MAIS';
	    lol.style.cursor = 'default';
        aud.play();
	    setInterval(function(){timer()},10);
	    window.removeEventListener('click',start);
} 
);
