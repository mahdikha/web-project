

    <?php
    
    require("fpdf/fpdf.php");
    $db=new PDO('mysql:host=localhost;dbname=rec_db', 'root', '');  
    
    class myPDF extends FPDF
    {
    	
    	function header()
    	{
    		$this->SetFont("Arial","B",14);
            $this->Cell(10,10,"SAMAANI ecole",'C');
            $this->Ln(20);
            $this->Cell(5,5,"liste des reclamations:",'C');
            $this->ln();
    	}
    	function headertable()
    	{
    		$this->SetFont('Times','B',12);
    		$this->Cell(40,10,'nom et prenom',1,0,'C');
    		$this->Cell(20,10,'id',1,0,'C');
    		$this->Cell(40,10,'adresse mail',1,0,'C');
    		$this->Cell(40,10,'objet',1,0,'C');
    		$this->Cell(60,10,'commentaire',1,0,'C');
    		$this->ln();
    	}
    	function viewsTable($db)
    	{ 
    		$this->SetFont('times','',12);
    		$stmt = $db->query("SElECT * From reclamation");
            while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
    		    $this->Cell(40,10,$data->nom_et_prenom,1,0,'C');
    		    $this->Cell(20,10,$data->id,1,0,'L');
    		    $this->Cell(40,10,$data->mail,1,0,'L');
    		    $this->Cell(40,10,$data->objet,1,0,'C');
    		    $this->Cell(60,10,$data->commentaire,1,0,'C');
    		    $this->ln();
            }

    	}
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("liste_des_reclamations.pdf", "D");


?>
