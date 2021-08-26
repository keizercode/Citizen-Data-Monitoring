<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MpdfController extends CI_Controller
{

  public function printPDF()
  {
    $this->load->model('category');
    $data['val'] = $this->db->query("SELECT * FROM tb_category")->result();
    $data['val'] = $this->ModelCategory->showall("tb_category", "WHERE no = '$id' ");


    $mpdf = new \Mpdf\Mpdf();
    $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Data Warga</title>
        </head>
        <body>
            <h1>Data Warga</h1>
			<table border="1" cellpadding="10" cellspacing="0">
            <thead>
              <tr>
                <th rowspan="2" style="text-align:center;vertical-align:middle">No</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Tanggal</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Lokasi</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Jumlah Warga</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Jumlah Warga Sehat</th>
                <th colspan=" 6" style="text-align:center;vertical-align:middle">Terpapar Covid</th>
              </tr>
              <tr>
                <th style="text-align:center;vertical-align:middle">Tanpa Gejala</th>
                <th style=" text-align:center;vertical-align:middle">Ringan</th>
                <th style="text-align:center;vertical-align:middle">Sedang</th>
                <th style=" text-align:center;vertical-align:middle">Berat/Kritis</th>
                <th style="text-align:center;vertical-align:middle">Meninggal</th>
                <th style=" text-align:center;vertical-align:middle">Tanpa Keterangan</th>
              </tr>
              </thead>';

    foreach ($val as $data) {
      $html .= '<tr>
                  <td>' . $data->no . '</td>
                  <td>' . $data->id_category . '</td>
                  <td>' . $data->l1 . '</td>
                  <td>' . $data->l2 . '</td>
                  <td>' . $data->l3 . '</td>
                  <td>' . $data->l4 . '</td>
                  <td>' . $data->l5 . '</td>
                  <td>' . $data->l6 . '</td>
                  <td>' . $data->l7 . '</td>
                  <td>' . $data->l8 . '</td>
                  <td>' . $data->l9 . '</td>
                  </tr>';
    }

    $html .= '</table>
        </body>
        </html>';
    $mpdf->WriteHTML($html);
    $mpdf->Output('data-warga.pdf', \Mpdf\Output\Destination::INLINE);
  }
}
