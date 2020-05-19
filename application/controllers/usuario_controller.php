<?php
class Usuario_controller extends CI_Controller
{
  function _construct()
  {
    parent::__construct();
    $this->load->model('usuario_model');
  }

  function nuevo_usuario()
  {
    //Genero las reglas de validación
    //name del campo, ¨título, restricciones
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required');
    $this->form_validation->set_rules('email', 'username', 'required|trim|valid_email|is_unique[users.username]');
    $this->form_validation->set_rules('reg_password', 'Contraseña', 'required|xss_clean');
    $this->form_validation->set_rules('re_password', 'Repetir contraseña', 'required|matches[reg_password]');
    //Mensaje de error si no pasan las reglas
    $this->form_validation->set_message('required', '<div class="alert alert-danger">El campo %s es obligatorio</div>');
    $this->form_validation->set_message('matches', '<div class="alert alert-danger">Los contraseña ingresada no
coincide</div>');
    $pass = $this->input->post('re_password', true);
    //Preparo los datos para guardar en la base, en caso de que pase la validación
    //Los datos corresponden a los nombres de mi campos de la base de datos
    $data = array(
      'name' => $this->input->post('nombre', true),
      'last_name' => $this->input->post('apellido', true),
      'username' => $this->input->post('email', true),
      'password' => md5($pass)
    );
  }
}