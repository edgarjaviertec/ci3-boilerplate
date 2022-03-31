<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CrearTablaDeUsuarios extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        // create the table
        $table = $this->table('usuarios', ['signed' => false], ['null' => false]);
        $table->addColumn('nombre_usuario', 'string', ['limit' => 255], ['null' => false])
        ->addColumn('correo_electronico', 'string', ['limit' => 255], ['null' => false])
        ->addColumn('clave', 'string', ['limit' => 255], ['null' => false])
        ->addColumn('rol', 'string', ['limit' => 255], ['null' => false])
        ->addColumn('creado_en', 'timestamp', ['null' => true])
        ->addColumn('actualizado_en', 'timestamp', ['null' => true])
        ->addIndex(['nombre_usuario', 'correo_electronico'], ['unique' => true])
        ->create();        

    }
}
