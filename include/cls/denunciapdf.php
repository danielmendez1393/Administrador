<?php
require_once($CONFIG['path']."/include/fpdf/fpdf.php");
class denunciapdf extends fpdf{
	var $datos;
	//Consultamos los datos del acta de inicio
 
 	function Header(){
		global $CONFIG;
		$this->image($CONFIG['path']."img/istai/istai_logo.jpg",5,10,45,25);
		$this->SetFont('times','B',12);
		$this->Cell(0,6,"INSTITUTO SONORENSE DE TRANSPARENCIA ACCESO A LA INFORMACIÓN",0,1,"C");
		$this->Cell(0,6,"Y PROTECCIÓN DE DATOS PERSONALES",0,1,"C");
		$this->Cell(0,6,"DENUNCIA",0,1,"C");
		$this->Cell(0,6, date('d-m-Y'),0,1,"R");
		$this->rect(9,40,195,220);
	}
	
	function cuerpo(){
		$this->setY(45);
		global $datos,$archivos;
		$this->SetFillColor("155");
		$this->SetFont('times','B',12);
		$this->Multicell(195,15," NOMBRE DEL SUJETO OBLIGADO A DENUNCIAR: ");
		$this->SetFont('times','',12);	
		$this->Multicell(195,8,"".$datos['so']);
		$this->SetFont('times','B',12);	
		$this->Multicell(195,15,"DESCRIPCIÓN CLARA Y PRECISA DEL INCUMPLIMIENTO QUE DENUNCIA:");
		$this->SetFont('times','',12);
		$this->Multicell(195,8,$datos['queja']);
		
		$this->SetFont('times','B',12);
		$this->Multicell(195,15,"PROBANZAS QUE ACREDITEN LA FALTA DE OBLIGACIONES (opcional):");
		$this->SetFont('times','',12);
		foreach ($archivos as $key => $value) {
			$this->Multicell(195,8,$value);
			# code...
		}
		$this->SetFont('times','B',12);	
		$this->Multicell(195,15,"NOMBRE DEL DENUNCIANTE (OPCIONAL):");
		$this->SetFont('times','',12);	
		$this->Multicell(195,8,$datos['denunciante']);
		$this->SetFont('times','B',12);	
		$this->Multicell(195,15,"PERFIL DEL DENUNCIANTE (OPCIONAL, PARA FINES ESTADISTICOS):");
		$this->SetFont('times','',12);	
		$this->Multicell(195,8,$datos['perfil']);
		
		$this->SetFont('times','B',12);	
		$this->Multicell(195,15,"CORREO ELECTRONICO PARA OÍR Y RECIBIR NOTIFICACIONES:");
		$this->SetFont('times','',12);	
		$this->Multicell(195,8,$datos['email']);
		
		$this->Multicell(195,8," INFORMACIÓN: ");
		
		$this->Multicell(195,6,"Segun el Artículo 90 de la Ley General de Transparencia y Acceso a la Información el procedimiento de la denuncia se integra por las siguientes etapas:");
		$this->Multicell(195,6,"	I. Presentación de la denuncia ante los Organismos garantes;");
		$this->Multicell(195,6,"	II. Solicitud por parte del organismo garante de un informe al sujeto obligado;");
		$this->Multicell(195,6,"	III. Resolución de la denuncia, y");
		$this->Multicell(195,6,"	IV. Ejecución de la resolución de la denuncia");
		
		
		
		
		
		
	}
	
	
	function Footer(){
		$this->SetFont('times','I',8);
		$this->SetY(-10);
		$this->Cell(0,10,' ',0,0,'C');
		$this->Cell(0,10,'F-ISTAI-AJ-002 Rev.- 1',0,0,'R');
	}
	
	

}

?>