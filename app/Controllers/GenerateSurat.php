<?php

namespace App\Controllers;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;
use \PhpOffice\PhpWord\TemplateProcessor;
use App\Models\IbkSuratModel;
use App\Models\AuditLogModel;

use Config\Services;

use CodeIgniter\HTTP\IncomingRequest;

/**
 * @property IncomingRequest $request
 */

class GenerateSurat extends BaseController
{
    public function __construct()
    {
        $request = Services::request();
        $this->ibkSuratModel = new IbkSuratModel();
        $this->auditLogModel = new AuditLogModel($request);
    }

    public function printSuratIbk()
    {
        $request = Services::request();
        $AuditLogModel = new AuditLogModel($request);


        $ibkSuratModel = new IbkSuratModel();
        $dataSurat = $this->request->getVar();

        // $username = $this->session->userdata('username');
        $username = 'username';
        $menu = 'Pencarian IBK/Print Surat';
        $activity = 'Print Surat ' . $dataSurat['tipeSurat'] . 'No. DJP ' . strtoupper($dataSurat['noSuratDjp']);
        $AuditLogModel->tracing($username, $menu, $activity);

        $suratDate = $ibkSuratModel->getSuratDate($dataSurat['tipeSurat'], $dataSurat['noSuratDjp']);
        if ($suratDate) {
            $todaysdate = $suratDate[0]->todays_date;
            $todaysmonth = $suratDate[0]->todays_month;
            $todaysyear = $suratDate[0]->todays_year;
            $saveFlag = 0;
        } else {
            $getDate = date(new \CodeIgniter\I18n\Time("now", "Asia/Jakarta", "de_DE"));
            $dateFormat = explode(' ', $getDate);
            $todaysdate = $this->tanggal_indonesia($dateFormat[0]);
            // $todaysdate = $this->tanggal_indonesia(date('Y-m-d'));
            $todaysmonth = date('m');
            $todaysyear = date('Y');
            $saveFlag = 1;
        }

        // if ($dataSurat['dataStatus'] === 'new') {
        //     // $todaysdate = $this->tanggal_indonesia(date('Y-m-d'));
        //     if ($suratDate) {
        //         $todaysdate = $suratDate[0]->todays_date;
        //         $todaysmonth = $suratDate[0]->todays_month;
        //         $todaysuyear = $suratDate[0]->todays_year;
        //     } else {
        //         $todaysdate = $this->tanggal_indonesia(date('Y-m-d'));
        //         $todaysmonth = date('m');
        //         $todaysuyear = date('Y');
        //     }
        // } else {
        //     if ($suratDate) {
        //         $todaysdate = $suratDate[0]->todays_date;
        //         $todaysmonth = $suratDate[0]->todays_month;
        //         $todaysuyear = $suratDate[0]->todays_year;
        //     } else {
        //         $todaysdate = $this->tanggal_indonesia(date('Y-m-d'));
        //         $todaysmonth = date('m');
        //         $todaysuyear = date('Y');
        //     }
        // }
        // $todaysdate = $this->tanggal_indonesia(date('Y-m-d'));

        $phpWord = new PhpWord();
        $fileTemplate = 'template_' . $this->request->getVar('tipeSurat') . '.docx';
        // $pathTemplate = '/assets/temp_doc/' . $filename;
        $templatedjp = new TemplateProcessor($fileTemplate);

        $section = $phpWord->addSection();

        // $section = $phpWord->loadTemplate('template_djp.docx');

        if ($dataSurat['tipeSurat'] == 'lampiran') {
            $templatedjp->setValues([
                'reffcode' => $this->request->getVar('reffcode'),
                'todaysmonth' => $todaysmonth,
                'todaysyear' => $todaysyear,
            ]);

            $values = [];
            for ($i = 0; $i < $dataSurat['jumlahRow']; $i++) {
                $noSuratPjkTbl = 'noSuratPjkTbl' . $i;
                $tglSuratPjkTbl = 'tglSuratPjkTbl' . $i;
                $kantorPjkTbl = 'kantorPjkTbl' . $i;
                $nasabahTbl = 'nasabahTbl' . $i;
                $outletTbl = 'outletTbl' . $i;
                $keteranganTbl = 'keteranganTbl' . $i;

                $values[] = array(
                    "no" => $i + 1,
                    "noSuratPajak" => $dataSurat[$noSuratPjkTbl],
                    "tglSuratPajak" => $dataSurat[$tglSuratPjkTbl],
                    "kantorPajak" => $dataSurat[$kantorPjkTbl],
                    "nasabah" => $dataSurat[$nasabahTbl],
                    "outlet" => $dataSurat[$outletTbl],
                    "keterangan" => $dataSurat[$keteranganTbl]
                );
            }
            $templatedjp->cloneRowAndSetValues('no', $values);
        } else {
            // need to check if the data already exist in db table
            // if ($dataSurat['dataStatus'] === 'new') {
            //     $todaysdate = $this->tanggal_indonesia(date('Y-m-d'));
            // } else {
            //     $suratDate = $ibkSuratModel->getSuratDate($dataSurat['tipeSurat'], $dataSurat['noSuratDjp']);
            //     $todaysdate = $this->tanggal_indonesia($suratDate);
            // }

            // $todaysdate = $this->tanggal_indonesia(date('Y-m-d'));

            $templatedjp->setValues([
                'reffcode' => $this->request->getVar('reffcode'),
                'todaysmonth' => $todaysmonth,
                'todaysyear' => $todaysyear,

                // 'todaysmonth' => date('m'),
                // 'todaysyear' => date('Y'),

                'todaysdate' => $todaysdate, //e.g 10 March, 2022
                'alamat1' => $this->request->getVar('alamat1'),
                'alamat2' => $this->request->getVar('alamat2'),
                'kodepos' => $this->request->getVar('kodepos'),
                'kantorDjpHeader' => $this->request->getVar('kantorPjk'),
                'noSuratDjp' => $this->request->getVar('noSuratDjp'),
                'tglSuratDjp' => $this->request->getVar('tglSuratDjp'),
                'noSuratKpp' => $this->request->getVar('noSuratKpp'),
                'tglPemeriksaan' => $this->request->getVar('tglPeriksa'),
                'kantorPajakItem' => $this->request->getVar('kantorPjkTbl'),
                'depthead1' => 'Dept Head 1 masih hardcode',
                'depthead2' => 'Dept Head 2 masih hardcode'
            ]);
        }

        $section->addText('Hello World !');
        $writer = new Word2007($phpWord);
        $filename = 'Surat ' . strtoupper($this->request->getVar('tipeSurat')) . ' ' . 'DJP_' . strtoupper($this->request->getVar('noSuratDjp')) . '_' . date('Y-m-d H:i:s') . '.docx';

        // setHeaderContentSurat($filename);
        header('Content-Type: application/msword');
        header('Content-Disposition: attachment; filename=' . $filename);

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
            'op' => 'ok', 'fileName' => $filename, 'data' => $todaysdate, 'save' => $saveFlag
        );
        die(json_encode($response));
    }

    public function tanggal_indonesia($tanggal)
    {
        $bulan = array(
            1 =>       'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $var = explode('-', $tanggal);

        return $var[2] . ' ' . $bulan[(int)$var[1]] . ' ' . $var[0];
        /*
        keterangan:
        // var 0 = tanggal
        // var 1 = bulan
        // var 2 = tahun
        */
    }

    public function saveSuratLog()
    {
        $printed_at = date(new \CodeIgniter\I18n\Time("now", "Asia/Jakarta", "de_DE"));
        $todaysdate = $this->tanggal_indonesia(date('Y-m-d'));
        $dataSurat = $this->request->getVar();

        // save data
        if ($this->ibkSuratModel->save([
            'jenis_surat' => $this->request->getVar('tipeSurat'),
            'no_surat_djp' => $this->request->getVar('noSuratDjp'),

            'printed_at' => $printed_at,
            'todays_year' => date('Y'),
            'todays_month' => date('m'),
            'todays_date' => $todaysdate, //e.g 10 March, 2022
            'depthead1' => 'depthead1 harcode',
            'depthead2' => 'depthead2 harcode'
        ]) == true) {
            $response = array(
                'status' => 'saved', 'data' => $dataSurat
            );
        } else {
            $response = array(
                'status' => 'failed', 'data' => $dataSurat
            );
        }

        die(json_encode($response));
    }
}
