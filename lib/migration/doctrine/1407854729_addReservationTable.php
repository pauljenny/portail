<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class addReservationTable extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('reservation', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '8',
             ),
             'id_user_valid' => 
             array(
              'type' => 'integer',
              'notnull' => '',
              'length' => '8',
             ),
             'id_user_reserve' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'id_asso' => 
             array(
              'type' => 'integer',
              'notnull' => '',
              'length' => '8',
             ),
             'id_salle' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'date' => 
             array(
              'type' => 'date',
              'notnull' => '1',
              'length' => '25',
             ),
             'heuredebut' => 
             array(
              'type' => 'time',
              'notnull' => '1',
              'length' => '25',
             ),
             'heurefin' => 
             array(
              'type' => 'time',
              'notnull' => '1',
              'length' => '25',
             ),
             'allday' => 
             array(
              'type' => 'boolean',
              'notnull' => '1',
              'length' => '25',
             ),
             'activite' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'estvalide' => 
             array(
              'type' => 'boolean',
              'notnull' => '1',
              'length' => '25',
             ),
             'commentaire' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
        $this->createTable('salle', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '8',
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'unique' => '1',
              'length' => '255',
             ),
             'capacite' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'couleur' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '6',
             ),
             'description' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '',
             ),
             'id_pole' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('reservation');
        $this->dropTable('salle');
    }
}
