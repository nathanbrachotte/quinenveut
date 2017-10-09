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

    function enchereslisting()
    {
        $this->load->model('Encheres_model');
        $data['encheres'] = $this->Encheres_model->get_encheres();
        $this->load->view('liste_encheres',$data);

    }

    function EncherireObj($objetId)
    {

        $data['objets'] = $this->Objets_model->get_objet_Info($objetId);
        $this->load->view('formulaire_enchere',$data);

    }


    function Encherir(){

        $this->load->library('form_validation');

        $userId = $this->input->post('id_vendeur');
        $objectId = $this->input->post('id_objet');
        $prix = $this->input->post('prix');


       $enchersInfo = array('id_acheteur'=>$userId,'id_objet'=>$objectId,'Prix'=>$prix);

        $this->load->model('Encheres_model');
        $result = $this->Encheres_model->encherir($enchersInfo);

        if($result > 0)
        {
            $this->session->set_flashdata('success', 'Enchere reussi');
        }
        else
        {
            $this->session->set_flashdata('error', 'Enchere failed');
        }

    }


}