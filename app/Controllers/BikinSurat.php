<?php

namespace App\Controllers;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;
use \PhpOffice\PhpWord\TemplateProcessor;
use App\Models\Db_petugas;
use Config\Services;
use CodeIgniter\HTTP\IncomingRequest;

/**
 * @property IncomingRequest $request
 */


class BikinSurat extends BaseController
{
    public function __construct()
    {
        $request = Services::request();
        $this->Model = new Db_petugas($request);
    }
    protected $request;


    public function printSuratIbk()
    {
        $dataSurat = $this->request->getVar();

        $request = Services::request();
        //$ibkItemModel = new Db_petugas($request);
        // $ibkItems = $ibkItemModel->getDataTable();

        $ibkSuratModel = new Db_petugas($request);
        $dataSurat = $this->request->getVar();

        $suratDate = $ibkSuratModel->getSuratDate($dataSurat['nomorSuratDJP']);
        if ($suratDate) {
            $suratDate1 = explode(" ", $suratDate[0]->created_at);
            $todaysdate = $this->tanggal_indonesia(date('Y-m-d',  strtotime($suratDate1[0])));

            $todaysmonth = substr($todaysdate, 5, 2);
            $todaysyear = substr($todaysdate, 0, 4);
        } else {
            // $date = strtotime("+1 day");
            // echo date('m-d-y', $date);
            $todaysdate = $this->tanggal_indonesia(date("Y-m-d", strtotime("+1 day")));
            $todaysmonth = date('m');
            $todaysyear = date('Y');
        }



        $phpWord = new PhpWord();
        $fileTemplate = 'template_' . $dataSurat['tipeSurat'] . '.docx';
        // $fileTemplate = 'template_' . $this->request->getVar('tipeSurat') . '.docx';
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
                    "tanggalSurat" => $dataSurat[$tglSuratPjkTbl],
                    "kantorPajak" => $dataSurat[$kantorPjkTbl],
                    "namaNasabah" => $dataSurat[$nasabahTbl],
                    "outlet" => $dataSurat[$outletTbl],
                    "keterangan" => $dataSurat[$keteranganTbl]
                );
            }
            $templatedjp->cloneRowAndSetValues('no', $values);
        } else {

            $tglperiksaindo = $this->tanggal_indonesia(date('Y-m-d',  strtotime($dataSurat['tanggalPemeriksaan'])));

            $templatedjp->setValues([
                'reffcode' => $this->request->getVar('reffcode'),
                'todaysmonth' => $todaysmonth,
                'todaysyear' =>  $todaysyear,
                'todaysdate' => $todaysdate, //e.g 10 March, 2022
                'alamat1' => $this->request->getVar('alamat'),
                'kodepos' => $this->request->getVar('kodePos'),
                // 'kantorDjpHeader' => $this->request->getVar('kantorPjk'),
                'noSuratDjp' => $this->request->getVar('nomorSuratDJP'),
                'tglSuratDjp' => $this->request->getVar('tanggalSuratDJP'),
                //'noSuratKpp' => $this->request->getVar('noSuratKpp'),
                // 'tglPemeriksaan' => $this->request->getVar('tanggalPemeriksaan'),
                'tglPemeriksaan' => $tglperiksaindo,
                'kantorPajakItem' => $this->request->getVar('kantorPjkTbl'),
                'depthead1' => 'Dept Head 1 masih hardcode',
                'depthead2' => 'Dept Head 2 masih hardcode'
            ]);
        }
        $filename = 'Surat ' . strtoupper($this->request->getVar('tipeSurat')) . ' ' . 'DJP_' . strtoupper($this->request->getVar('nomorSuratDJP')) . '_' . date('Y-m-d H:i:s') . '.docx';

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
            'op' => 'ok', 'fileName' => $filename, 'data' => $suratDate
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
        // var 0 = tanggal
        // var 1 = bulan
        // var 2 = tahun
    }
}
