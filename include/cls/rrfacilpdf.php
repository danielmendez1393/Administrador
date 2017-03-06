<?php
require_once($CONFIG['path']."/include/fpdf/fpdf.php");
class rrfacil extends fpdf{
	var $datosRR;
	//Consultamos los datos del acta de inicio
 
 	function Header(){
		global $CONFIG;
		$this->image($CONFIG['path']."img/istai/istai_logo.jpg",5,3,45,25);
		$this->SetFont('times','B',10.5);
		$this->Cell(0,6,"Instituto Sonorense de Transparencia Acceso a la Información y Protección de Datos Personales",0,1,"C");
		$this->Cell(0,6,"Dirección General de Investigación y Asuntos Jurídicos",0,1,"C");
		$this->Cell(0,6,"Recurso de Revisión",0,1,"C");
		$this->rect(10,30,195,240);
	}
	
	function cuerpo(){
		global $datos,$archivos;
		
		$this->SetFillColor("155");
		$this->rect(10,30,195,10,"F");
		$this->Multicell(195,15,"1. Datos del Recurrente o de su representante");
		$this->SetFont('times','',10.5);	
		$this->Multicell(195,8," Solicitante: ".$datos['solicitante']);
		$this->Multicell(195,8," Denominación o Razón Social: ".$datos['razonsocial']);
		$this->Multicell(195,8," Representante (en su caso): ".$datos['representante']);
		$this->rect(10,80,195,10,"F");
		$this->setY(80);
		$this->SetFont('times','B',10.5);	
		$this->Multicell(195,15,"2. Correo Electrónico para recibir notificaciones");
		$this->SetFont('times','',10.5);	
		$this->Multicell(195,8," Correo Electrónico: ".$datos['email']);
		$this->rect(10,105,195,10,"F");
		$this->setY(105);
		$this->SetFont('times','B',10.5);	
		$this->Multicell(195,15,"3. El Sujeto Obligado Responsable");
		$this->Multicell(195,8," Instancia o Dependencia que ocurrió en el acto u omisión reclamado:");
		$this->SetFont('times','',10.5);	
		$this->Multicell(195,8,$datos['sobligado']);
		$this->rect(10,145,195,10,"F");
		$this->setY(145);
		$this->SetFont('times','B',10.5);	
		$this->Multicell(195,15,"4. El Acto u Omision que se reclama");
		$this->Multicell(195,8," Explique su queja o inconformidad y, de contar con el dato, indique el número de folio con que se registró su solicitud de acceso a la información pública.");
		$this->SetFont('times','',10.5);
		$this->Multicell(195,8,$datos['queja']);
		$this->addPage();
		$this->rect(10,30,195,10,"F");
		$this->SetFont('times','B',10.5);
		$this->Multicell(195,15,"5. Hechos o Agravios Impugnados");
		$this->SetFont('times','',10.5);
		$this->Multicell(195,8," Describir en forma detallada los hechos y agravios causados por el acto o resolución impugnados.");
		$this->Multicell(195,8,$datos['agravio']);
		$this->rect(10,145,195,10,"F");
		$this->setY(145);
		$this->SetFont('times','B',10.5);
		$this->Multicell(195,15,"5. Enumeración de Pruebas");
		$this->SetFont('times','',10.5);
		$this->Multicell(195,8," En caso de existir, enlistar y describir aquí las pruebas conducentes (documentos, archivos y/o declaraciones testimoniales), de las cuales puede usted anexar copias (presentando los originales para cotejar).");
		$this->Multicell(195,8,$datos['descpruebas']);
		$this->Multicell(195,8," Pruebas presentadas:");
		foreach ($archivos as $key => $value) {
			$this->Multicell(195,8,$value);
			# code...
		}
		
	}
	
	
	function Footer(){
		$this->SetFont('times','I',8);
		$this->SetY(-10);
		$this->Cell(0,10,' ',0,0,'C');
		$this->Cell(0,10,'F-ITIES-AJ-001 Rev.- 1',0,0,'R');
	}
	
	

}

?>