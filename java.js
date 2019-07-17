var tout =["../image/prin.JPG","../image/prin1.JPG","../image/prin2.JPG"];
var h=0;
var moove = document.getElementById('image');
setInterval(function(){
	if (h==tout.length) {h=0;}
	moove.src= tout[h];
	h++;
},6600);


/* ppour les pousins*/