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
        $this->db->select('EnchTb.id_ench, EnchTb.Prix, EnchTb.id_objet,EnchTb.id_acheteur');
        $this->db->from('Encheres as EnchTb');
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

    public function get_encheres_utilisateur($userid)
    {
        $this->db->select('EnchTb.id_ench, EnchTb.Prix, Object.object,User.user');
        $this->db->from('Encheres as EnchTb');
        $this->db->join('Objets as Object', 'Object.id_objet = EnchTb.id_objet');
        $this->db->join('Users as User', 'User.id_acheteur = EnchTb.id_acheteur');
        $query = $this->db->get();
        $this->db->where('EnchTb.id_acheteur =', $userid);

        $result = $query->result();
        return $result;
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

    public function encherir($enchersInfo)
    {

        $this->db->trans_start();
        $this->db->insert('Encheres', $enchersInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;

    }

}