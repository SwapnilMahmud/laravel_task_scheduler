<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\products;
use Illuminate\Support\Facades\Log;
class WordofTheDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'word:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a Daily email to all users with a word and its meaning';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $words = [
            'aberration' => 'a state or condition markedly different from the norm',
            'convivial' => 'occupied with or fond of the pleasures of good company',
            'diaphanous' => 'so thin as to transmit light',
            'elegy' => 'a mournful poem; a lament for the dead',
            'ostensible' => 'appearing as such but not necessarily so'
        ];
         
        $key = array_rand($words);
        $value = $words[$key];
        $product = products::all();
        Log::info($product);
        // foreach ($users as $user) {
        //     Mail::raw("{$key} -> {$value}", function ($mail) use ($user) {
        //         $mail->from('info@tutsforweb.com');
        //         $mail->to($user->email)
        //             ->subject('Word of the Day');
        //     });
        // }
         
        $this->info('Word of the Day sent to All Users');
    }
}
