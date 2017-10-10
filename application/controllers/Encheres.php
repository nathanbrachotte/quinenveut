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
        $this->load->model('Encheres_model');
        $data['encheres'] = $this->Encheres_model->get_encheres();
        $this->load->view('liste_encheres',$data);

    }

    function encherir_obj($id_objet)
    {
        $data['objet'] = $this->Objets_model->get_objet($id_objet);
        $this->load->view('formulaire_enchere',$data);
    }


    function encherir(){

        $this->load->library('form_validation');

        $id_user = $this->input->post('id_vendeur');
        $id_objet = $this->input->post('id_objet');
        $prix = $this->input->post('prix');


       $encheresInfo = array('id_acheteur'=>$id_user,'id_objet'=>$id_objet,'Prix'=>$prix);

        $this->load->model('Encheres_model');
        $result = $this->Encheres_model->encherir($encheresInfo);

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