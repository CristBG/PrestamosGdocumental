### Portada
![image](https://github.com/CristBG/www/PrestamosGdocumental/Assets/img/uniminuto.png)

Proyecto Final

Presentado por:
-        harold mesa 
-        cristian ballen
-        cristian pardo
-        diana pinzon

Docente:
-        Jaider Ospina

diplomado DevSecOps
### Introducción.
En un mundo donde la complejidad de las aplicaciones se incrementa constantemente y la presión por desarrollos más rápidos se intensifica, la infraestructura, los equipos de Tecnologías de la Información (T.I) y los procesos se enfrentan a desafíos. La tecnología de contenedores ha surgido como un elemento crucial para abordar estos desafíos y facilitar la interacción ágil en diversos entornos.

La tecnología de contenedores no solo responde a la necesidad de acelerar el desarrollo. Los contenedores representan una innovación que impulsa nuevas formas de crear y implementar sistemas. 

En este contexto, exploraremos cómo los contenedores han transformado el panorama de desarrollo, ofreciendo no solo eficiencia en términos de velocidad y adaptabilidad, sino también la capacidad de construir un entorno colaborativo que responde a las demandas dinámicas de la era digital.

# **Especificación de Requerimientos.**

## **Requisitos funcionales y no funcionales**

### **Requerimientos Funcionales.**

#### **Gestión de Libros.**

-   Permitir la inserción, actualización, eliminación y visualización de
    libros.

-   Asignar libros a autores, editoriales y materias.

#### Administración de Estudiantes.

-   Registrar estudiantes.

-   Asociar estudiantes a préstamos de libros.

#### Control de Préstamos.

-   Registrar préstamos de libros a estudiantes.

-   Seguimiento de fechas de préstamo y devolución.

#### Administración de Usuarios.

-   Mantener usuarios con distintos permisos.

-   Permitir la asignación y revocación de permisos.

#### Configuración del Sistema.

-   Almacenar información de configuración como nombre, teléfono,
    dirección, etc.

### Requerimientos No Funcionales.

#### **Seguridad**.

-   Implementar un sistema de autenticación y autorización robusto para
    proteger los datos sensibles.

-   Garantizar la encriptación de las contraseñas almacenadas.

#### **Rendimiento**.

-   Garantizar que el sistema sea eficiente incluso con grandes
    volúmenes de datos.

-   Tiempos de respuesta rápidos para consultas y transacciones.

#### **Escalabilidad**.

-   Diseñar la base de datos y el sistema para escalar sin problemas a
    medida que aumenta la cantidad de usuarios y datos.

#### **Usabilidad**.

-   Interfaz de usuario intuitiva y fácil de usar para minimizar la
    curva de aprendizaje.

#### Disponibilidad.

-   Mantener una alta disponibilidad del sistema para asegurar que esté disponible durante la mayor parte del tiempo posible.

## Casos de uso o historias de usuario.

### Casos de Uso.

-   Gestión de Libros.

    **Nombre**: Registrar nuevo libro.

    **Actor**: Bibliotecario.

    **Descripción**: El bibliotecario puede registrar un nuevo libro en el sistema, ingresando información como título, cantidad, autor, editorial, materia, etc.

![image](https://github.com/CristBG/PrestamosGdocumental/assets/97702224/52c9ed22-04f3-404a-b199-d447fae32335)

-   Administración de Préstamos.

    **Nombre**: Realizar préstamo de libro.

    **Actor**: Bibliotecario.

    **Descripción**: El bibliotecario puede registrar un préstamo de libro para un estudiante, seleccionando el libro deseado, la fecha de préstamo y devolución, y asociándolo al estudiante.

![image](https://github.com/CristBG/PrestamosGdocumental/assets/97702224/8127913b-61d8-4699-997a-f4b7e0419faa)

-   Control de Usuarios.

    **Nombre**: Asignar permisos a usuarios.

    **Actor**: Administrador

    **Descripción**: El administrador puede asignar o modificar los permisos de acceso a distintos módulos del sistema para cada usuario, como acceso a la gestión de libros,     estudiantes, configuración, etc.

![image](https://github.com/CristBG/PrestamosGdocumental/assets/97702224/9af08e8e-e2ff-44de-82b8-89f8b13d2edd)

### Historias de Usuario.

-   Como usuario, quiero poder buscar libros por título para encontrar
    rápidamente el libro que necesito.

-   Como bibliotecario, quiero poder ver la lista de préstamos actuales
    para administrar mejor los recursos de la biblioteca.

-   Como administrador, quiero poder cambiar la configuración del
    sistema, como la información de contacto de la biblioteca, para
    mantenerla actualizada.

-   Como estudiante, quiero poder ver mi historial de préstamos y fechas
    de devolución para recordar cuándo debo devolver los libros.

# Diseño del Sistema.

Para diseñar un sistema de préstamos de una biblioteca se identifican los siguientes componentes e interacción entre módulos.

### Componentes del Sistema:

1. **Módulo de Usuarios:**
   - Gestiona la autenticación y el control de acceso.
   - Permite la creación, edición y eliminación de usuarios.
   - Asigna roles y permisos a los usuarios para controlar su acceso.

2. **Módulo de Libros:**
   - Administra la información sobre los libros disponibles en la biblioteca.
   - Permite la adición, edición y eliminación de libros.
   - Asocia libros con autores, editoriales y materias.

3. **Módulo de Préstamos:**
   - Gestiona los préstamos de libros a estudiantes.
   - Registra la información de préstamo, incluyendo fechas de préstamo y devolución.
   - Controla el inventario de libros disponibles para préstamo.

4. **Módulo de Configuración:**
   - Permite la configuración del sistema, incluyendo información como nombre, teléfono, dirección, correo, etc.

### Interacción entre Componentes:

- Los usuarios autenticados tienen acceso a las funcionalidades según sus roles y permisos.
- Los usuarios pueden buscar y ver información sobre los libros disponibles, autores, editoriales, etc.
- Los usuarios autorizados pueden realizar préstamos de libros a estudiantes.
- El sistema verifica la disponibilidad del libro para préstamo y registra la transacción.
- Los estudiantes pueden acceder a sus préstamos activos, ver fechas de devolución, etc.
- La configuración del sistema está disponible para administradores para mantener datos generales.

### Flujo de Trabajo:

1. **Gestión de Usuarios:**
   - Crear/Editar/Eliminar usuarios y asignar roles y permisos.

2. **Gestión de Libros:**
   - Administrar la información de libros, autores y editoriales.

3. **Proceso de Préstamo:**
   - Usuario busca un libro disponible.
   - Se verifica la disponibilidad del libro.
   - Se registra el préstamo asociado al estudiante.

4. **Configuración del Sistema:**
   - Mantener los datos generales y de contacto de la biblioteca.

Este diseño proporciona una visión general de cómo los diferentes módulos interactúan entre sí en un sistema de préstamos de biblioteca. Cada módulo puede tener su propia interfaz de usuario y funcionalidades específicas para administrar datos y permitir la interacción con los usuarios finales. La implementación técnica de estos componentes dependerá del entorno y tecnologías específicas utilizadas en el desarrollo del sistema.

# Documentación del Código.

# Manuales.
- [Manual de Usuario](Manual_Usuario.pdf) :Documento que proporciona información detallada sobre cómo utilizar el sistema de préstamos de biblioteca.
# Pruebas.

# Enlaces Docker.

phpmyadmin:

https://hub.docker.com/repository/docker/cpardoan/phpmyadmin_prestamos

mysql:

https://hub.docker.com/repository/docker/cpardoan/mysql_prestamos

Codigo:

https://hub.docker.com/repository/docker/cpardoan/prestamos

# Seguridad.

# Diagramas y Gráficos.

1. **Modelo Entidad Relación**

![Modelo_Entidad_relacion](https://github.com/CristBG/PrestamosGdocumental/assets/97702224/8870c537-815b-4391-bd2e-b34b608157ab)

2. **Flujo de Proceso**

![Flujo_Proceso](https://github.com/CristBG/PrestamosGdocumental/assets/97702224/94c5d791-d34d-4534-9573-b72bf4edf564)

