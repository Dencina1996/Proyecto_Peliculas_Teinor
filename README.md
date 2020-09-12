## Proyecto Peliculas Teinor
Proyecto realizado con PHP, Javascript (Jquery), CSS y MySQL.
### Instalación
*	**1. Clonar el repositorio**
	*	Descargamos el repositorio y lo guardamos en nuestro equipo
	*	También podemos hacerlo mediante el siguiente comando en el lugar que queramos:
	``git clone https://github.com/Dencina1996/Proyecto_Peliculas_Teinor.git``
			

*	**2. Agregar la base de datos a nuestro sistema**   
	* Creamos la base de datos **films_db**, con las siguientes credenciales:
		* **Usuario**: Admin
		*   **Contraseña**: P@ssw0rd
	*  Una vez creada, importamos el fichero **films_db.sql** dentro de la base de datos creada.

*	**3. Ejecutar el programa**
	* Se requiere extraer el contenido en una carpeta (en caso de estar en formato **.zip**)
	* Para poder ejecutar el programa, requerimos de alguna herramienta que nos permita acceder a páginas PHP y MySQL, yo personalmente he utilizado XAMPP. 
	* **Para que funcione, disponemos de varios métodos**:
		* Accedemos a través de terminal a la carpeta del repositorio y ejecutamos el siguiente comando:		
	 ``php -S localhost:8000``		
	 Esto nos permitirá acceder a la aplicación usando la barra de direcciones de nuestro navegador con la siguiente dirección: ***localhost:8000***
		* También podemos clonar el repositorio en nuestra carpeta de XAMPP. Para ello, moveremos el repositorio a nuestra carpeta *htdocs*:
	``xampp/htdocs``
