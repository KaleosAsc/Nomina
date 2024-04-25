<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Convertidor de Nómina</title>
</head>
<body>
  <div class="enter">
    <div class="enter_div">
      <div class="texto">
        <h1>Bienvenido al Convertidor de Nómina</h1>
      </div>
      <div class="div_text">
        <section class="enter_text">
          <h2 class="enter_subtitle">
            ¿Buscas simplificar la gestión de nóminas? ¡Has llegado al lugar adecuado!
          </h2>
          <p class="enter_text_p">
            Nuestro convertidor de nómina basado en Excel ofrece una solución eficiente y fácil de usar para transformar datos de nómina en archivos compatibles con diversos sistemas de contabilidad y recursos humanos.
          </p>
          <form action="nom.php" method="post" >
            <input type="text" placeholder="Nombre Completo" name="nombres">
            <input type="number" placeholder="Salario" name="Salario">
            <input type="number" placeholder="Diastrabajados" name="Dias Trabajados">
            <input type="number" placeholder="HorasDiurna" name="Horas Diurnas">
            <input type="number" placeholder="HorasNocturnas" name="Horas Nocturnas">
            <input type="number" placeholder="HorasDominicales" name="Horas Dominicales">
            <input type="submit" value="ENVIAR" class="button_submit" />
          </form>
        </section>
        <section class="enter_media">
          <img src="images/archivo.jpg" alt="nomina" />
          <div class="circle"></div>
        </section>
      </div>
    </div>
  </div>
</body>
</html>