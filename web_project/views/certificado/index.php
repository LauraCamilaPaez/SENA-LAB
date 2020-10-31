
<?php
    include_once "assets/dompdf/autoload.inc.php";
    use Dompdf\Dompdf;
    $pdf = new Dompdf();
    ob_start();
    include_once "contenido.php";
    $html = ob_get_clean();
    $pdf->loadHtml($html);
    $pdf->setPaper("A4","landscape");
    $pdf->render();
    $pdf->stream();



?>