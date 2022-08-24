<?php

namespace App\Controllers;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;
use \PhpOffice\PhpWord\TemplateProcessor;

class GenerateSurat extends BaseController
{
    public function printSuratDjp()
    {
        // ob_start();
        $header = $this->request->getVar();

        $phpWord = new PhpWord();
        $templatedjp = new TemplateProcessor('template_djp.docx');

        $section = $phpWord->addSection();

        // $section = $phpWord->loadTemplate('template_djp.docx');

        $templatedjp->setValues([
            // $section->setValues([
            'reffcode' => '001',
            'todaysmonth' => date('m'),
            'todaysyear' => date('Y')
        ]);

        $section->addText('Hello World !');
        $writer = new Word2007($phpWord);
        $filename = date('Y-m-d H:i:s') . '.docx';

        // $templatedjp = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        // ob_end_clean();

        header('Content-Type: application/msword');
        header('Content-Disposition: attachment; filename=' . $filename);
        // header('Cache-Control: max-age=0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header("Pragma: no-cache");

        ob_start();
        // $writer->save('php://output');
        $templatedjp->saveAs('php://output');
        $docFile = ob_get_contents();
        ob_end_clean();


        $response = array(
            'file' => "data:application/vnd.ms-word;base64," . base64_encode($docFile),
            'op' => 'ok', 'fileName' => $filename
        );
        die(json_encode($response));
    }
}
