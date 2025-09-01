<?php

namespace services;

// require_once __DIR__ . '/vendor/autoload.php';

class PostExport
{
    public function export()
    {
        // $mpdf = new \Mpdf\Mpdf();
        // $mpdf->WriteHTML('<h1>Hello world!</h1>');
        // $mpdf->Output();
    }
}

$post = new PostExport;
$post->export();
