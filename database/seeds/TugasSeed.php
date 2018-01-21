<?php

use Illuminate\Database\Seeder;

class TugasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
        	      ['no'=>'0001','nama_dokter'=>'dina sri harrtini','jam_praktek'=>'12:00','hari_praktek'=>'selasa'],
        	      ['no'=>'0002','nama_dokter'=>'tania koerunnisa','jam_praktek'=>'13:00','hari_praktek'=>'Rabu'],
        ];
        DB::table('tugass')->insert($query);
    }
    }

