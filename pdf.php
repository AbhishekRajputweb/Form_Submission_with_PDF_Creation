

<?php
      if(!empty($_POST['submit'])){
        $name = $_POST['name']; // name is brought here
        $number = $_POST['number'];// number is brought here
        $city = $_POST['city'];// city is brought here

       
        require('fpdf185/fpdf.php');

        //pdf is created here
        $pdf = new FPDF();
        $pdf -> AddPage();


        $pdf -> SetFont("Arial","",16);
        $pdf -> Cell(0,10,"Registration Details",1,2,'C');
        $pdf -> cell(60,10,"Name",1,0);
        $pdf -> cell(80,10,"Number",1,0);
        $pdf -> cell(50,10,"City",1,1);

        $pdf -> cell(60,10,"$name",1,0);
        $pdf -> cell(80,10,"$number",1,0);
        $pdf -> cell(50,10,"$city",1,1);


        $file = time().'.pdf';
        $pdf -> output($file,'D');
      }
   
?>