<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mpdf extends CI_Controller
{

    public function index()
    {
        $data = $this->load->view('mpdf_v');
    }

    public function printPDF()
    {
        $mpdf = new \Mpdf\Mpdf();
        $datawarga = $this->load->model('ModelCategory');
        $data = $this->load->view('cetak', [], TRUE);
        $mpdf->WriteHTML($data);
        $tanggal = date('d-m-Y');
        $mpdf->Output('data-warga.pdf - ' . $tanggal, \Mpdf\Output\Destination::INLINE);
    }
}
