/*var ab =["../image/q1.jpg","../image/q2.jpg","../image/q4.jpg","../image/q5.jpg","../image/q6.jpg","../image/as.jpg","../image/q0.jpg","../image/q01.jpg","../image/q02.jpg"];
var z=0;
var deplace = document.getElementById('bo');

setInterval(function(){
	if (z==ab.length)
	 {
	 	z=0;
	 }

	deplace.src= ab[z];
	z++;
},1600);*/


$(function(){

   var danseur= $('.in');
	setInterval(function(){
     danseur.animate({left:'-200%'},300,function(){
           danseur.css('left','-100%') ;
           $('.so').last().after($('.so').first())});
                  
    },5000);
        
    });

/* ppour les pousins*/
$(function(){

   var danse= $('.i');
	setInterval(function(){
     danse.animate({left:'-200%'},100,function(){
           danse.css('left','-100%') ;
           $('.o').last().after($('.o').first())});
                  
    },5250);
        
    });

/*pour les poulets*/
$(function(){

   var dan= $('.ins');
	setInterval(function(){
     dan.animate({left:'-200%'},300,function(){
           dan.css('left','-100%') ;
           $('.lo').last().after($('.lo').first())});
                  
    },5500);
        
    });