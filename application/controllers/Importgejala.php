<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Importgejala extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gejala_model');
    }



    public function index()
    {
		$data['title'] = 'Export Import';
		$data['datagejala'] = $this->Gejala_model->getDataGejala();
        
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_ikan', $data);
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
                        $datagejala = array(
                            'ikan'  => $row->getCellAtIndex(1),
                            'penyakit'  => $row->getCellAtIndex(2),
							'ikan_id'  => $row->getCellAtIndex(3),
                            'date_created' => time(),
                            'date_modified' => time(),
                        );
                        $this->Gejala_model->import_data($datagejala);
                    }
                    $numRow++;
                }
				$reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('importgejala');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }
}
