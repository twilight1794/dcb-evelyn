<?php

enum Carrera {
    case Ninguno;
    case Aeroespacial;
    case Civil;
    case Geomatica;
    case Ambiental;
    case Geofisica;
    case Geologica;
    case Petrolera;
    case MinasMetalurgia;
    case Computacion;
    case ElectricaElectronica;
    case Telecomunicaciones;
    case Mecanica;
    case Industrial;
    case Mecatronica;
    case SistemasBiomedicos;
}

enum Accion {
    case Ping;
    case IniciarSesion;
    case CerrarSesion;
    case EntrarCurso;
    case EntrarPagina;
    case EntrarRecurso;
    case ReproducirRecurso;
    case PausarRecurso;
    case MoverOffsetRecurso;
    case EntrarEncuesta;
    case EnviarEncuesta;
}

enum TipoRecurso {
    case PDF;
    case PPTX;
    case Genially;
    case Video;
}

?>
