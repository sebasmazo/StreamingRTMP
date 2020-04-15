# FinalTelematica
Proyecto Final de Telematica
#Datos Del Autor
Nombre: Sebastián Mazo Vélez
ID: 000129045
#Descripcion Proyecto
Aplicacion para streaming, enfocada en cuidado de salud mental.
Permitiendo a la gente tener contacto con los demás, actividades, clases o para ocio 
Estructura APP:

Servidor (Aloja streaming y Páginas HTML)
{
 Protocolo RTMP para alojar el streaming enviado desde el cliente en el puerto deseado  (Port::1935)

 NGINX para el front, paginas en lenguaje HTML para el diseño y vista del stream
 {
  1.Página de Inicio
  2.Página para visualizar un stream
  3.Página registro
 }

}

El cliente enviará el streaming por medio de RTMP hacia el puerto 1935 configurado en el servidor para que guarde ese video (Sin escribir en el disco), luego otros usuarios podrán ingresar a este stream conectandose al puerto mencionado anteriormente, gracias a la forma de conexión de RTMP:
('rtmp://[IP o dominio del servidor]/[Nombre del application]/[Clave de retransmisión]')
Podremos tener varias conexiones al tiempo, dandole al usuario la elección de Clave según el stream al que desea acceder

AppMovil
{
    Permitirá observar un streaming deseado, para generar un stream tendrá que ser desde un cliente 
}

Seguridad Servidor
{
    El servidor tendrá acceso por medio de SSH con la key respectiva, solo tendrá abiertos los puestros 1935 para RTMP, 80 HTTP, 443 HTTPS.
}

Lenguajes Utilizados
{
    HTML,JavaScript
}

Tipo de Servidor
{
    Servidor en la nube = *Guarda el streaming para después ser transmitido en disntintos clientes*
}

Plataformas
{
    AWSEducate (Maquina Ubuntu), GitHub (Repositorio), Docker (Imagen del servidor) 
}
Este es un prototipo inicial, todo está sujeto a cambios, mejoras, etc.

