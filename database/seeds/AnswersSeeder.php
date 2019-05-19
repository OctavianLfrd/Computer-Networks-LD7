<?php

use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    public function run()
    {
        DB::table('Answers')->insert([
            ['question_id' => 1, 'client' => 'Alfred', 'text' => '<b> - bold, <i> - italic, <u> - underline', 'date' => new \DateTime],
            ['question_id' => 2, 'client' => 'Alfred', 'text' => 'Mums jāinstalē MySQL, lai saglabātu un izmantotu dažāda veida datus mūsu tīmekļa vietnēs', 'date' => new \DateTime],
            ['question_id' => 3, 'client' => 'Alfred', 'text' => 'Mums ir jāveic šādas komandas: \'ftp ftp.data.lv\' (pēc tam, kad ievadīsim pieteikumvārdu, paroli), tad \'cd /statistics\' un pēc tam \'get request.log\'', 'date' => new \DateTime],
            ['question_id' => 4, 'client' => 'Alfred', 'text' => 'Web serveris interpretē PHP', 'date' => new \DateTime],
            ['question_id' => 5, 'client' => 'Alfred', 'text' => 'Mēs rakstām šo skriptu atrašanās vietu \'action\' atribūtā', 'date' => new \DateTime],
            ['question_id' => 6, 'client' => 'Alfred', 'text' => 'Pārnēsājamo, daudzuzdevumu un daudzlietotāju operētājsistēmu ģimene', 'date' => new \DateTime],
            ['question_id' => 7, 'client' => 'Alfred', 'text' => 'Hosts fails definē atbilstību starp IP adresēm un to domēnu nosaukumiem', 'date' => new \DateTime],
            ['question_id' => 8, 'client' => 'Alfred', 'text' => 'phpMyAdmin, WorkBench, ...', 'date' => new \DateTime],
            ['question_id' => 9, 'client' => 'Alfred', 'text' => 'Ubuntu, Debian, CentOS, Kali Linux, ...', 'date' => new \DateTime],
            ['question_id' => 10, 'client' => 'Alfred', 'text' => 'Izveidojiet failu \'index.php\', kas ievietots int <?= "Hello world!" ?> un ievietojiet šo failu failā \'/var/www/html\' (Apache gadījumā Linux)', 'date' => new \DateTime]
        ]);
    }
}
