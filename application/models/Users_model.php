<?php
/**
 * Created by PhpStorm.
 * User: HAN_Qianqian
 * Date: 2017/10/7/007
 * Time: 14:17
 */

class Users_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    //ajouter un nouvel utilisateur dans la base de donnees
    public function insert($data)
    {
        $this->db->insert('Users', $data);
    }

    //verifier si l'utilisateur existe deja
    public function verify($data)
    {
        $sql = "select * from Users where mail = '$data'";
        $res = $this->db->query($sql);
        if (empty($res->result())) {
            return 0;
        } else {
            return 1;
        }
    }

    //verifier email et mot de passe
    public function select($data)
    {
        $res = $this->db->where(array('mail'=>$data['mail'],'mdp'=>$data['mdp']))->get('Users');
        if (empty($res->result())) {
            return 0;
        } else {
            return 1;
        }
    }
}