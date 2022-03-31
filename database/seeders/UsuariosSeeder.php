<?php


use Phinx\Seed\AbstractSeed;

class UsuariosSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {

        $datos = [
            [
                'nombre_usuario' => 'usuario1',
                'correo_electronico' => 'usuario1@prueba.com',
                'clave' => password_hash("1234", PASSWORD_DEFAULT),
                'rol' => 'usuario',
                'creado_en' => date('Y-m-d H:i:s')
            ],[
                'nombre_usuario' => 'admin',
                'correo_electronico' => 'admin@prueba.com',
                'clave' => password_hash("1234", PASSWORD_DEFAULT),
                'rol' => 'usuario',
                'creado_en' => date('Y-m-d H:i:s')
            ]
        ];

        $usuarios = $this->table('usuarios');
        $usuarios->insert($datos)
                 ->saveData();        

    }
}
