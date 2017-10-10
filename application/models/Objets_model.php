<?php
/**
 * Created by PhpStorm.
 * User: a-sellier
 * Date: 07/10/17
 * Time: 18:21
 */

class Objets_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_objet($id_objet)
    {

    }

    public function get_objets()
    {
        $query = $this->db->get('Objets');
        return $query->result_array();
    }

    public function get_objets_utilisateur($id_user)
    {
        $query = $this->db->get_where('Objets', array('id_vendeur' => $id_user));
        return $query->result_array();
    }

    public function get_objet_Info($objetId)
    {
        $this->db->select('id_objet, nom_objet,desc_objet,prix_base,prix_res,date_limit,id_cat,photo,id_vendeur,statut,id_visibilite');
        $this->db->from('Objets');
        $this->db->where('id_objet', $objetId);

        $query = $this->db->get();

        return $query->result();
    }

}