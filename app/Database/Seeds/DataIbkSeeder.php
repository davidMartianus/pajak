<?php

namespace App\Database\Seeds;

use App\Entities\DataBlokirEntity;
use App\Models\DataBlokirModel;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class DataIbkSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $data_blokir = new DataBlokirModel();

        for ($i = 0; $i < 1000; $i++) {
            $data = new DataBlokirEntity();
            $data->no_surat = $faker->numerify('######');
            $data->nama = $faker->name();
            $data->alamat = $faker->address();
            $data->id_nik = $faker->numerify('################');
            $data->id_npwp = $faker->numerify('################');
            $data->no_rek = $faker->numerify('####-####-####');
            $data->file_pajak = $faker->lexify('file_pajak-??????.pdf');

            $data_blokir->save($data);
        }
    }
}
