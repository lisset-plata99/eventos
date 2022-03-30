<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $clientes = array(
            array('nombre' => 'monica','apellido' => 'perez','celular' => '5513467946','email' => 'monica.perez@gmail.com'),
            array('nombre' => 'miranda','apellido' => 'lopez','celular' => '55147852369','email' => 'miranda.lopez@gmail.com'),
            array('nombre' => 'hannya','apellido' => 'gutierrez','celular' => '5679463164','email' => 'hannya.gutierrez@gmail.com')
        );

        $menucomida = array(
            array('descripcionplatillos' => 'crema:Nuez,pastas:Codito Hawaiano,platillo fuerte:Lomo al Tamarindo,guarnicion:Ensalada de verduras a la mantequilla,bebida:Refresco','precio' => '150'),
            array('descripcionplatillos' => 'crema:Brócoli,pastas:Spaguetti a la italiana,platillo fuerte:Lomo al Vino Blanco,guarnicion:Ensalada Rusa,bebida:Tequila','precio' => '250'),
            array('descripcionplatillos' => 'crema:Poblana,pastas:Codito c/jamón y queso,platillo fuerte:Pollo a la jardinera,guarnicion:Ensalada de lechuga en salsa Aurora,bebida:Whisky','precio' => '300')
        );

        $tipoevento = array(
            array('descripcion' => 'boda'),
            array('descripcion' => '15 años'),
            array('descripcion' => 'cumpleaños')
        );

        $agenda = array(
            array('año' => '2020','mes' => '01','dia' => '10','horainicio' => '2022-03-30 07:22:28.000000','horafin' => '2022-03-30 17:22:28.000000','clienteid' => '1','menucomidaid' => '1','tipoeventoid' => '1','numeroinvitados' => '100'),
            array('año' => '2021','mes' => '05','dia' => '20','horainicio' => '2022-03-30 08:22:28.000000','horafin' => '2022-03-30 18:22:28.000000','clienteid' => '2','menucomidaid' => '2','tipoeventoid' => '2','numeroinvitados' => '200'),
            array('año' => '2022','mes' => '10','dia' => '30','horainicio' => '2022-03-30 09:22:28.000000','horafin' => '2022-03-30 19:22:28.000000','clienteid' => '3','menucomidaid' => '3','tipoeventoid' => '3','numeroinvitados' => '300')
        );


        for ($i = 0; $i < count($clientes); $i++) {
            DB::table('cliente')->insert([
                    'Nombre' => $clientes[$i]['nombre'],
                    'Apellido' => $clientes[$i]['apellido'],
                    'Celular' => $clientes[$i]['celular'],
                    'Email' => $clientes[$i]['email']
                ]);
            };

        for ($i = 0; $i < count($menucomida); $i++) {
            DB::table('menucomida')->insert([
                    'DescripcionPlatillos' => $menucomida[$i]['descripcionplatillos'],
                    'Precio' => $menucomida[$i]['precio']
                ]);
            };

        for ($i = 0; $i < count($tipoevento); $i++) {
            DB::table('tipoevento')->insert([
                    'Descripcion' => $tipoevento[$i]['descripcion']
                ]);
            };

        for ($i = 0; $i < count($agenda); $i++) {
            DB::table('agendaeventos')->insert([
                    'Año' => $agenda[$i]['año'],
                    'Mes' => $agenda[$i]['mes'],
                    'Dia' => $agenda[$i]['dia'],
                    'HoraInicio' => $agenda[$i]['horainicio'],
                    'HoraFin' => $agenda[$i]['horafin'],
                    'ClienteId' => $agenda[$i]['clienteid'],
                    'MenuComidaId' => $agenda[$i]['menucomidaid'],
                    'TipoEventoId' => $agenda[$i]['tipoeventoid'],
                    'NumeroInvitados' => $agenda[$i]['numeroinvitados']
                ]);
            };            
    }
}
