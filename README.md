# ✈️ Agencia de Viajes II - Proyecto Curso

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/es/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/es/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/es/docs/Web/JavaScript)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](LICENSE)

Este repositorio contiene la segunda entrega del proyecto web para una **Agencia de Viajes**. En esta versión se evoluciona hacia una aplicación web dinámica, integrando una base de datos relacional en **MySQL** para la gestión y persistencia de información (destinos, reservas y usuarios).

---

## 🚀 Características Principales

- 🗺️ **Gestión Dinámica de Destinos**: Consulta y visualización de ofertas turísticas directamente desde la base de datos MySQL.
- 🗄️ **Integración con Base de Datos Relacional (MySQL)**:
  - Estructuración de tablas para el almacenamiento de datos persistentes.
  - Consultas SQL para el procesamiento de información e interacción con el cliente.
- 🔐 **Procesamiento del Lado del Servidor (PHP)**: Conexión dinámica a la base de datos MySQL para gestionar las peticiones del formulario.
- 📱 **Diseño Adaptativo y Responsivo**: Layout estructurado con **CSS Flexbox** y **CSS Grid** para asegurar una correcta navegación en ordenadores, tablets y dispositivos móviles.
- 📝 **Formularios e Interacción**: Captura de datos e interacción fluida en la interfaz de usuario.

---

## 📂 Estructura del Proyecto

```text
agencia-viajes-2-curso/
├── assets/
│   ├── css/
│   │   ├── styles.css        # Estilos generales y diseño visual
│   │   └── responsive.css    # Reglas adaptativas y Media Queries
│   ├── js/
│   │   └── main.js           # Lógica frontend e interacciones del DOM
│   └── img/                  # Recursos gráficos e imágenes del sitio
├── config/
│   └── conexion.php          # Script de conexión a la base de datos MySQL
├── index.php                 # Documento principal dinámico de la aplicación
├── README.md                 # Documentación del proyecto
└── LICENSE                   # Licencia del proyecto
```

---

## 🛠️ Tecnologías Utilizadas

- **Frontend**: HTML5, CSS3, JavaScript (ES6+).
- **Backend**: PHP.
- **Base de Datos**: MySQL (gestión mediante phpMyAdmin / MySQL Workbench).
- **Servidor Web**: Apache (entorno XAMPP).

---

## 💻 Configuración e Instalación Local

Para ejecutar el proyecto en un entorno local con soporte para PHP y MySQL (utilizando XAMPP):

### 1. Preparar la Base de Datos MySQL
1. Inicia los servicios de **Apache** y **MySQL** desde el *XAMPP Control Panel*.
2. Accede a tu gestor de base de datos (por ejemplo, `http://localhost/phpmyadmin/`).
3. Crea la base de datos para el proyecto (ej. `agencia_viajes`).
4. Crea las tablas necesarias (`destinos`, `reservas`, `usuarios`, etc.) según las necesidades de la aplicación.

### 2. Clonar el Proyecto en `htdocs`
Abre una terminal y navega hasta el directorio `htdocs` de XAMPP:

- **Windows:** `C:/xampp/htdocs/`
- **macOS:** `/Applications/XAMPP/htdocs/`
- **Linux:** `/opt/lampp/htdocs/`

```bash
cd C:/xampp/htdocs/
git clone [https://github.com/Selectron8/agencia-viajes-2-curso.git](https://github.com/Selectron8/agencia-viajes-2-curso.git)
```

### 3. Configurar Conexión a la BDD
Verifica los parámetros de credenciales en el archivo de configuración (ej. `config/conexion.php`) para vincular tu servidor MySQL local:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "agencia_viajes";
```

### 4. Abrir en el Navegador
Ingresa a la siguiente dirección en tu navegador web:
```text
http://localhost/agencia-viajes-2-curso/
```

---

## 👤 Autor

Desarrollado por **Selectron8** como parte de su formación en desarrollo web.

- **GitHub**: [@Selectron8](https://github.com/Selectron8)

---

## 📄 Licencia

Este proyecto está bajo la Licencia **MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.
