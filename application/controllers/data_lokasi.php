<?php
class data_lokasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model('lokasi_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload');
    }

    function index(){
            $data=array(
            'title'=>'Data Lokasi',
            'data_lokasi' =>$this->lokasi_model->getAllDataLokasi(),
            
        );
        $this->load->view('haladmin/lokasi',$data);
    }

    function editlokasi(){
        $data["dt_lokasi"]=$this->lokasi_model->getDataLokasiEdit($_POST['id']);
        echo $this->load->view('haladmin/editlokasi',$data,true);
    } 



//    ===================== INSERT =====================
    function tambah(){

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
                
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar')){
                $gambar="";
        }else{
                $gambar=$this->upload->file_name;
        } 

        $data=array(
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'),
            'tanggal'=>$this->input->post('tanggal'),
            'gambar'=>$gambar,
        );
        $this->lokasi_model->insertData('info',$data);
        $this->session->set_flashdata('notif','Tambah Lokasi Berhasil');
        redirect("data_lokasi");
    }

    function simpanlokasi(){
          $id=$this->input->post('id');
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
       
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar')){
                $gambar="";
        }else{
                $gambar=$this->upload->file_name;
        }

        $data=array(
            'judul'=>$this->input->post('nama_lokasi'),
            'isi'=>$this->input->post('garis_lintang'),
            'tanggal'=>$this->input->post('tanggal'),
            'gambar'=>$gambar,
          
        );
        $this->lokasi_model->updateDatab('info',$data, $id);
        $this->session->set_flashdata('notif','Edit lokasi Berhasil');
        redirect("data_lokasi");
    }

//  **  ========================== Edit =======================
    function edit(){
        $id=$this->input->post('id');
        $data=array(
            'judul'=>$this->input->post('nama_lokasi'),
            'isi'=>$this->input->post('garis_lintang'),
            'tanggal'=>$this->input->post('tanggal'),
            'gambar'=>$gambar,
        );

        $this->lokasi_model->updateData('info',$data,$id);
        redirect("data_lokasi");
    }




//    ========================== DELETE =======================
    function hapus(){
        $id['id'] = $this->uri->segment(3);
        $this->lokasi_model->deleteData('info',$id);

        $this->session->set_flashdata('notif','Hapus Lokasi Berhasil');
        redirect("data_lokasi");
    }
}