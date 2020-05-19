<?php
defined('BASEPATH') or exit('No directscript accessallowed');

class Welcome extends CI_Controller
{
  //Creamos el constructor de la clase
  public function _construct()
  {
    parent::__construct();
  }



  public function index()
  {
    $data['titulo'] = 'principal'; //esta línea se agrega para que podamos variar el título de las páginas
    $this->load->view('front/head', $data);
    $this->load->view('front/head', $data);
    $this->load->view('front/header', $data);
    $this->load->view('partes/nueva_plantilla');
    $this->load->view('partes/nueva_plantilla2');
    $this->load->view('front/footer');
  }
  public function quienes_somos()
  {
    $data['titulo'] = 'quienes somos';
    $this->load->view('front/head', $data);
    $this->load->view('front/navbar');
    $this->load->view('partes/quienes_somos');/*respectiva pagina*/
    $this->load->view('front/footer');
  }

  public function comercializacion()
  {
    $data['titulo'] = 'comercializacion';
    $this->load->view('front/head', $data);
    $this->load->view('front/navbar');
    $this->load->view('partes/comercializacion');/*respectiva pagina*/
    $this->load->view('front/footer');
  }

  public function informacion_de_contactos()
  {
    $data['titulo'] = 'informacion de contactos';
    $this->load->view('front/head', $data);
    $this->load->view('front/navbar');
    $this->load->view('partes/informacion_de_contactos');/*respectiva pagina*/
    $this->load->view('front/footer');
  }

  public function terminos_y_usos()
  {
    $data['titulo'] = 'terminos y usos';
    $this->load->view('front/head', $data);
    $this->load->view('front/navbar');
    $this->load->view('partes/terminos_y_usos');/*respectiva pagina*/
    $this->load->view('front/footer');
  }

  public function catalogo_de_productos()
  {
    $data['titulo'] = 'catalogo de productos';
    $this->load->view('front/head', $data);
    $this->load->view('front/navbar');
    $this->load->view('partes/catalogo_de_productos');/*respectiva pagina*/
    $this->load->view('front/footer');
  }

  public function consultas()
  {
    $data['titulo'] = 'consultas';
    $this->load->view('front/head', $data);
    $this->load->view('front/navbar');
    $this->load->view('partes/consultas');
    $this->load->view('front/footer');
  }
  public function registro()
  {
    $data['titulo'] = 'registro';
    $this->load->view('front/head', $data);
    $this->load->view('front/navbar');
    $this->load->view('partes/registro');

    $this->load->view('front/footer');
  }
}