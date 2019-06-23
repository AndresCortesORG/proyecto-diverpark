-- drop database diverpark;
use diverpark;

-- 1. Reporte de ventas
-- 2. Productos vendidos y datos del cliente que hace la compra
select nombre_producto, primer_nombre, primer_apellido, numero_documento
from factura f 
join usuario us
on f.fk_numero_documento = us.numero_documento;

-- 3. Tipo de pago preferido
select max(fk_id_tpago)
from factura f 
join tipo_pago tp
on f.fk_id_tpago = tp.id_tpago;



-- 4. Categoría de productos que tiene mayores ventas
select max(nomb_producto)
from factura f 
join tipo_producto tpr
on f.fk2_id_producto = tpr.id_producto;

-- 5. Número de usarios registrados - order by
select primer_apellido, primer_nombre from usuario order by primer_apellido asc ;

-- 6. Producto más vendido

-- 7. Iventario de productos
-- 8. Los usuarios con más compras realizadas
-- 9. Usuario con la compra de mayor valor


-- 10. Usuarios registrados con tipo de documento diferente de "CC"
select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, siglas
from usuario us
join tipo_documento tp
on us.fk_id_tipodoc = tp.id_tipodoc where tp.siglas <> 'CC';


-- 11. Ventas por ciudad o localidad

-- 12. Usuarios por departamento o ciudad
select primer_nombre, primer_apellido, segundo_apellido, departamento, ciudad
from usuario where departamento = 'tolima';

-- 13. Facturas donde se evidencia cliente, compra, valor, fecha, hora (editado) 
select id_factura, fk_numero_documento, nombre_producto, total, fecha
from factura;







/*
--  10. Nombres, apellidos y tipo de pago con el que adquirió el plan
select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, siglas
from usuario us 
join tipo_producto tp on tp.fk_id_numero_documento = us.numero_documento
join factura f on f.fk_id_producto = tp.id_producto
join tipo_pago tpa on f.fk_id_tpago = tpa.id_tpago ;*/