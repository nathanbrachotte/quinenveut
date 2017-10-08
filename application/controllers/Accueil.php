<?php
/**
 * Created by PhpStorm.
 * User: a-sellier
 * Date: 07/10/17
 * Time: 20:46
 */

class Accueil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Qui n\'en veut !?';

        $this->load->view('templates/header_visiteur', $data);
        $this->load->view('accueil');
        $this->load->view('templates/footer');
    }
}