<?php
class model_operator extends CI_Model{
    
    function login($username,$password)
    {
        $chek=  $this->db->get_where('operator',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    function tampilkan_data()
    {
        return $this->db->get('operator');
    }
    
    function get_one($id)
    {
        $param  =   array('id_operator'=>$id);
        return $this->db->get_where('operator',$param);
    }

    function edit($data)
        {
            $this->db->where('id_operator', $this->input->post('id'));
            $this->db->update('operator',$data);
        }

        function hapus($id)
        {
            $this->db->where('id_opertaor', $id);
            $this->db->delete('operator');
        }
}