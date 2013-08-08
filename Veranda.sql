------------------------------
-- pgDesigner 1.2.17
--
-- Project    : Veranda
-- Date       : 08/08/2013 19:00:14.161
-- Description: 
------------------------------


-- Start Tabla's declaration
CREATE TABLE "cliente" (
"id" serial NOT NULL,
"nombre_razon_social" character varying(256) NOT NULL,
"contacto" character varying(256),
"calle" character varying(128),
"numero_ext_int" character varying(16),
"colonia" character varying(128),
"cp" int,
"telefono" character varying(12),
"telefono_extension" character varying(10),
"celular" int,
"correo_empresarial" character varying(128),
"correo_personal" character varying(128)
) WITHOUT OIDS;
ALTER TABLE "cliente" ADD CONSTRAINT "cliente_pk" PRIMARY KEY("id");
COMMENT ON TABLE "cliente" IS 'Catalogo de clientes.';
COMMENT ON COLUMN "cliente"."id" IS 'Id del cliente.';
COMMENT ON COLUMN "cliente"."nombre_razon_social" IS 'Nombre o razón social del cliente.';
COMMENT ON COLUMN "cliente"."contacto" IS 'Nombre del contacto del cliente.';
COMMENT ON COLUMN "cliente"."calle" IS 'Direccion, solo la calle.';
COMMENT ON COLUMN "cliente"."numero_ext_int" IS 'Numero exterior e interior del domicilio fiscal.';
COMMENT ON COLUMN "cliente"."colonia" IS 'Nombre de la colonia.';
COMMENT ON COLUMN "cliente"."cp" IS 'Codigo Postal de la dirección.';
COMMENT ON COLUMN "cliente"."telefono" IS 'Teléfono del contacto.';
COMMENT ON COLUMN "cliente"."celular" IS 'Numero de celular del cliente.';
COMMENT ON COLUMN "cliente"."correo_empresarial" IS 'Correo electronico de la empresa.';
COMMENT ON COLUMN "cliente"."correo_personal" IS 'Correo electrónico del cliente.';

CREATE TABLE "factura_cliente" (
"id" serial NOT NULL,
"id_cliente" int NOT NULL,
"razon_social" character varying(128) NOT NULL,
"rfc" character varying(15),
"contacto_seguimiento" character varying(256),
"calle" character varying(64),
"numero_ext_int" character varying(16),
"colonia" character varying(64),
"municipio" character varying(64),
"estado" character varying(128),
"pais" character varying(128),
"telefono" int(12),
"telefono_extension" character varying(10),
"segundo_telefono" int(12),
"telefono_extension_dos" character varying(10),
"correo_electronico" character varying(128),
"segmento" character varying(32),
"acercamiento" character varying(64)
) WITHOUT OIDS;
ALTER TABLE "factura_cliente" ADD CONSTRAINT "factura_cliente_pk" PRIMARY KEY("id");
COMMENT ON TABLE "factura_cliente" IS 'Catalogo de datos para facturar por cliente.';
COMMENT ON COLUMN "factura_cliente"."id" IS 'Id de los datos de facturación.';
COMMENT ON COLUMN "factura_cliente"."id_cliente" IS 'Id del cliente al que pertenecen estos datos de facturación.';
COMMENT ON COLUMN "factura_cliente"."razon_social" IS 'Nombre de la razón social del cliente.';
COMMENT ON COLUMN "factura_cliente"."rfc" IS 'RFC del cliente.';
COMMENT ON COLUMN "factura_cliente"."contacto_seguimiento" IS 'Contacto para darle seguimiento a la factura.';
COMMENT ON COLUMN "factura_cliente"."calle" IS 'Calle del domicilio fiscal.';
COMMENT ON COLUMN "factura_cliente"."numero_ext_int" IS 'Numero exterior e interior del domicilio fiscal.';
COMMENT ON COLUMN "factura_cliente"."colonia" IS 'Colonia del domicilio fiscal.';
COMMENT ON COLUMN "factura_cliente"."municipio" IS 'Municipio del domicilio fiscal.';
COMMENT ON COLUMN "factura_cliente"."estado" IS 'Estado del domicilio fiscal.';
COMMENT ON COLUMN "factura_cliente"."pais" IS 'Pais del domicilio fiscal.';
COMMENT ON COLUMN "factura_cliente"."telefono" IS 'Teléfono para darle seguimiento al pago.';
COMMENT ON COLUMN "factura_cliente"."segundo_telefono" IS 'Segundo teléfono.';
COMMENT ON COLUMN "factura_cliente"."correo_electronico" IS 'Correo electrónico.';
COMMENT ON COLUMN "factura_cliente"."segmento" IS 'Segmento al que pertenece.';
COMMENT ON COLUMN "factura_cliente"."acercamiento" IS 'Método de acercamiento a Veranda.';

