<?php 
	const BASE_URL = "http://localhost/tienda_virtual";
	//const BASE_URL = "http://localhost:84/tienda_virtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	//const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	//const URLPAYPAL = "https://www.sandbox.paypal.com";
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AaVLcfzcOY1a3ACPS_VdnSSI4kcIA0rbI2nPF8SEruALD0FR5yqU2GStZ1CIpNkAO1D5R-bw4SyFWxx4";
	const SECRET = "EEZuRYoJkwTIE9xBfirQsGCmGoFAu_DBJLgBQANiMeBsUgHRnPl-EJL7PBwti7Ff3VsXxnbAd80OdXzT";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@yinisport.com";
	const NOMBRE_EMPESA = "YiniSport";
	const WEB_EMPRESA = "https://www.instagram.com/yinisport/";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Sus operadores residen en Dajabón, RD.";
	const TELEMPRESA = "+1 8492076714";
	const WHATSAPP = "+1 8492076714";
	const EMAIL_EMPRESA = "yinetfernandez809@gmail.com";
	const EMAIL_PEDIDOS = "yinetfernandez809@gmail.com"; 
	const EMAIL_SUSCRIPCION = "yinetfernandez809@gmail.com";
	const EMAIL_CONTACTO = "yinetfernandez809@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'franyiliriano';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 250;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/profile.php?id=100077373098050";
	const INSTAGRAM = "https://www.instagram.com/franyi_liriano/";
	

 ?>