(function () {
  "use strict";
  var regalo = document.getElementById('regalo');

  document.addEventListener('DOMContentLoaded', function () {

      // Mapa
          if(document.getElementById('mapa')) {
                var map = L.map('mapa').setView([10.004783, -84.202777], 15);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

          L.marker([10.004783, -84.202777]).addTo(map)
              .bindPopup('GDLWebCAMP 2018')
              .openPopup();
              // .bindTooltip('GDLWebCamp 2018, Boletos ya disponibles')
              // .openTooltip();

          }
      });




      $(function() {

          // filtro pagado no pagado

          $('#filtros a').on('click', function() {
            $('#filtros a').removeClass('activo');
            $(this).addClass('activo');
            $('.registrados tbody tr').hide();

            if( $(this).attr('id') =='pagados' ) {
              $('.registrados tbody tr.pagado').show();
            } else {
              $('.registrados tbody tr.no_pagado').show();
            }

            return false;
          });

          // Lettering
          $('.nombre-sitio').lettering();

          // Agregar clase a Menú
          $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
          $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
          $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

          // Menu fijo

          var windowHeight = $(window).height();
          var barraAltura = $('.barra').innerHeight();
          $(window).scroll(function() {
              var scroll = $(window).scrollTop();
              if(scroll > windowHeight) {
                  $('.barra').addClass('fixed');
                  $('body').css({'margin-top': barraAltura+'px'});
              } else {
                $('.barra').removeClass('fixed');
                $('body').css({'margin-top': '0px'});
              }
          });

          // Menu Responsive

          $('.menu-movil').on('click', function() {
              $('.navegacion-principal').slideToggle();
          });



          // Reaccionar a Resize en la pantalla
          var breakpoint = 768;
          $(window).resize(function() {
               if($(document).width() >= breakpoint){
                 $('.navegacion-principal').show();
               } else {
                 $('.navegacion-principal').hide();
               }
          });


          // Programa de Conferencias
          $('.programa-evento .info-curso:first').show();
          $('.menu-programa a:first').addClass('activo');

          $('.menu-programa a').on('click', function() {
                $('.menu-programa a').removeClass('activo');
                $(this).addClass('activo');
                $('.ocultar').hide();
                var enlace = $(this).attr('href');
                $(enlace).fadeIn(1000);
                return false;
          });

          // Animaciones para los Numeros
          var resumenLista = jQuery('.resumen-evento');
          if(resumenLista.length > 0 ) {
              $('.resumen-evento').waypoint(function() {
                  $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6}, 1200);
                  $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15}, 1200);
                  $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3}, 1500);
                  $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9}, 1500);
              }, {
                  offset: '60%'
              });
          }



          //Cuenta Regresiva

          $('.cuenta-regresiva').countdown('2017/12/10 09:00:00', function(event){
            $('#dias').html(event.strftime('%D'));
            $('#horas').html(event.strftime('%H'));
            $('#minutos').html(event.strftime('%M'));
            $('#segundos').html(event.strftime('%S'));
          });

          // Colorbox

          $('.invitado-info').colorbox({inline:true, width:"50%"});
          $('.boton_newsletter').colorbox({inline:true, width:"50%"});
      });







})();
