<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacion extends Model
{
	protected $fillable = [
	'codigo','nombre','descripcion','id_propietario','id_grupo','nombre_responsable','email_responsable','rfc_estacion','nro_estacion',
	'nroper_cre','calle','colonia','codigo_postal','estado','municipio','entidad_federal','referencia1','referencia2','telefono1','telefono2',
	'celular1','celular2','email_estacion','sitioweb','nro_instrumento','fecha_constitucion','notario_constitucion','ciudad_constitucion',
	'fecha_emision_replegal','nombre_replegal','nro_inst_replegal','fecha_replegal','notario_replegal','ciudad_replegal','nro_tanques_individuales',
	'nro_tanques_compartidos','capacidad_tanques','numero_islas','numero_despachadores','numero_empleados','fecha_inicio_operacion',
	'estatus_estacion','responsable_obra_diseno','numero_permiso_diseño','aditivo_gasolina1','aditivo_gasolina2','aditivo_diesel','forma_recepcion',
	'promedio_mensual_ventas','tienda_conveniencias','cobro_uso_banos','created_at','updated_at','estatus'
	];
}
