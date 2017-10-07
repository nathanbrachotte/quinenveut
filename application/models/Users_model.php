<?php
/**
 * Created by PhpStorm.
 * User: a-sellier
 * Date: 07/10/17
 * Time: 17:54
 */

class Users_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

}