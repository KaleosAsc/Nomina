<?php
class ProcesadorFormulario {
    public function procesarDatos() {
        $nombre = $_POST['nombres'] ?? '';
        $salarioMensual = $_POST['salarioMensual'] ?? 0;
        $diasLaborados = $_POST['Dias Trabajados'] ?? 0;
        $valorHorasDiurnas = $_POST['Horas Diurnas'] ?? 0;
        $valorHorasNocturnas = $_POST['Horas Nocturnas'] ?? 0;
        $valorHorasDominicales = $_POST['Horas Dominicales'] ?? 0;
        return array(
            'nombre' => $nombre,
            'salarioMensual' => $salarioMensual,
            'diasLaborados' => $diasLaborados,
            'valorHorasDiurnas' => $valorHorasDiurnas,
            'valorHorasNocturnas' => $valorHorasNocturnas,
            'valorHorasDominicales' => $valorHorasDominicales
        );
    }
}
?>