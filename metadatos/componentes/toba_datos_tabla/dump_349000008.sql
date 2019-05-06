------------------------------------------------------------
--[349000008]--  so_empresa 
------------------------------------------------------------

------------------------------------------------------------
-- apex_objeto
------------------------------------------------------------

--- INICIO Grupo de desarrollo 349
INSERT INTO apex_objeto (proyecto, objeto, anterior, identificador, reflexivo, clase_proyecto, clase, punto_montaje, subclase, subclase_archivo, objeto_categoria_proyecto, objeto_categoria, nombre, titulo, colapsable, descripcion, fuente_datos_proyecto, fuente_datos, solicitud_registrar, solicitud_obj_obs_tipo, solicitud_obj_observacion, parametro_a, parametro_b, parametro_c, parametro_d, parametro_e, parametro_f, usuario, creacion, posicion_botonera) VALUES (
	'soeva', --proyecto
	'349000008', --objeto
	NULL, --anterior
	NULL, --identificador
	NULL, --reflexivo
	'toba', --clase_proyecto
	'toba_datos_tabla', --clase
	'349000001', --punto_montaje
	'dt_so_empresa', --subclase
	'datos/dt_so_empresa.php', --subclase_archivo
	NULL, --objeto_categoria_proyecto
	NULL, --objeto_categoria
	'so_empresa', --nombre
	NULL, --titulo
	NULL, --colapsable
	NULL, --descripcion
	'soeva', --fuente_datos_proyecto
	'soeva', --fuente_datos
	NULL, --solicitud_registrar
	NULL, --solicitud_obj_obs_tipo
	NULL, --solicitud_obj_observacion
	NULL, --parametro_a
	NULL, --parametro_b
	NULL, --parametro_c
	NULL, --parametro_d
	NULL, --parametro_e
	NULL, --parametro_f
	NULL, --usuario
	'2019-03-25 11:35:34', --creacion
	NULL  --posicion_botonera
);
--- FIN Grupo de desarrollo 349

------------------------------------------------------------
-- apex_objeto_db_registros
------------------------------------------------------------
INSERT INTO apex_objeto_db_registros (objeto_proyecto, objeto, max_registros, min_registros, punto_montaje, ap, ap_clase, ap_archivo, tabla, tabla_ext, alias, modificar_claves, fuente_datos_proyecto, fuente_datos, permite_actualizacion_automatica, esquema, esquema_ext) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	NULL, --max_registros
	NULL, --min_registros
	'349000001', --punto_montaje
	'1', --ap
	NULL, --ap_clase
	NULL, --ap_archivo
	'so_empresa', --tabla
	NULL, --tabla_ext
	NULL, --alias
	'0', --modificar_claves
	'soeva', --fuente_datos_proyecto
	'soeva', --fuente_datos
	'1', --permite_actualizacion_automatica
	'public', --esquema
	'public'  --esquema_ext
);

------------------------------------------------------------
-- apex_objeto_db_registros_col
------------------------------------------------------------

--- INICIO Grupo de desarrollo 349
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000001', --col_id
	'id_empresa', --columna
	'E', --tipo
	'1', --pk
	'so_empresa_id_empresa_seq', --secuencia
	NULL, --largo
	NULL, --no_nulo
	'1', --no_nulo_db
	'0', --externa
	NULL  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000002', --col_id
	'razon_social', --columna
	'C', --tipo
	'0', --pk
	NULL, --secuencia
	'100', --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	'0', --externa
	NULL  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000003', --col_id
	'cuit', --columna
	'E', --tipo
	'0', --pk
	NULL, --secuencia
	NULL, --largo
	NULL, --no_nulo
	'1', --no_nulo_db
	'0', --externa
	NULL  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000004', --col_id
	'cod_postal', --columna
	'E', --tipo
	'0', --pk
	NULL, --secuencia
	NULL, --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	'0', --externa
	NULL  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000005', --col_id
	'provincia', --columna
	'C', --tipo
	'0', --pk
	NULL, --secuencia
	'150', --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	'0', --externa
	NULL  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000006', --col_id
	'direccion', --columna
	'C', --tipo
	'0', --pk
	NULL, --secuencia
	'150', --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	'0', --externa
	NULL  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000007', --col_id
	'id_provincia_afip', --columna
	'E', --tipo
	'0', --pk
	NULL, --secuencia
	NULL, --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	'0', --externa
	NULL  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000008', --col_id
	'localidad', --columna
	'C', --tipo
	'0', --pk
	NULL, --secuencia
	'150', --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	'0', --externa
	NULL  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000009', --col_id
	'email', --columna
	'C', --tipo
	'0', --pk
	NULL, --secuencia
	'150', --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	'0', --externa
	NULL  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'soeva', --objeto_proyecto
	'349000008', --objeto
	'349000010', --col_id
	'telefono', --columna
	'C', --tipo
	'0', --pk
	'', --secuencia
	'30', --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	'0', --externa
	'so_empresa'  --tabla
);
--- FIN Grupo de desarrollo 349
