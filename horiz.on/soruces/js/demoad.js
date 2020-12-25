(function() {
	var filename='../css/demoadpacks.css?' + new Date().getTime();		
	var fileref=document.createElement("link");
	fileref.setAttribute("rel", "stylesheet");
	fileref.setAttribute("type", "text/css");
	fileref.setAttribute("href", filename);
	document.getElementsByTagName("head")[0].appendChild(fileref);

	var demoad = document.createElement('div');
	demoad.id = 'cdawrap';
	demoad.innerHTML = '<span id="cda-remove" class="cda-remove" data-content="Continue to demo" aria-label="Close ad"></span>';
	document.getElementsByTagName('body')[0].appendChild(demoad);

	document.getElementById('cda-remove').addEventListener('click',function(e){
		demoad.style.display = 'none';
		e.preventDefault();
	});

	
	
})();
