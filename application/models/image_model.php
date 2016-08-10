<?php
class Image_model extends CI_Model {

    function upload()
    {
        $config['upload_path'] = './application/uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pic')) {
            return $this->upload->data('file_name');
        }else{
            return FALSE;
        }

    }

    function format($file_name)
    {
        $config['source_image'] = './application/uploads/'.$file_name;
        $config['maintain_ratio'] = TRUE;
        $config['height'] = 400;

        $this->load->library('image_lib', $config);
        return $this->image_lib->resize();
    }

}
