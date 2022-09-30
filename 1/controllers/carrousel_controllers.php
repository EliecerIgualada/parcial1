<?php
require_once("models/carrousel_models.php");
require_once("utils/carrousel_utils.php");

    class carrousel_controller{
        public static function Mostrar(){
            
          $carousel[]= new carrousel_models(0,"Imagen 1","Reloj Digital","imagenes//digital.png","Este reloj marca la hora a partir de números digitales. Estos pueden indicar la hora, los minutos, los segundos e incluso el día y el mes. Pueden tener dos tipos de formatos, de 24 horas o de 12. Si se utilizan 12 horas, se indica mediante las siglas AM (Antes del mediodía) o PM (post mediodía).");
          $carousel[]= new carrousel_models(1,"Imagen 2","Reloj de pulsera","imagenes//pulsera.png"," Como su mismo nombre indica, estos tipos de relojes se caracterizan por tener una correa que se ata en la muñeca. Estos pueden ser tantos analógicos como digitales. Se trata del reloj más utilizado actualmente, ya que dispones de la hora exacta siempre.");
          $carousel[]= new carrousel_models(2,"Imagen 3","Reloj de torre","imagenes//relojtorre.jpg","Estos tipos de relojes utilizan mecanismos pesados y de gran tamaño para marcar la hora. Están en torres, iglesias o otros lugares altos para que la ciudadanía vea la hora. También están conectados a campanas que marcan con distintos toques las diferentes horas.");
          $carousel[]= new carrousel_models(3,"Imagen 4","Reloj de bolsillo","imagenes//relojbolsillo.png","Se inventó en Francia en el siglo XV. Gracias a su pequeño tamaño se lleva en el bolsillo, de allí su nombre. Para su agarre normalmente se utiliza una cadena acoplada en el reloj que puede atarse donde queramos, Una característica muy identificativa de estos tipos de relojes es que se le deben dar cuerda para su correcto funcionamiento.");
          $carousel[]= new carrousel_models(4,"Imagen 5","Reloj de arena","imagenes//arena.png","El reloj de arena se caracteriza por tener dos receptáculos conectados por una obertura estrecha. Se controla el transcurso de un tiempo determinado desde que la arena empieza a caer al receptáculo inferior y termina cuando ha caído en su totalidad.");
            return $carousel;
        }
    }
?>