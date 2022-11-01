// Menú Responsive
var cont_menu = 0;
document.getElementById('menu_hamburguesa').addEventListener("click", function(){
  if(cont_menu == 0){
       document.getElementById('menu_principal').style.left = "0";
       cont_menu +=1;  
       console.log(cont_menu)
   }
   else{
       document.getElementById('menu_principal').style.left = "-100%";
       cont_menu = 0;
       console.log(cont_menu)
   }
})
document.getElementById('menu_principal').style.left = "-100%"


//POPUP
var c_cerrar = document.getElementById('boton_cerrar_popup_cambiar'),
    c_ventana = document.getElementById('ventana_aviso_cambiar'),
    c_popup = document.getElementById('popup_cambiar'),
    r_cerrar = document.getElementById('boton_cerrar_popup_renovar'),
    r_ventana = document.getElementById('ventana_aviso_renovar'),
    r_popup = document.getElementById('popup_renovar'),
    n_cerrar = document.getElementById('boton_cerrar_popup_novedades'),
    n_ventana = document.getElementById('ventana_aviso_novedades'),
    n_popup = document.getElementById('popup_novedades'),
    re_cerrar = document.getElementById('boton_cerrar_popup_reservar'),
    re_ventana = document.getElementById('ventana_aviso_reservar'),
    re_popup = document.getElementById('popup_reservar');

    if (document.getElementById('boton_ventana_aviso_cambiar')){
        c_cerrar.addEventListener('click', function(){
            c_ventana.classList.add('unactive');
        });
        document.getElementById('boton_ventana_aviso_cambiar').addEventListener('click', function(){
            c_ventana.classList.remove('unactive')
            c_ventana.classList.add('active');
        });
        document.getElementById('ventana_opaca_cambiar').addEventListener('click', function(){
            c_ventana.classList.remove('active')
            c_ventana.classList.add('unactive');
        })
    }else{
        r_cerrar.addEventListener('click', function(){
            r_ventana.classList.add('unactive');
        });
        document.getElementById('boton_ventana_aviso_renovar').addEventListener('click', function(){
            r_ventana.classList.remove('unactive')
            r_ventana.classList.add('active');
        });
        document.getElementById('ventana_opaca_renovar').addEventListener('click', function(){
            r_ventana.classList.remove('active')
            r_ventana.classList.add('unactive');
        })
        //
        n_cerrar.addEventListener('click', function(){
            n_ventana.classList.add('unactive');
        });
        document.getElementById('boton_ventana_aviso_novedades').addEventListener('click', function(){
            n_ventana.classList.remove('unactive')
            n_ventana.classList.add('active');
        });
        document.getElementById('ventana_opaca_novedades').addEventListener('click', function(){
            n_ventana.classList.remove('active')
            n_ventana.classList.add('unactive');
        })
    };

    if (document.getElementById('boton_ventana_aviso_reservar')){
        re_cerrar.addEventListener('click', function(){
            re_ventana.classList.add('unactive');
        });
        document.getElementById('boton_ventana_aviso_reservar').addEventListener('click', function(){
            re_ventana.classList.remove('unactive')
            re_ventana.classList.add('active');
        });
        document.getElementById('ventana_opaca_reservar').addEventListener('click', function(){
            re_ventana.classList.remove('active')
            re_ventana.classList.add('unactive');
        })
    };
    
// c_cerrar.addEventListener('click', function(){
//     c_ventana.classList.add('unactive');
// });
// document.getElementById('boton_ventana_aviso_cambiar').addEventListener('click', function(){
//     c_ventana.classList.remove('unactive')
//     c_ventana.classList.add('active');
// });
// document.getElementById('ventana_opaca_cambiar').addEventListener('click', function(){
//     c_ventana.classList.remove('active')
//     c_ventana.classList.add('unactive');
// })
//
// r_cerrar.addEventListener('click', function(){
//     r_ventana.classList.add('unactive');
// });
// document.getElementById('boton_ventana_aviso_renovar').addEventListener('click', function(){
//     r_ventana.classList.remove('unactive')
//     r_ventana.classList.add('active');
// });
// document.getElementById('ventana_opaca_renovar').addEventListener('click', function(){
//     r_ventana.classList.remove('active')
//     r_ventana.classList.add('unactive');
// })
// //
// n_cerrar.addEventListener('click', function(){
//     n_ventana.classList.add('unactive');
// });
// document.getElementById('boton_ventana_aviso_nosotros').addEventListener('click', function(){
//     n_ventana.classList.remove('unactive')
//     n_ventana.classList.add('active');
// });
// document.getElementById('ventana_opaca_nosotros').addEventListener('click', function(){
//     n_ventana.classList.remove('active')
//     n_ventana.classList.add('unactive');
// })