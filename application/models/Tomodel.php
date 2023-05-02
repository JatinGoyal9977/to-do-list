<?php

class Tomodel extends CI_Model {

	function create($data){
        $this->db->insert("todo",$data);
    }

    function view(){
        return $todos = $this->db->get('todo')->result_array();
    }
    
    function update($id, $data){
        $this->db->where('id',$id);
        $this->db->update('todo',$data);
    }

    function read($id){
        $this->db->where('id',$id);
        return $todo = $this->db->get('todo')->row_array();
    }

    function deltodo($id){
        $this->db->where('id',$id);
        $this->db->delete('todo');
    }

}