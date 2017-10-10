<?php
/**
 * Created by PhpStorm.
 * User: a-sellier
 * Date: 07/10/17
 * Time: 20:08
 */

class Objets extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('objets_model');
        $this->load->model('encheres_model');
    }

    public function lister()
    {
        $data['title'] = 'Liste des objets';

        $data['objets'] = $this->objets_model->get_objets();

        $this->load->view('templates/header_visiteur',$data);
        $this->load->view('liste_objets', $data);
        $this->load->view('templates/footer');
    }

    public function ajout_vente(){
        $this->load->library('form_validation');
        $this->load->helper('url');

        //regles pour l'inscription
        $this->form_validation->set_rules('nom','Nom','alpha_dash');
        $this->form_validation->set_rules('prix_bas', 'Prix_bas', 'numeric');
        $this->form_validation->set_rules('prix_reserve', 'Prix_reserve', 'numeric');

        $bool = $this->form_validation->run();
        if ($bool)
        {
            //ajouter la nouvelle enchere dans la base de donnees
            $data = array(
                'nom_objet'=>$this->input->post('nom'),
                'desc_objet'=>$this->input->post('description'),
                'prix_base'=>$this->input->post('prix_bas'),
                'prix_res'=>$this->input->post('prix_reserve'),
            );
            //TODO; date et heure limite
            //TODO; id+cat, id_vendeur
            //TODO; public/privee

            $this->objets_model->insertVente($data);
            echo "<script>alert('Ajouté avec succès');</script>";
            echo "page des encheres wating.....";
        }
        else
        {
            $this->load->view('mise_en_vente');
        }

    }
    private function vendu($data){
        $a= date('Y');
        $m=date('m');
        $d=date('d');
        foreach ($data as $row){
            if($row== 1){
                $jour = substr($row->date_limit, 8, 2);
                $mois = substr($row->date_limit, 5, 2);
                $annee = substr($row->date_limit, 0, 4);

                if($a>=$annee){
                    if ($m>=$mois){
                        if($d>$jour){
                            $ench=$this->encheres_model->get_max_encheres_objet($row->id_objet);
                            $prix_actuel=$ench->prix;
                            $user=$ench->id_acheteur;
                            if($prix_actuel>= $row->prix_res){
                                $this->objets_model->update_statut($row,3);
                                $this->mail_vente($row->id_vendeur, $user);

                            }
                            else {
                                $this->objets_model->update_statut($row,2);
                                $this->mail_annul($row->id_vendeur);
                            }
                        }
                    }

                }
            }


        }
    }
    public function mail_vente($id_vendeur,$id_acheteur){

    }
    public function mail_annul($id_vendeur){

    }
}
