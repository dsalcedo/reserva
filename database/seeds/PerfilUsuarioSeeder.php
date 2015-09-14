<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalogo\PerfilUsuario;

class PerfilUsuarioSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('catalogo_perfil_usuario')->truncate();
		PerfilUsuario::create(['clave'=>'trial','titulo'=>'Versión de prueba','descripcion'=>'Cuenta con duración de 30 días.']);
		PerfilUsuario::create(['clave'=>'premium','titulo'=>'Versión Premium','descripcion'=>'Cuenta con duracion limitada al numéro de tiempo contratado. No hay plazo forzoso.']);
	}

}