<?php
/**
 * Created by PhpStorm.
 * User: a-sellier
 * Date: 07/10/17
 * Time: 18:10
 */

class Encheres_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_encheres()
    {
        $query = $this->db->get('Encheres');
        return $query->result_array();
    }

    public function get_encheres_utilisateur($id_user)
    {
        $query = $this->db->get_where('Encheres', array('id_acheteur' => $id_user));
    }

    public function get_encheres_objet($id_objet)
    {
        $query = $this->db->get_where('Encheres', array('id_objet' => $id_objet));
    }
    public function get_max_encheres_objet($id_objet)
    {
        $query = $this->db->query('select max(prix) as prix,id_acheteur where id_objet='.$id_objet.';');
        return $query;
    }

    public function encherir()
    {

    }

}