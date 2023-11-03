<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GerenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'AUDITORIA INTERNA';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'CONSULTORIA JURIDICA';
        $gerencia->save();


        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA EJEC.ADM DE FONDOS OPER.CAMBIARIAS';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA. EJEC. COOP. Y FINAN. INTERNACIONAL';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA. EJEC. DE ADMINISTRACION DE FONDOS';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA. EJEC. DE ADMON INTEGRAL DE RIESGO';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA. EJEC. FONDOS PARA EL DESARROLLO';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA. EJEC. GESTION DEL TALENTO HUMANO';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA. EJEC. SECRETARIA DE LA PRESIDENCIA';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA. EJEC. SEGURIDAD DE LA INFORMACION';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA. EJECUTIVA  RESGUARDO INSTITUCIONAL';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA.EJEC. COOP. FINANCIAMIENTO NACIONAL';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA.EJEC.INFORMACIÓN Y RELACIONES PUBLI';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA.EJEC.PLANIFICACION GESTION ESTRATEG';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA.EJEC.TECNOLOGIA DE LA INFORMACION';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GCIA.PREVENCION Y CONTROL DE LC/FT/FPADM';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GERENCIA DE PREINVERSION Y ASIST.TECNICA';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GERENCIA EJECUTIVA DE ADMINISTRACION';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'GERENCIA EJECUTIVA DE FINANZAS';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'PRESIDENCIA';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'SECRETARÍA DE LA COMISION CONTRATACIONES';
        $gerencia->save();

        $gerencia = new \App\Models\Gerencias();
        $gerencia->descricion = 'VICEPRESIDENCIA EJECUTIVA';
        $gerencia->save();

    }
}
