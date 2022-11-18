Emilio Martin Rodríguez Torres


![La Justicia comunitaria impide a la Unir usar su logotipo en el ...](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.001.jpeg "La Justicia comunitaria impide a la Unir usar su logotipo en el .")

**Computación en el Servidor Web**




**Trabajo**. Desarrollo web avanzado

<a name="_Toc119617325"></a>
# **Contenido:**

[Contenido:](#_Toc119617325)

[Objetivos de la actividad](#_Toc119617326)

[Descripción del trabajo](#_Toc119617327)

[Tema](#_Toc119617328)

[Ambientación](#_Toc119617329)

[IDE](#_Toc119617330)

[Estructura del proyecyto](#_Toc119617331)

[Librerías adicionales](#_Toc119617332)

[Estructuras de control](#_Toc119617333)

*   [**If**](#_Toc119617334)

*   [**Switch**](#_Toc119617335)

*   [**for**](#_Toc119617336)

*   [**foreach**](#_Toc119617337)

*   [**while**](#_Toc119617338)

[Función](#_Toc119617339)

[Array](#_Toc119617340)

[Funciones de cadenas](#_Toc119617341)

*   [**trim**](#_Toc119617342)

*   [**strtoupper**](#_Toc119617343)

*   [**Strtolower**](#_Toc119617344)

*   [**strlen**](#_Toc119617345)

*   [**substr**](#_Toc119617346)

[Repositorio](#_Toc119617347)

[Rubrica](#_Toc119617348)

<a name="_Toc119617326"></a>
# **Objetivos de la actividad**

El objetivo principal de esta actividad es el poner en práctica los conocimientos adquiridos acerca del desarrollo web. Para ello, se hará uso de PHP, generando un desarrollo web avanzado en el cual se usen algunos de los elementos en el desarrollo en la computación en el servidor web.

<a name="_Toc119617327"></a>
# **Descripción del trabajo**

En esta actividad se propone desarrollar una página web en PHP de temática libre. El desarrollo se hará poniendo en práctica los conceptos estudiados en los dos primeros temas. Por tanto, los requisitos mínimos serían los siguientes:

- Una estructura de control de cada tipo que hemos estudiado.
- Una función.
- Un array o matriz.
- Uso de alguna función de cadenas (ver apartado 2.5 del Tema 2).

Como se indica, la temática será libre. No obstante, se valorará positivamente la usabilidad de la página web. También sería interesante que sea pensada para ser extendida posteriormente con el resto de los conceptos que se vayan estudiando en la asignatura.

Para realizar el desarrollo de la web, se puede utilizar un editor de texto, preferentemente, con resaltado sintáctico.

<a name="_Toc119617328"></a>
# **Tema**

En esta ocasión se decido por desarrollar una pagina web de un catálogo de productos para una tienda de botanas saludables, el cual mostrara en pantalla una serie de productos que están disponibles para su venta. Como es un desarrollo inicial se creará el esqueleto del proyecto donde tendremos una página principal y en ella se inyectarán diferentes *template* en *php* para logar hacerla lo mas modular posibles sin el uso del algún freemwork que nos facilite dicho ejercicio.

<a name="_Toc119617329"></a>
# **Ambientación**

Para poder trabajar con el proyecto aremos uso de **XAMPP** para poder utilizar en el servidor web Apache.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.002.png)

<a name="_Toc119617330"></a>
# **IDE**

Para facilitar el desarrollo de la pagina web, utilizaremos un entorno de desarrollo integrado (**IDE**) en este caso será **Visual Studio Code** y además utilizaremos las siguientes extensiones *(“PHP Debug”, “Xdebug”, “PHP Formatter”, “Open in browser”, “HTML Boilerplate”*) para facilitar el desarrollo y las pruebas.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.003.png)

<a name="_Toc119617331"></a>
# **Estructura del proyecto**

Para este proyecto se utilizará una estructura sencilla, con 5 carpetas principales que alojaran los archivos según la siguiente tabla.

|Carpeta|Finalidad|Archivos|
| - | - | - |
|*CSS*|Agrupar las hojas de estilo personalizadas para este proyecto.|*N/A*|
|*data*|Agrupar archivos *php* que contengan las funciones generales y datos ficticios.|*dummyData.php, function.php.*|
|*images*|Agrupar todas las imágenes utilizadas en el proyecto.|*Logo.jpg*|
|*js*|Agrupar los scripts personalizados para este proyecto.|*N/A*|
|*layouts*|Agrupar los archivos *php* que serán  *template´s* principales que se ocuparan en el proyecto.|*footer.php, header.php, layout.php*|
|*raíz*|Contendrá todos los demás archivos que no tenga alguna categoría.|*administrator.php, about.php, contact.php, homepage.php, index.php, login.php, offers.php, routing.php, licence, readme.md, .gitignore*|

<a name="_Toc119617332"></a>
# **Librerías adicionales**

Para este proyecto se agregan las librerías mas esenciales del desarrollo web*, jquery (v3.5.1), bootstrap (v4.6.2) y line-awesome (v1.3.0)*, estas mediante **CDN** y así mantener lo más limpio el contenido del proyecto.

<a name="_Toc119617333"></a>
# **Estructuras de control**

<a name="_Toc119617334"></a>
**If**

La estructura **if** la encontramos en el archivo *routing.php* que es el encargado de cargar el *template* adecuado según la selección del usuario en el menú, en este caso lo ocupamos para evaluar el resultado que devuelve la función *array\_key\_exists,* (la cual devuelve un booleano), esta lo ocupamos para validar si el arreglo GET contiene la variable “*menu*” que se manda por *query string* desde el menú, si es verdadero procedemos con la ejecución del *routing* según la variable “*menu*” pero si es falso devolvemos la página inicial.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.004.png)

<a name="_Toc119617335"></a>
**Switch**

La estructura **switch** la encontramos en el archivo *routing.php* que es el encargado de cargar el *template* adecuado según la selección del usuario en el menú, en este caso lo ocupamos para evaluar la variable *“$var”* que contiene la selección del menú obtenida de arreglo **GET** donde se almacenan todas las variables que se recuperan por *query string*, se realizan 5 comparaciones, si el valor es *offers* se carga el *template offers.php*, si el valor es *administrator* se carga el *template administrator.php*, si el valor es *about* se carga el *template about.php*, si el valor es *contact* se carga el *template contact.php*, si el valor es *login* se carga el *template login.php* en el caso que no coincida con ninguna de las anteriores se carga el *template homepage.php.*

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.005.png)

<a name="_Toc119617336"></a>
**for**

La estructura **for** la encontramos en el archivo *functions.php* que es el encargado de cargar las funciones recurrentes en el *layout* y estén disponibles en todos los *template* de *php*, el **for** está implementado para poder crear las *cards* en html donde se mostraran las los productos a la venta esto lo hace creando un grilla de *bootstrap* con los n cantidad de productos a pintar y lo realiza pintando siempre 3 columnas como máximo en N cantidad de filas, las filas se calculan verificando el resultado del módulo entre el  numero de elementos y el numero de columnas,  para saber si tenemos un numero exacto de filas o tendremos que sumarle una más para que entren todos los productos, aquí tenemos implementados 2 **for** anidados, el primero recorre en numero calculado de filas y va creando el *div* contenedor, el segundo recorre los elementos del array basado en su índice donde se alojan los productos y va creando las cards de 3 en 3, para no perder el índice donde se quedó el primer bucle (la primera tupla de 3) se guarda en la variable *index* y ahí retoma el **for** en la siguiente iteración de fila al iniciar el bucle de columnas.  

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.006.png)

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.007.png)

<a name="_Toc119617337"></a>
**foreach**

La estructura **foreach** la encontramos en el archivo *header.php* donde la ocupamos para recorrer el arreglo categorías poder pintar el menú desplegable de categorías en el menú.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.008.png)

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.009.png)

<a name="_Toc119617338"></a>
**while**

La estructura **while** la encontramos en el archivo *about.php* donde la ocupamos para crear elementos de una lista no ordenada, recorriendo el arreglo “*features*” por su índice.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.010.png)

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.011.png)

<a name="_Toc119617339"></a>
# **Función**

La función la encontramos en el archivo *functions.php*, vimos necesario hacer una función llamada *showCards* que recibe como parámetro un arreglo, su finalidad es dibujar los n productos que llegan en el arreglo en un *grid* de *Bootstrap* dentro de un elemento *card*, como se ocupara en todos los *template* donde se tengan que mostrar los productos, se decidió poner en una función y reutilizar el código.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.012.png)

<a name="_Toc119617340"></a>
# **Array**

Los arreglos los encontramos en el archivo *dummyData.php*, los ocupamos por el momento para almacenar la información dinámica que queremos mostrar, la idea es más adelante leer algún origen de datos donde se persista la información y llenar con esa información dichos arreglos, pero por ahora tienen información ficticia.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.013.png)

Para poder dotar de funcionalidad el filtro por categorías, realizamos un filtro al arreglo original por su propiedad categoría según el parámetro seleccionado por el usuario en el menú y enviado atreves de *query string*.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.014.png)

<a name="_Toc119617341"></a>
# **Funciones de cadenas**

<a name="_Toc119617342"></a>
**trim**

La función **trim**, elimina  los espacios en blanco u otros caracteres al inicio y final de una cadena, la implementamos cunado le queremos mostrar al usuario datos como el nombre del producto o el precio para que le formato sea el correcto, también se implementa en la comparación de filtro por cadena para evitar errores de búsqueda por entradas con espacios en blanco al inicio o al final.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.015.png)

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.016.png)

<a name="_Toc119617343"></a>
**strtoupper**

La función **strtoupper**, devuelve una cadena donde todos los caracteres de una cadena están en mayúscula, la implementamos en la propiedad categoría para que tomara mayor relevancia ese dato en la tarjeta del producto.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.017.png)

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.018.png)

<a name="_Toc119617344"></a>
**Strtolower**

La función **strtoupper**, devuelve una cadena donde todos los caracteres de una cadena están en minúscula, se implementa en la comparación de filtro por cadena para evitar errores de búsqueda por entradas mayúsculas o minúsculas al forzar la comparación a todo en minúsculas.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.019.png)

<a name="_Toc119617345"></a>
**strlen**

La función **strlen**, devuelve la longitud de una cadena, la implementamos en la propiedad descripción para validar el tamaño de la cadena y tomar la decisión si se pudiera mostrar de manera completa o no.

![](images/readme/images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.020.png)

<a name="_Toc119617346"></a>
**substr**

La función **substr**, devuelve una sub-cadena, dados los parámetros enviados, la implementamos en la propiedad descripción cunado sabemos que la cadena es demasiado larga y puede romper la experiencia del usuario a la hora de mostrar las tarjetas y el texto se desborde del contenedor.

![](images/readme/Aspose.Words.e597f94b-5051-4392-b8c4-10354e831958.021.png)

<a name="_Toc119617347"></a>
# **Repositorio.**

<https://github.com/mar2262001/healty-whim>

<a name="_Toc119617348"></a>
# **Rubrica**


|<p>Actividad 1</p><p>(valor real: 6.5 puntos)</p>|Descripción|<p>Puntuación máxima</p><p>(puntos)</p>|<p>Peso</p><p>%</p>|
| :-: | :-: | :-: | :-: |
|Criterio 1|Una estructura de control de cada tipo|4|40%|
|Criterio 2|Una función|2|20%|
|Criterio 3|Un array o matriz|2|20%|
|Criterio 4|Uso de funciones de cadenas|2|20%|
|||**10**|**100 %**|
