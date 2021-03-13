///CAPTURA LAS ACCINES EN VARIABLES 
var Btn_Abrir_Popup = document.getElementById('BotonAzul'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	cerrar_popup = document.getElementById('cerrar-popup'); // cerrar en la cruz

	//EVENT LISTENER 

	Btn_Abrir_Popup.addEventListener('click',function(){
		overlay.classList.add('active');
		popup.classList.add('active');
	});

	cerrar_popup.addEventListener('click',function(){
		overlay.classList.remove('active');
		popup.classList.remove('active');
	});

