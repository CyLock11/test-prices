# Test Prices

Proyecto sencillo de Laravel para practicar controladores y tests.

## Qué hace

El controlador `PriceController` tiene dos funciones:

- `toDollars($euros)`: convierte euros a dólares usando el cambio fijo de 1 € = 1,11 $.
- `discount($price, $percent)`: calcula el precio después de aplicar un descuento.

## Ejecutar los tests

Abre una terminal en la carpeta del proyecto y ejecuta:

```bash
php artisan test --filter=PriceControllerTest
```

Los tests comprueban la conversión de moneda, un descuento del 20 % y un descuento del 0 %.
