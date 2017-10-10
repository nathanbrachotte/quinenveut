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
        $this->load->model('objets_model');
    }

    public function n_importe_quoi()
    {
        return 2;
    }

    public function lister_objets()
    {
        $data['title'] = 'Liste des objets';

        $data['objets'] = $this->objets_model->get_objets();

        $this->load->view('templates/header',$data);
        $this->load->view('liste_objets', $data);
        $this->load->view('templates/footer');
    }
}