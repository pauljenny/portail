<?php

/**
 * TransactionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TransactionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object TransactionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Transaction');
    }

    public function getAllForAsso($asso, $semestre = null)
    {
      $q = $this->createQuery('q')
              ->leftJoin('q.CompteBanquaire c')
              ->leftJoin('q.TransactionMoyen m')
              ->where('q.asso_id = ?',$asso->getPrimaryKey())
              ->andWhere('q.deleted_at IS NULL')
              ->orderBy('q.compte_id, q.date_transaction');
      if($semestre) $q - $q->andWhere('q.semestre_id = ?', $semestre);
      return $q;
    }
    
    public function getJournalForAsso($asso, $semestre = null)
    {
      return $this->getAllForAsso($asso, $semestre)->andWhere('q.note_de_frais_id IS NULL');
    }

    public function getActiveCount($asso)
    {
        $q = $this->getAllForAsso($asso);
        $a = $q->count();
        return $a;
    }

    public function getRemboursablesForAsso($asso)
    {
      $q = $this->getAllForAsso($asso);
      $q->andWhere('q.moyen_id = 6')->andWhere('q.deleted_at IS NULL')->andWhere('q.note_de_frais_id IS NULL');
      return $q;
    }
}