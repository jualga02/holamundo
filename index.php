<?php
 require_once __DIR__ . '/./src/Saludo.php';
 use App\Saludo;
 $saludo = new Saludo();
 $mensaje = '';
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultado = $saludo->generarSaludoAleatorio();
    $mensaje = $resultado['saludo'];
    $codigo = $resultado['codigo'];
 }
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo aleatorio</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center;
            height: 100vh; background-color: #f0f0f0; margin: 0; }
        .container {text-align:center; background-color:#fff; padding:20px; border-radius:8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
        button {padding: 10px 20px;font-size:16px;cursor:pointer;border:none;border-radius:5px;background-color:#007bff;color:#fff;}
        p { font-size: 18px; margin-top: 20px; }
    </style>
 </head>
 <body>
    <div class="container">
        <h1>Generador aleatorio de Hola Mundos</h1>
        <form method="post">
            <button type="submit">Generar</button>
        </form>
        <?php if (!empty($mensaje))
            echo "<p><b>".$codigo.":</b> ".htmlspecialchars($mensaje)."</p>";
        ?>
    </div>
 </body>
 </html>