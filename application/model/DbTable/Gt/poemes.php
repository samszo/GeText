<?php
/**
 * Ce fichier contient la classe Gt_poemes.
 *
 * @copyright  2013 Samuel Szoniecky
 * @license    "New" BSD License
 */

class Model_DbTable_Gt_poemes extends Zend_Db_Table_Abstract
{
    
    /**
     * Nom de la table.
     */
    protected $_name = 'gt_poemes';
    
    /**
     * Clef primaire de la table.
     */
    protected $_primary = 'id_poeme';


    /**
     * Ajoute une entrée Gt_poeme.
     *
     * @param array $data
     *  
     * @return integer
     */
    public function ajouter($data)
    {
		if(!isset($data['maj']))$data['maj']= new Zend_Db_Expr('NOW()');
    	$id = $this->insert($data);
    	return $id;
    } 
           
    /**
     * Recherche une entrée Gt_poemes avec la clef primaire spécifiée
     * et modifie cette entrée avec les nouvelles données.
     *
     * @param integer $id
     * @param array $data
     *
     * @return void
     */
    public function edit($id, $data)
    {        
   	
    	$this->update($data, 'gt_poemes.id_poeme = ' . $id);
    }
    
    /**
     * Recherche une entrée Gt_poemes avec la clef primaire spécifiée
     * et supprime cette entrée.
     *
     * @param integer $id
     *
     * @return int
     */
    public function remove($id)
    {
    	$nb = $this->delete('gt_poemes.id_poeme = ' . $id);
    	return $nb;
    }

    
    /**
     * Récupère toutes les entrées Gen_concepts avec certains critères
     * de tri, intervalles
     */
    public function getAll($order=null, $limit=0, $from=0)
    {
   	
    	$query = $this->select()
                    ->from( array("gt_poemes") );
                    
        if($order != null)
        {
            $query->order($order);
        }

        if($limit != 0)
        {
            $query->limit($limit, $from);
        }

        return $this->fetchAll($query)->toArray();
    }

    
    	/**
     * Recherche une entrée Gt_poemes avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param int $id_poeme
     *
     * @return array
     */
    public function findById_poeme($id_poeme)
    {
        $query = $this->select()
                    ->from( array("p" => "gt_poemes") )                           
                    ->where( "p.id_poeme = ?", $id_poeme );

        return $this->fetchAll($query)->toArray(); 
    }

}
