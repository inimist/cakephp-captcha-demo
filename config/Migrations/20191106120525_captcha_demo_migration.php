<?php

use Phinx\Migration\AbstractMigration;

class CaptchaDemoMigration extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('captcha_demo');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->create();
    }
}
