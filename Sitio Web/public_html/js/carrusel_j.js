// Call carousel manually
$('#myCarouselCustom').carousel();

// Go to the previous item
$("#prevBtn").click(function(){
  $("#myCarouselCustom").carousel("prev");
});
// Go to the previous item
$("#nextBtn").click(function(){
  $("#myCarouselCustom").carousel("next");
});

//personalizacion del imagenes_carrusel
$('.carousel').carousel({
   interval: 7000,     //tiempo de transision
   pause:false,		 //pausa al tocar con mause
   wrap:true			 //ciclarse o detenerse
});
