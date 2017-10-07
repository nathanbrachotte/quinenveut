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

    public function get_objets()
    {
        $query = $this->db->get('Objets');
        return $query->result_array();
    }

    public function get_objets_utilisateur()
    {

    }

}