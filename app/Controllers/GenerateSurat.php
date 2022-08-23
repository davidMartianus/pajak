<?php

namespace App\Controllers;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;

class GenerateSurat extends BaseController
{
    public function printSuratDjp()
    {
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();
        $section->addText('Hello World !');

        $writer = new Word2007($phpWord);
        // dd($writer);
        $filename = date('Y-m-d H:i:s') . '.docx';

        // header('Content-Description: File Transfer');
        header('Content-Type: application/msword');
        // header('Content-Type: application/octet-stream');
        // header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        // header('Content-Disposition: attachment;filename="' . $filename . '.doc"');
        header('Content-Disposition: attachment; filename=' . $filename);
        header('Cache-Control: max-age=0');
        // header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        // header('Content-Transfer-Encoding: binary');
        // header('Expires: 0');
        // header("Pragma: no-cache");
        // ob_clean();
        // flush();
        // readfile($filename);
        // unlink($filename);
        // exit();

        // $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save('php://output');
        exit;
    }
}
