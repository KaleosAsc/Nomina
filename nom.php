<?php
    class Empleado {
    private $nombre;
    private $salarioMensual;
    private $diasLaborados;
    private $valorHorasDiurnas;
    private $valorHorasNocturnas;
    private $valorHorasDominicales;
    private $valorTotalHorasExtras;
    private $valorSalud;
    private $valorPension;
    private $valorSindicatos;
    private $deducido;
    private $devenegado;
    public function __construct($nombre, $salarioMensual, $diasLaborados, $valorHorasDiurnas, $valorHorasDominicales, $valorHorasNocturnas) {
        $this->nombre = $nombre;
        $this->salarioMensual = $salarioMensual;
        $this->diasLaborados = $diasLaborados;
        $this->valorHorasDiurnas = $valorHorasDiurnas;
        $this->valorHorasNocturnas = $valorHorasNocturnas;
        $this->valorHorasDominicales = $valorHorasDominicales;
    }   
    public function getNombre() {
    return $this->nombre;
    }

    public function getSalarioMensual() {
    return $this->salarioMensual;
}

    public function getDiasLaborados() {
    return $this->diasLaborados;
}

    public function getValorHorasDiurnas() {
    return $this->valorHorasDiurnas;
}

    public function getValorHorasNocturnas() {
    return $this->valorHorasNocturnas;
}

    public function getValorHorasDominicales() {
    return $this->valorHorasDominicales;
}
    public function CalcularSaldoRecibido() {
        return (($this->salarioMensual * $this->diasLaborados) / 30);
    }

    public function CalcularTotalHorasExtras(): int {
        return (($this->valorHorasDiurnas * 1500) + ($this->valorHorasNocturnas * 2000) + ($this->valorTotalHorasExtras * 2000));
    }

    public function CalcularDevenegado() {
        $valorTotalHorasExtras = $this->CalcularTotalHorasExtras();
        return ($this->salarioMensual + floatval($valorTotalHorasExtras));
    }

    public function CalcularSalud() {
        return ($this->salarioMensual * 0.08);
    }

    public function CalcularPension() {
        return ($this->salarioMensual * 0.04);
    }

    public function CalcularSindicatos() {
        return ($this->salarioMensual * 0.02);
    }

    public function CalcularDeducido() {
        $valorSalud = $this->CalcularSalud();
        $valorPension = $this->CalcularPension();
        $valorSindicatos = $this->CalcularSindicatos();

        return ($valorSalud + $valorPension + $valorSindicatos);
    }

    public function CalcularValorNeto() {
        $devenegado = $this->CalcularDevenegado();
        $deducido = $this->CalcularDeducido();
        return ($devenegado - $deducido);    
    }
}    

$Empleado = new Empleado($_REQUEST['nombres'] ?? '', $_REQUEST['Salario'] ?? 0, $_REQUEST['DiasTrabajados'] ?? 0, $_REQUEST['HorasDiurnas'] ?? 0, $_REQUEST['HorasNocturnas'] ?? 0, $_REQUEST['HorasDominicales'] ?? 0);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Estilos2.css">
    <title>Impresión de nómina</title>
  </head>
  <body>
    <div class="enter">
      <div class="enter_div">
        <div class="enter_div_title">
          <h1>Empleado</h1>
          </select>
        </div>
        <div class="div_text">
          <div class="enter_text">
            <table class="tabla">
              <tbody>
                <tr>
                  <td class="frst">Nombre</td>
                  <td class="scnd"> <?php echo $Empleado->getNombre(); ?> </td>
                </tr>
                <tr>
                  <td class="frst">Salario Mensual</td>
                  <td class="scnd"> <?php echo $Empleado->getSalarioMensual(); ?> </td>
                </tr>
                <tr>
                  <td class="frst">Dias Laborados</td>
                  <td class="scnd"><?php echo  $Empleado->getDiasLaborados(); ?></td>
                </tr>
                <tr>
                  <td class="frst">Horas extras valor total</td>
                  <td class="scnd"><?php echo  $Empleado->CalcularTotalHorasExtras(); ?></td>
                </tr>
                <tr>
                  <td class="frst">Devenegado</td>
                  <td class="scnd"><?php echo  $Empleado->CalcularDevenegado(); ?></td>
                </tr>
                <tr>
                  <td class="frst">Valor salud</td>
                  <td class="scnd"><?php echo  $Empleado->CalcularSalud(); ?></td>
                </tr>
                <tr>
                  <td class="frst">Valor pensión</td>
                  <td class="scnd"><?php echo  $Empleado->CalcularPension(); ?></td>
                </tr>
                <tr>
                  <td class="frst">Deducido</td>
                  <td class="scnd"><?php echo  $Empleado->CalcularDeducido(); ?></td>
                </tr>
                <tr>
                  <td class="frst">Valor total neto</td>
                  <td class="scnd"><?php echo  $Empleado->CalcularValorNeto(); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>