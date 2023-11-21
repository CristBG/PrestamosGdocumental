### Introducción.

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

-   **Nombre**: Registrar nuevo libro.

-   **Actor**: Bibliotecario.

-   **Descripción**: El bibliotecario puede registrar un nuevo libro en
    el sistema, ingresando información como título, cantidad, autor,
    editorial, materia, etc.

-   Administración de Préstamos.

-   **Nombre**: Realizar préstamo de libro.

-   **Actor**: Bibliotecario.

-   **Descripción**: El bibliotecario puede registrar un préstamo de
    libro para un estudiante, seleccionando el libro deseado, la fecha
    de préstamo y devolución, y asociándolo al estudiante.

-   Control de Usuarios.

-   **Nombre**: Asignar permisos a usuarios

-   **Actor**: Administrador

-   **Descripción**: El administrador puede asignar o modificar los
    permisos de acceso a distintos módulos del sistema para cada
    usuario, como acceso a la gestión de libros, estudiantes,
    configuración, etc.

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

# Documentación del Código.

# Manuales.

# Pruebas.

# Procesos.

# Seguridad.

# Diagramas y Gráficos.
