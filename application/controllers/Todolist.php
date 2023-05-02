<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todolist extends CI_Controller {

	public function index() {

		$this->load->model('Tomodel');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('task','Task','required');

		$todos = $this->Tomodel->view();
		$data = array();
		$data['todos'] = $todos;
		
		if($this->form_validation->run() == false){
			$this->load->view('index', $data);
		}else{
			$data = array();
			$data['title'] = $this->input->post('title');
			$data['todoitem'] = $this->input->post('task');
			$this->Tomodel->create($data);
			redirect('Todolist/');
		}

	}

	function delete($id) {

		$this->load->model('Tomodel');
		$this->Tomodel->deltodo($id);
		redirect('Todolist/');
	}

	function update($id){
		
		$this->load->model('Tomodel');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('task','Task','required');

		$todo = $this->Tomodel->read($id);
		$data = array();
		$data['todo'] = $todo;

		if($this->form_validation->run() == false){
			$this->load->view('edit',$data);
		}else{
			$data = array();
			$data['title'] = $this->input->post('title');
			$data['todoitem'] = $this->input->post('task');
			$this->Tomodel->update($id, $data);
			redirect('Todolist/');
		}
	}

}
