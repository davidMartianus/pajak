<?php

namespace App\Controllers;

use App\Models\IbkModel;
use App\Models\IbkDataModel;
use App\Models\IbkItemModel;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;

use Config\Services;

use CodeIgniter\HTTP\IncomingRequest;

/**
 * @property IncomingRequest $request
 */

class GenerateSurat extends BaseController
{
    public function generateSurat()
    {
        // $phpWord = new PhpWord();
        // $section = $phpWord->addSection();
        // $section->addText('Hello World !');

        // $writer = new Word2007($phpWord);

        // $filename = 'simple';

        // header('Content-Type: application/msword');
        // header('Content-Disposition: attachment;filename="' . $filename . '.docx"');
        // header('Cache-Control: max-age=0');

        // $writer->save('php://output');
    }
}
