document.addEventListener('DOMContentLoaded', function() {
    const parallaxContainer = document.querySelector('.parallax-container');
    const parallax = document.querySelector('.parallax');
  
    parallaxContainer.addEventListener('mousemove', function(e) {
      let xAxis = (window.innerWidth / 2 - e.pageX) / 25;
      let yAxis = (window.innerHeight / 2 - e.pageY) / 25;
      parallax.style.transform = `translate(${xAxis}px, ${yAxis}px)`;
    });
  });

  //atras adelante
  let num=1;
  function adelante(){
      num++;
      if(num>7){
      num=1;}
  let img=document.getElementById("img");
      img.src="img/"+"img0"+num+".jpg";
  }
  function atras(){
      num--;
      if(num<1){
      num=7;}
  let img=document.getElementById("img");
      img.src="img/"+"img0"+num+".jpg";
  }
  //navbar 
  
  
//boton subir
  let subir=document.getElementById("subir");
                window.addEventListener("scroll",Bajar);
                function Bajar(){
                    let posy=window.pageYOffset;
                    if(posy>200){
                        subir.style.display="block";
                    }
                    else{
                        subir.style.display="none";
                    }
                }