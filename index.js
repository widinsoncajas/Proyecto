const express = require('express');
const path = require('path');
const { exec } = require('child_process'); // Para ejecutar comandos del sistema
const app = express();

// Ruta para ejecutar y servir el archivo PHP en la página principal (inicio.php)
app.get('/', (req, res) => {
  // Comando para ejecutar el archivo PHP (inicio.php)
  exec('php ' + path.join(__dirname, 'administrador.php'), (err, stdout, stderr) => {
    if (err) {
      console.error('Error ejecutando el archivo PHP:', err);
      return res.status(500).send('Error ejecutando el archivo PHP');
    }
    if (stderr) {
      console.error('stderr:', stderr);
      return res.status(500).send('Error en la ejecución de PHP');
    }
    res.send(stdout);  // Devuelve la salida del archivo PHP
  });
});

// Ruta para ejecutar y servir el archivo PHP en GAMA_FAMILIAR
app.get('/clien_list.php', (req, res) => {
  const phpFilePath = path.join(__dirname, 'clien_list.php');
  exec(`php ${phpFilePath}`, (err, stdout, stderr) => {
    if (err) {
      // Si hay un error al ejecutar el archivo PHP, muestra el error completo en la consola y devuelve el error al navegador
      console.error('Error ejecutando el archivo PHP:', err);
      return res.status(500).send(`Error ejecutando el archivo PHP en clien_list.php: ${err.message}`);
    }
    if (stderr) {
      // Si hay errores en stderr (salida de error de PHP), muestra los detalles y devuelve el error al navegador
      console.error('stderr:', stderr);
      return res.status(500).send(`Error en la ejecución de PHP en clien_list.php: ${stderr}`);
    }
    res.send(stdout);  // Devuelve la salida del archivo PHP
  });
});


app.use(express.static(path.join(__dirname, 'public')));

// Redirigir a la ruta CAMARO_RAPTOR/GAMA_FAMILIAR/GAMA_FAMI.php
app.get('/PROYECTO_TESIS/clien_list', (req, res) => {
  res.sendFile(path.join(__dirname, 'PROYECTO_TESIS', 'clien_list'));
});

app.listen(port, () => {
  console.log(`Servidor corriendo en http://localhost:${port}`);
});





// Configuración para servir archivos estáticos (imágenes, CSS, JS)

app.use('/imagenes', express.static(path.join(__dirname, 'imagenes')));
// Puerto donde el servidor escuchará
const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Servidor corriendo en puerto ${port}`);
});
