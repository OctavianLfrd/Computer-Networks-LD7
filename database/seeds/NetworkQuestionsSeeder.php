<?php

use Illuminate\Database\Seeder;

class NetworkQuestionsSeeder extends Seeder
{
    public function run()
    {
        DB::table('NetworkQuestions')->insert([
            ['subject' => 'WEB lapaspuses izveidošana',   'question' => 'Kas nozīme tagi <b>, <i> un <u> html dokumentā?'],
            ['subject' => 'Tīmekļa dienestu uzstādīšana', 'question' => 'Priekš kam WEB serverī jāinstalē programmatūra MySQL?'],
            ['subject' => 'Tīkla ierīču uzstādīšana',     'question' => 'Kādas darbības nepieciešams izpildīt lai konsoles logā lejupielādēt failu ar sekojošo URI: ftp://dummy:foo@ftp.data.lv/statistic/requests.log?'],
            ['subject' => 'Tīmekļa dienestu uzstādīšana', 'question' => 'Kādu lomu WEB serverī izpilda programmatūra PHP?'],
            ['subject' => 'WEB lapaspuses izveidošana',   'question' => 'Kā html dokumentā var norādīt ar kādu skriptu būs apstrādāti dati, kas lietotājs ievadīs formā?'],
            ['subject' => 'Tīkla operētājsistēmas',       'question' => 'Kas ir Unix?'],
            ['subject' => 'Intertīkla konfigurēšana',     'question' => 'Kādu informāciju satur fails hosts?'],
            ['subject' => 'Tīmekļa dienestu uzstādīšana', 'question' => 'Kādu programmatūru var pielietot darbam ar MySQL datubāzes vadības sistēmai?'],
            ['subject' => 'Tīkla operētājsistēmas',       'question' => 'Kādas populāras Linux operētājsistēmas var nosaukt?'],
            ['subject' => 'Tīmekļa dienestu uzstādīšana', 'question' => 'Kā pārbaudīt vai PHP interpretators ir uzstādīts un strādā datorā?']
        ]);
    }
}
