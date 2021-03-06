<?php

/**
 * InfoJobOffreTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class InfoJobOffreTable extends Doctrine_Table
{
  /**
   * Returns an instance of this class.
   *
   * @return object InfoJobOffreTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('InfoJobOffre');
  }

  public function getLastOffreList($limit = NULL) {
    $query = $this->addStandardFilters(
            Doctrine_Core::getTable('InfoJobOffre')
           ->createQuery('a')
           ->orderBy('a.created_at DESC')
    );
    if($limit)
      $query->limit($limit);
    return $query;
  }

  public function getOffreByEmailKey($emailKey) {
    return Doctrine_Core::getTable('InfoJobOffre')
           ->createQuery('a')
           ->limit(1)
           ->where('a.emailkey = ?', $emailKey)
           ->andWhere('a.archivage_date IS NULL')
           ->andWhere('expiration_date IS NULL OR a.expiration_date < NOW()');
  }

  public function getOffreById($id) {
      return $this->addStandardFilters(
              Doctrine_Core::getTable('InfoJobOffre')
               ->createQuery('a')
               ->limit(1)
               ->where('a.id = ?', $id)
      );
    }

  public function addStandardFilters($query) {
    return $query->andWhere('validation_date IS NOT NULL')
                 ->andWhere('archivage_date IS NULL')
                 ->andWhere('expiration_date IS NULL OR expiration_date > NOW()');
  }
}
