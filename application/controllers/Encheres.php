<?php
/**
 * Created by PhpStorm.
 * User: REGRAG
 * Date: 08/10/2017
 * Time: 19:16
 */

class Encheres extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Encheres_model');
        $this->load->model('Objets_model');
    }

    function encheres_listing()
    {
        $data['title'] = 'Liste des Encheres';
        $this->load->model('Encheres_model');
        $data['encheres'] = $this->Encheres_model->get_encheres();
        $this->load->view('templates/header',$data);
        $this->load->view('liste_encheres', $data);
        $this->load->view('templates/footer');
    }

    function encherir_obj($id_objet)
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $data['objets'] = $this->Objets_model->get_objet_Info($id_objet);
        $this->load->view('formulaire_enchere',$data);
    }


    function encherir(){

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $id_user = $this->input->post('id_vendeur');
        $id_objet = $this->input->post('id_objet');
        $prix = $this->input->post('prix');


       $encheresInfo = array('id_acheteur'=>$id_user,'id_objet'=>$id_objet,'Prix'=>$prix);

        $this->load->model('Encheres_model');
        $result = $this->Encheres_model->encherir($encheresInfo);

        echo "<script>alert('Enchére realisé avec succès');</script>";
    }




}