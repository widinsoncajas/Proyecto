const express = require('express');
const path = require('path');
const { exec } = require('child_process'); // Para ejecutar comandos del sistema
const app = express();

// Puerto donde el servidor escuchará
const port = process.env.PORT || 3000;

// Ruta para ejecutar y servir el archivo PHP en la página principal (administrador.php)
app.get('/', (req, res) => {
    exec(`php ${path.join(__dirname, 'administrador.php')}`, (err, stdout, stderr) => {
        if (err) {
            console.error('Error ejecutando administrador.php:', err);
            return res.status(500).send('Error ejecutando el archivo PHP');
        }
        if (stderr) {
            console.error('stderr (administrador.php):', stderr);
            return res.status(500).send('Error en la ejecución de PHP');
        }
        res.send(stdout);  // Devuelve la salida del archivo PHP
    });
});

// Ruta para ejecutar y servir el archivo PHP en clien_list.php
app.get('/clien_list.php', (req, res) => {
    const phpFilePath = path.join(__dirname, 'clien_list.php');
    exec(`php ${phpFilePath}`, (err, stdout, stderr) => {
        if (err) {
            console.error('Error ejecutando clien_list.php:', err);
            return res.status(500).send(`Error ejecutando el archivo PHP en clien_list.php: ${err.message}`);
        }
        if (stderr) {
            console.error('stderr (clien_list.php):', stderr);
            return res.status(500).send(`Error en la ejecución de PHP en clien_list.php: ${stderr}`);
        }
        res.send(stdout);  // Devuelve la salida del archivo PHP
    });
});

// Servir archivos estáticos
app.use(express.static(path.join(__dirname, 'public')));
app.use('/imagenes', express.static(path.join(__dirname, 'imagenes')));

// Redirigir a la ruta /PROYECTO_TESIS/clien_list (sirve el archivo tal cual)
app.get('/PROYECTO_TESIS/clien_list', (req, res) => {
    res.sendFile(path.join(__dirname, 'PROYECTO_TESIS', 'clien_list'));
});

// Iniciar el servidor una sola vez
app.listen(port, () => {
    console.log(`Servidor corriendo en http://localhost:${port}`);
});