CREATE TABLE "caratula" (
"id" serial NOT NULL,
"id_cliente" int NOT NULL,
"fecha_levantamiento" date NOT NULL,
"fecha_entrega" date,
"status" character varying(32)
) WITHOUT OIDS;
ALTER TABLE "caratula" ADD CONSTRAINT "caratula_pk" PRIMARY KEY("id");
COMMENT ON TABLE "caratula" IS 'Catalogo  de caratulas';
COMMENT ON COLUMN "caratula"."id" IS 'Identificador de la caratula';
COMMENT ON COLUMN "caratula"."id_cliente" IS 'referencia al nombre del cliente.';

CREATE TABLE "cotizacion" (
"id" serial NOT NULL,
"folio_caratula" int NOT NULL,
"fecha_cotizacion" date NOT NULL,
"precio_optimo" int,
"precio_sencillo" int NOT NULL,
"status" character varying(48) NOT NULL,
"fecha_ultimo_contacto" date,
"tipo_contacto" character varying(32),
"fecha_sigui_contacto" date,
"tipo_sigui_contacto" character varying(32),
"fecha_venta" date
) WITHOUT OIDS;
ALTER TABLE "cotizacion" ADD CONSTRAINT "cotizacion_pk" PRIMARY KEY("id");
COMMENT ON TABLE "cotizacion" IS 'Catalogo de cotizaciones';
COMMENT ON COLUMN "cotizacion"."fecha_cotizacion" IS 'Fecha en que se realizo la cotizacion.';
COMMENT ON COLUMN "cotizacion"."precio_optimo" IS 'Precio optimo.';
COMMENT ON COLUMN "cotizacion"."precio_sencillo" IS 'Precio sencillo.';
COMMENT ON COLUMN "cotizacion"."status" IS 'Status de la cotizacion, puede ser: pendiente de respuesta por parte del cliente, aceptada, rechazada';
COMMENT ON COLUMN "cotizacion"."fecha_ultimo_contacto" IS 'Fecha del ultimo contacto con el cliente.';
COMMENT ON COLUMN "cotizacion"."tipo_contacto" IS 'Tipo de contacto con el cliente:
LLamada telefonica.
Mail. 
Visita.';
COMMENT ON COLUMN "cotizacion"."fecha_sigui_contacto" IS 'Fecha del siguiente contacto.';
COMMENT ON COLUMN "cotizacion"."tipo_sigui_contacto" IS 'Tipo de contacto con el cliente:
LLamada telefonica.
Mail. 
Visita.';
COMMENT ON COLUMN "cotizacion"."fecha_venta" IS 'Cuando el status pase a ser cotizacion aceptada.';

-- End Tabla's declaration

-- Start Relación's declaration
ALTER TABLE "factura_cliente" ADD CONSTRAINT "factura_cliente_fkey1" FOREIGN KEY ("id_cliente") REFERENCES "cliente"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "cotizacion" ADD CONSTRAINT "cotizacion_fkey1" FOREIGN KEY ("folio_caratula") REFERENCES "caratula"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE "caratula" ADD CONSTRAINT "caratula_fkey1" FOREIGN KEY ("id_cliente") REFERENCES "cliente"("id") ON UPDATE CASCADE ON DELETE RESTRICT;

-- End Relación's declaration

