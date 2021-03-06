<?php

mysql_query ("CREATE TABLE IF NOT EXISTS 1_centro (
  COD_CENTRO varchar(10) DEFAULT NULL,
  PAGADO varchar(2) DEFAULT NULL,
  NOMBRE_LOGO varchar(255) DEFAULT NULL,
  CMLOGO int(3) DEFAULT NULL,
  NOMBRE_LOGO_CONSELLERIA varchar(255) DEFAULT NULL,
  CMLOGO_CONSE int(3) DEFAULT NULL,
  FRASE1 varchar(50) DEFAULT NULL,
  FRASE2 varchar(50) DEFAULT NULL,
  FRASE3 varchar(50) DEFAULT NULL,
  CMLOGO_PIE int(3) DEFAULT NULL,
  NOMBRE_LOGO_PIE varchar(255) DEFAULT NULL,
  POBLACION varchar(100) DEFAULT NULL,
  PROVINCIA varchar(50) DEFAULT NULL,
  cp varchar(50) DEFAULT NULL,
  DIRECCION varchar(100) DEFAULT NULL,
  TELEFONO varchar(9) DEFAULT NULL,
  FAX varchar(9) DEFAULT NULL,
  NOMBRE_CENTRO varchar(100) DEFAULT NULL,
  EMAIL varchar(100) DEFAULT NULL,
  WEB varchar(100) DEFAULT NULL,
  CIF varchar(50) DEFAULT NULL,
  BANCO varchar(50) DEFAULT NULL,
  CUENTA varchar(50) DEFAULT NULL,
  secretari varchar(255) NOT NULL,
  tipo_registro varchar(1) NOT NULL,
  inicio_entradas int(11) NOT NULL,
  inicio_salidas int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

// ////////////////////////////////////////////////////////

//
// Estructura de tabla para la tabla 1_permisos
//

mysql_query ("CREATE TABLE IF NOT EXISTS 1_permisos (
  id_tipo varchar(500) NOT NULL,
  cod_centro varchar(100) NOT NULL,
  administrador varchar(1) NOT NULL,
  tipo_permisos varchar(1) NOT NULL,
  permisos varchar(1) NOT NULL,
  crear_usuarios varchar(1) NOT NULL,
  definir_centro varchar(1) NOT NULL,
  subir_documentos varchar(1) NOT NULL,
  compartir_documentos varchar(1) NOT NULL,
  modificar_documentos varchar(1) NOT NULL,
  entradas varchar(1) NOT NULL,
  salidas varchar(1) NOT NULL,
  listados varchar(1) NOT NULL,
  configuracion varchar(1) NOT NULL,
  registro varchar(1) NOT NULL,
  imprimir_libros varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

// ////////////////////////////////////////////////////////

//
// Estructura de tabla para la tabla 1_tipos_permisos
//

mysql_query ("CREATE TABLE IF NOT EXISTS 1_tipos_permisos (
  id_tipo varchar(500) NOT NULL,
  tipo varchar(255) NOT NULL,
  cod_centro varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

// ////////////////////////////////////////////////////////

//
// Estructura de tabla para la tabla documentos_compartidos
//

mysql_query ("CREATE TABLE IF NOT EXISTS documentos_compartidos (
  id_documentos varchar(500) NOT NULL,
  numero_padre varchar(255) NOT NULL,
  numero_hijo varchar(255) NOT NULL,
  tipo varchar(10) NOT NULL,
  nombre varchar(255) NOT NULL,
  link varchar(500) NOT NULL,
  COD_CENTRO varchar(20) NOT NULL,
  fecha date NOT NULL,
  creado varchar(255) NOT NULL,
  privada varchar(2) NOT NULL,
  usuario varchar(20) NOT NULL,
  tipo_archivo varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

// ////////////////////////////////////////////////////////

//
// Estructura de tabla para la tabla registro
//

mysql_query ("CREATE TABLE IF NOT EXISTS registro (
  id_registro varchar(100) DEFAULT NULL,
  codigo_registro int(11) DEFAULT NULL,
  fecha_entrada_salida date DEFAULT NULL,
  fecha_registro date DEFAULT NULL,
  tipo_documento varchar(100) DEFAULT NULL,
  entrada_salida varchar(1) DEFAULT NULL,
  asunto longtext,
  observaciones longtext,
  origen varchar(255) DEFAULT NULL,
  procedencia varchar(255) DEFAULT NULL,
  organismo varchar(255) DEFAULT NULL,
  destino varchar(255) DEFAULT NULL,
  anyo varchar(4) DEFAULT NULL,
  cod_centro varchar(20) DEFAULT NULL,
  ruta_archivo varchar(500) NOT NULL,
  dirigido varchar(500) NOT NULL,
  contestacion text NOT NULL,
  atendido varchar(1) NOT NULL,
  nombre_archivo text NOT NULL,
  KEY PRIMARIO (id_registro),
  FULLTEXT KEY BUSQUEDA (asunto,observaciones,nombre_archivo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

// ////////////////////////////////////////////////////////

//
// Estructura de tabla para la tabla registro_destino
//

mysql_query ("CREATE TABLE IF NOT EXISTS registro_destino (
  id_destino varchar(255) NOT NULL,
  nombre_val varchar(255) NOT NULL,
  nombre_cas varchar(255) NOT NULL,
  cod_centro varchar(20) NOT NULL,
  entrada_salida varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

// ////////////////////////////////////////////////////////

//
// Estructura de tabla para la tabla registro_organismo
//

mysql_query ("CREATE TABLE IF NOT EXISTS registro_organismo (
  id_organismo varchar(255) NOT NULL,
  nombre_val varchar(255) NOT NULL,
  nombre_cas varchar(255) NOT NULL,
  cod_centro varchar(20) NOT NULL,
  entrada_salida varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

// ////////////////////////////////////////////////////////

//
// Estructura de tabla para la tabla registro_origen
//

mysql_query ("CREATE TABLE IF NOT EXISTS registro_origen (
  id_origen varchar(255) NOT NULL,
  nombre_val varchar(255) NOT NULL,
  nombre_cas varchar(255) NOT NULL,
  cod_centro varchar(20) NOT NULL,
  entrada_salida varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

// ////////////////////////////////////////////////////////

//
// Estructura de tabla para la tabla registro_tipo_documento
//

mysql_query ("CREATE TABLE IF NOT EXISTS registro_tipo_documento (
  id_tipo_documento varchar(255) NOT NULL,
  nombre_val varchar(255) NOT NULL,
  nombre_cas varchar(255) NOT NULL,
  cod_centro varchar(20) NOT NULL,
  entrada_salida varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

// ////////////////////////////////////////////////////////

//
// Estructura de tabla para la tabla usuarios
//

mysql_query ("CREATE TABLE IF NOT EXISTS usuarios (
  contra varchar(250) DEFAULT NULL,
  usuario varchar(20) NOT NULL,
  email344 varchar(255) DEFAULT NULL,
  email2 int(1) NOT NULL,
  email varchar(255) NOT NULL,
  nombre_usuario varchar(255) DEFAULT NULL,
  PERMISO varchar(20) DEFAULT NULL,
  COD_CENTRO varchar(255) DEFAULT NULL,
  anyo varchar(4) DEFAULT NULL,
  primera_vez varchar(2) DEFAULT 'si',
  tel1 varchar(9) NOT NULL,
  tel2 varchar(9) NOT NULL,
  direccion varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");


?>