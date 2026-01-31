<?php
// index.php - Página principal del mini proyecto PHP para Reto 3.1

// Incluimos cabecera y pie desde la carpeta includes
include __DIR__ . '/includes/header.php';
?>

<main class="container">
    <h1>Reto 3.1 - Proyecto colaborativo en Git</h1>
    <p>
        Esta es una pequeña página PHP pensada para practicar Git y GitHub
        en equipo. El objetivo no es tanto el contenido, sino tener un
        repositorio sencillo sobre el que poder trabajar con ramas,
        commits, pull requests y resolución de conflictos.
    </p>

    <section>
        <h2>Lista dinámica generada con PHP</h2>
        <p>Estos son algunos pasos típicos del flujo de trabajo:</p>
        <ul>
            <?php
            $pasos = [
                "Clonar el repositorio del compañero",
                "Crear una rama dev propia",
                "Hacer cambios pequeños y frecuentes",
                "Subir la rama al remoto y abrir un Pull Request",
                "Revisar y mergear los cambios en main"
            ];

            foreach ($pasos as $paso) {
                echo "<li>" . htmlspecialchars($paso) . "</li>";
            }
            ?>
        </ul>
    </section>

    <section>
        <h2>Interacción básica con JavaScript</h2>
        <p>Pulsa el botón para marcar que has entendido el flujo de trabajo:</p>
        <button id="btn-entendido">Lo tengo claro 💪</button>
        <p id="mensaje-confirmacion" class="hidden"></p>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
