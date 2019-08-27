$(window).scroll(function(){
				var windowHeight = window.height;
        logo = document.getElementById("logo_nav");
        fondo = document.getElementById("fondo_ini");
        
        //window.scrollTo(0,400); PARA HACER UN SCROLL
        if(windowHeight>=400)
        {
            //console.log("abajo");
            //$('#trans').removeClass("transpa_menos").addClass("transpa_mas");
            //$('.logo').removeClass("logo_menos").addClass("logo_mas");
        }
        else
        {
            //console.log("arriba");
            //$('#trans').removeClass("transpa_mas").addClass("transpa_memos");
            //$('.logo').removeClass("logo_mas").addClass("logo_menos");
        }
});

       

$(document).ready(function(){
    logo = document.getElementById("logo_nav");
    $('.tooltipped').tooltip();
    $('.slider').slider({
      height: screen.height - (screen.height *0.15)
    });
    $('.modal').modal();
    $('.sidenav').sidenav({
        menuWidth: 300, // Default is 300
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
     });
     var instance = M.Slider.getInstance(elem);

  });
    


