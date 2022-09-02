<?php


use PhpOffice\PhpWord\PhpWord;

use PhpOffice\PhpWord\Writer\Word2007;


$phpWord = new PhpWord();
$section = $phpWord->addSection();
$section->addText('Hello World !');

// $templateProcessor->setValue('customer_name', $name);

$name = 'Yosua';
$header = $section->addHeader();
$header->addText("This is my fabulous header ,$name");

$footer = $section->addFooter();
$footer->addText('Footer text goes here.');

$textrun = $section->addTextRun();
$textrun->addText('Some text. ');
$textrun->addText('And more Text in this Paragraph.');

$textrun = $section->addTextRun();
$textrun->addText('New Paragraph! ', ['bold' => true]);
$textrun->addText('With text...', ['italic' => true]);

$rows = 10;
$cols = 5;
$section->addText('Basic table', ['size' => 16, 'bold' => true]);


$table = $section->addTable();
for ($row = 1; $row <= 4; $row++) {
    $table->addRow();
    for ($cell = 1; $cell <= 3; $cell++) {
        $table->addCell(1750)->addText("Row {$row}, Cell {$cell}");
    }
}


$table_section = $phpWord->addSection();
$rows = 10;
$cols = 5;
$table_section->addText('Basic table', "rofl");

$table = $table_section->addTable();
for ($r = 1; $r <= $rows; $r++) {
    $table->addRow();
    for ($c = 1; $c <= $cols; $c++) {
        $table->addCell(1750)->addText("Row {$r}, Cell {$c}");
    }
}

$writer = new Word2007($phpWord);
$filename = 'simple';

header('Content-Type: application/msword');
header('Content-Disposition:attachment;filename= "' . $filename . '.docx"');
header('Cache-Control: max-age=0');

$writer->save('php://output');
exit();
