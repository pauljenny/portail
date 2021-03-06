<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->removeColumn('charte_info', 'asso');
        $this->addColumn('charte_info', 'asso_name', 'string', '20', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->addColumn('charte_info', 'asso', 'string', '20', array(
             'notnull' => '1',
             ));
        $this->removeColumn('charte_info', 'asso_name');
    }
}