# Mini proyecto PHP · Reto 3.1 (Git colaborativo)

Este repositorio es un **proyecto sencillo en PHP** pensado para trabajar el Reto 3.1:
_proyecto colaborativo en Git_. El objetivo es tener una base mínima sobre la que
practicar:

- Clonado de repositorios
- Trabajo en ramas de desarrollo (`dev_...`)
- Commits pequeños y frecuentes
- Pull Requests y revisiones
- Resolución de conflictos

## 1. Estructura del proyecto

```text
reto3.1_proyecto_simple/
├── css/
│   └── styles.css        # Estilos básicos de la página
├── includes/
│   ├── header.php        # Cabecera HTML reutilizable
│   └── footer.php        # Pie de página con el script JS
├── js/
│   └── main.js           # Interacción mínima en el navegador
└── index.php             # Página principal con contenido dinámico
```

## 2. Funcionamiento

La página principal `index.php`:

- Incluye `header.php` y `footer.php` desde la carpeta `includes/`.
- Muestra una lista generada dinámicamente con PHP explicando un flujo típico
  de trabajo con Git.
- Incluye un pequeño botón que, al pulsarlo, muestra un mensaje usando
  JavaScript (`js/main.js`).



## 3. Requisitos mínimos

- PHP instalado (por ejemplo, mediante XAMPP, MAMP, Laragon o similar)
- Servidor web apuntando al directorio del proyecto  
  (en local suele ser algo como `htdocs`, `www` o una carpeta configurada en Apache/Nginx)

## 4. Cómo ejecutar el proyecto en local

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/TU_USUARIO/TU_REPO.git
   cd TU_REPO
   ```

2. Colocar la carpeta del proyecto en el directorio que use tu servidor web.
3. Arrancar el servidor (Apache, por ejemplo).
4. Abrir en el navegador:

   ```text
   http://localhost/index.php
   ```
   o la ruta que corresponda a tu entorno.

## 5. Sugerencias para el trabajo colaborativo (Reto 3.1)

- Crear una rama propia de desarrollo, por ejemplo:

  ```bash
  git checkout -b dev_alejandro
  ```

- Hacer cambios pequeños (texto, estilos, mensajes JS...) y commitearlos:

  ```bash
  git add .
  git commit -m "Mensaje de commit descriptivo"
  ```

- Subir la rama al remoto y abrir un Pull Request:

  ```bash
  git push -u origin dev_alejandro
  ```

- Usar los Pull Requests para:
  - Comentar cambios
  - Pedir revisión al compañero
  - Practicar la resolución de conflictos si los hay

