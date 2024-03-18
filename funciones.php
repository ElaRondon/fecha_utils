<?php

/**
 * Calcula la edad partiendo de una fecha de nacimiento
 * @param string $fechaNacimiento Fecha de nacimiento en formato `YYYY-mm-dd`
 */
function calcularEdad(string $fechaNacimiento): int {
  $fechaNacimiento = new DateTimeImmutable($fechaNacimiento);
  $fechaNacimientoTimestamp = $fechaNacimiento->getTimestamp();
  $timestampActual = time();

  $diferencia = $timestampActual - $fechaNacimientoTimestamp;

  $edad = date('Y', $diferencia);
  $edad -= 1970;

  return abs($edad);
}

/**
 * Formatea una fecha/hora al formato latinoamericano `dd/mm/YYYY`
 * @param string $fechaCruda Una fecha y hora en formato `YYYY-mm-dd HH:ii:ss`
 */
function formatearFecha(string $fechaCruda): string {
  $datetime = new DateTimeImmutable($fechaCruda);

  return $datetime->format('d/m/Y');
}