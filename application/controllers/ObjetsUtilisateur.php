<?php
/**
 * Created by PhpStorm.
 * User: a-sellier
 * Date: 07/10/17
 * Time: 18:47
 */

class ObjetsUtilisateur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('objets_model');
    }

    public function lister($id_user = -1)
    {
        if ($id_user == -1)
        {
            show_404();
        }

        $objets = $this->objets_model->get_objets_utilisateur($id_user);

        $data['title'] = 'Liste des objets de l\'utilisateur '.$id_user;

        $this->load->view('templates/header',$data);


        if (sizeof($objets) == 0)
        {
            $this->load->view('objet_aucun');
            $this->load->view('templates/footer');
            return;
        }

        foreach ($objets as $row)
        {
            $objet['nom'] = $row['nom_objet'];
            $this->load->view('objet_vendeur', $objet);
        }

        $this->load->view('templates/footer');
    }
}