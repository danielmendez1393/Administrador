<?php
require_once($CONFIG['path']."/include/fpdf/fpdf.php");
class denunciapdf extends fpdf{
	var $datos;
	//Consultamos los datos del acta de inicio
 
 	function Header(){
		global $CONFIG;
		$this->image($CONFIG['path']."img/istai/istai_logo.jpg",5,3,45,25);
		$this->SetFont('times','B',10.5);
		$this->Cell(0,6,"Instituto Sonorense de Transparencia Acceso a la Información",0,1,"C");
		$this->Cell(0,6,"y Protección de Datos Personales",0,1,"C");
		$this->Cell(0,6,"DENUNCIA",0,1,"C");
		$this->rect(10,30,195,240);
	}
	
	function cuerpo(){
		global $datos,$archivos;
		
			
		$this->Multicell(195,15,"1. A quién Denuncia");
		$this->SetFont('times','B',10.5);	
		$this->Multicell(195,8,"Sujeto Obligado a Denunciar: ".$datos['so']);
			
		$this->SetFont('times','B',10.5);	
		$this->Multicell(195,15,"2. ¿Qué Denuncia?");
		$this->Multicell(195,8,"Descripción clara y precisa del incumplimiento.
");
		$this->SetFont('times','',10.5);
		$this->Multicell(195,8,$datos['queja']);
		$this->SetFont('times','B',10.5);
		$this->Multicell(195,15,"3. Desea Agregar Pruebas");
		$this->SetFont('times','',10.5);
		$this->Multicell(195,8," Adjuntar Pruebas");
		$this->Multicell(195,8," Pruebas presentadas:");
		foreach ($archivos as $key => $value) {
			$this->Multicell(195,8,$value);
			# code...
		}
		
		$this->SetFont('times','B',10.5);	
		$this->Multicell(195,15,"4. Datos del Denunciante");
		$this->Multicell(195,8," Nombre del Denunciante");	
		$this->SetFont('times','',10.5);	
		$this->Multicell(195,8,$datos['denunciante']);
		
			
		$this->SetFont('times','B',10.5);	
		$this->Multicell(195,15,"5. Notificaciones");
		$this->SetFont('times','',10.5);	
		$this->Multicell(195,8," Correo Electrónico: ".$datos['email']);
		
		
		
		
		
		
	}
	
	
	function Footer(){
		$this->SetFont('times','I',8);
		$this->SetY(-10);
		$this->Cell(0,10,' ',0,0,'C');
		$this->Cell(0,10,'F-ISTAI-AJ-002 Rev.- 1',0,0,'R');
	}
	
	

}

?>