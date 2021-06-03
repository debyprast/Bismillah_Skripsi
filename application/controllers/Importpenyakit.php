<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Importpenyakit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penyakit_model');
    }

    public function index()
    {
		$data['title'] = 'Export Import';
		$data['datapenyakit'] = $this->Penyakit_model->getDataPenyakit();
        
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_penyakit', $data);
		$this->load->view('template_admin/footer');
    }

	public function uploaddata()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $datapenyakit = array(
                            'ikanp'  => $row->getCellAtIndex(1),
                            'penyakitp'  => $row->getCellAtIndex(2),
                            'date_created' => time(),
                            'date_modified' => time(),
                        );
                        $this->Penyakit_model->import_data($datapenyakit);
                    }
                    $numRow++;
                }
				$reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('importpenyakit');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }
}
