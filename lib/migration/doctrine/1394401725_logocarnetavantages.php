<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LogocarnetAvantages extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('carnet_avantages', 'logo', 'string', '100', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('carnet_avantages', 'logo');
    }
}