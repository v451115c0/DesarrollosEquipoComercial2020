<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        //$schedule->command('dummy:cron')->everyMinute();

        // alimenta la tabla de los kits mokuteki redimidos desde MySQL a SQL, se ejecuta cada 30 minutos
        $schedule->call(function () {
            $product = \App\Inc1USD::select('id', 'code_sponsor', 'payment', 'code_redeem', 'kit', 'status', 'country_id', 'code_ticket', 'created_at', 'updated_at')
            ->get();

            $conexion5 = DB::connection('sqlsrv5');
            $truncate = $conexion5->table('Promotion_kit')->truncate();
            for ($i=0; $i < sizeof($product); $i++) {

                $nPaisLetras = [ 1 => 'COL', 2 => 'MEX', 3 => 'PER', 4 => 'ECU', 5 => 'PAN', 6 => 'GTM', 7 => 'SLV', 8 => 'CRI', 10 => 'CHL'];
                $id = $product[$i]->id;
                $code_sponsor = $product[$i]->code_sponsor;
                $payment = $product[$i]->payment;
                $code_redeem = $product[$i]->code_redeem;
                $kit = $product[$i]->kit;
                $status = $product[$i]->status;
                $country_id = $nPaisLetras[$product[$i]->country_id];
                $code_ticket = $product[$i]->code_ticket;
                $kit = $product[$i]->created_at;
                $Updated_at = $product[$i]->updated_at;

                $update = $conexion5->insert("INSERT INTO Promotion_kit
                                            VALUES ('$id', '$code_sponsor', '$payment', '$code_redeem', '$kit', '$status', '$country_id', '$code_ticket', '$kit', '$Updated_at')");
            }
            \DB::disconnect('sqlsrv5');
            
            echo "Promotion_kit inserted $i ";
        })->everyThirtyMinutes();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
