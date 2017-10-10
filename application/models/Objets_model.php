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
    public function insertVente($data)
    {
        $this->db->insert('Objets', $data);
    }

    public function update_statut($objet,$statut){
        $objet['statut']=$statut;
        $this->db->where('id_objet', $objet->id_objet);
        $this->db->update('objets', $objet);
    }

}