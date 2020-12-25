var f1 = new Boolean(true);
var f2 = new Boolean(true);
var f3 = new Boolean(true);
var f4 = new Boolean(true);

var landscape = new Boolean(false);
if (window.matchMedia("(orientation: landscape)").matches) {
	landscape = true;
}
$('#primeiro-paragrafo').on('show.bs.collapse', 
	function() {
		
		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
		if(w <= 480){
			f1 = false;
			$('.botao').css('transform', 'translate(0%, 100%');
			$('.zed').css('transform', 'translate(0%, 100%');
			$('.inpt-email').css('transform', 'translate(0%, 100%');
			$('.titulo-email').css('transform', 'translate(0%, 100%');
		}


	});

$('#primeiro-paragrafo').on('hide.bs.collapse', function() {
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	f1 = true;


	if(w <= 480 && f1 && f2 && f3 && f4){
		$('.botao').css('transform', 'translate(0%, 0%');
		$('.zed').css('transform', 'translate(0%, 0%');
		$('.inpt-email').css('transform', 'translate(0%, 0%');
		$('.titulo-email').css('transform', 'translate(0%, 0%');
	}

	/*	var el = document.getElementById('primeiro-paragrafo');
    	pos = el.getBoundingClientRect();

    	alert('Top1 fecha: '+pos.top+'\nLeft: '+pos.left); */

    });

$('#segundo-paragrafo').on('show.bs.collapse', function() {


	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	if(w <= 480){
		$('.botao').css('transform', 'translate(0%, 100%');
		$('.zed').css('transform', 'translate(0%, 100%');
		$('.inpt-email').css('transform', 'translate(0%, 100%');
		$('.titulo-email').css('transform', 'translate(0%, 100%');
		f2 = false;
	}


});

$('#segundo-paragrafo').on('hide.bs.collapse', function() {
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	f2 = true;
	if(w <= 480  && f1 && f2 && f3 && f4){
		$('.botao').css('transform', 'translate(0%, 0%');
		$('.zed').css('transform', 'translate(0%, 0%');
		$('.inpt-email').css('transform', 'translate(0%, 0%');
		$('.titulo-email').css('transform', 'translate(0%, 0%');
	}

});


$('#terceiro-paragrafo').on('show.bs.collapse', function() {
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	if(w <= 480){
		$('.botao').css('transform', 'translate(0%, 100%');
		$('.zed').css('transform', 'translate(0%, 100%');
		$('.inpt-email').css('transform', 'translate(0%, 100%');
		$('.titulo-email').css('transform', 'translate(0%, 100%');
		f3 = false;
	}
});

$('#terceiro-paragrafo').on('hide.bs.collapse', function() {
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	f3 = true;
	if(w <= 480  && f1 && f2 && f3 && f4){
		$('.botao').css('transform', 'translate(0%, 0%');
		$('.zed').css('transform', 'translate(0%, 0%');
		$('.inpt-email').css('transform', 'translate(0%, 0%');
		$('.titulo-email').css('transform', 'translate(0%, 0%');
	}
});

$('#quarto-paragrafo').on('show.bs.collapse', function() {
	f2 = true;
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	if(w <= 480){
		$('.botao').css('transform', 'translate(0%, 450%');
		$('.zed').css('transform', 'translate(0%, 450%');
		$('.inpt-email').css('transform', 'translate(0%, 450%');
		$('.titulo-email').css('transform', 'translate(0%, 450%');
		f4 = false;
	}
});

$('#quarto-paragrafo').on('hide.bs.collapse', function() {
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	f4 = true;
	if(w <= 480  && f1 && f2 && f3 && f4){
		$('.botao').css('transform', 'translate(0%, 0%');
		$('.zed').css('transform', 'translate(0%, 0%');
		$('.inpt-email').css('transform', 'translate(0%, 0%');
		$('.titulo-email').css('transform', 'translate(0%, 0%');
	}
});

var recursiva = function () {



	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	
	var isVisible1 = $( "#primeiro-paragrafo" ).is( ":visible" );
	var isVisible2 = $( "#segundo-paragrafo" ).is( ":visible" );
	var isVisible3 = $( "#terceiro-paragrafo" ).is( ":visible" );
	var isVisible4 = $( "#quarto-paragrafo" ).is( ":visible" );


	if(isVisible1 && w <= 480){
		$('.bloco-de-baixo').css('transform', 'translate(0%, 30%');
	}
	if(isVisible2 && w <= 480){
		$('.bloco-de-baixo').css('transform', 'translate(0%, 30%');
	}
	if(isVisible3 && w <= 480){
		$('.bloco-de-baixo').css('transform', 'translate(0%, 30%');
	}
	if(isVisible4 && w <= 480){
		$('.bloco-de-baixo').css('transform', 'translate(0%, 100%');
	}


	
	//	setTimeout(recursiva,1);
}
//window.onload = teste();
function recursiva2() {



	var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
	
	
	var landscape = new Boolean(false);
	if (window.matchMedia("(orientation: landscape)").matches) {
		landscape = true;
	}
	//alert(h);
	//alert(landscape);
	if( h <= 500 && !landscape){
		$('.logo').css('display', 'none');
	}
	if(h <= 300 && landscape ){

		$('.logo').css('display', 'none');
	}

//setTimeout(recursiva2(),2000);


}
function teste(){
//	recursiva2();
}
/*function ajustaLayout(){

	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	if(w <= 480){
			//document.querySelector(".bloco-de-baixo").style.height = "100%";
			//document.querySelector(".panel").style.height = "10%";
			//$('.bloco-de-baixo').css('height', '100%');
			$('.bloco-de-baixo').css('height', '60%');
			//$('.row').css('height', '40%');
			//$('.logo').css('top', '-100%');
			$('#menu').css('top', '-100%');
			//$('.titulo-email').css('color', '#000');
			
		}
		if (window.matchMedia("(orientation: landscape)").matches) {
			$('.bloco-de-baixo').css('top', '0%');
			$('.bloco-de-baixo').css('height', '60%');
			$('.logo').css('top', '-900%');
			$('.zed').css('top', '-900%');
			

		}
	}

	function ajustaLayout2(){

		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
		if(w <= 480){

			$('.bloco-de-baixo').css('height', '45%');
			//$('.row').css('height', '40%');
			$('.logo').css('top', '0%');
			$('#menu').css('top', '25%');
			
		}
		if(w <= 480){
		if (window.matchMedia("(orientation: landscape)").matches) {
			$('.bloco-de-baixo').css('height', '45%');
			$('.logo').css('top', '5%');
			$('.zed').css('top', '40%');
			
		}
		}
	}
	*/