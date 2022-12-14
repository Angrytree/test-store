<?php

namespace App\Jobs;

use App\Models\Category;
use App\Models\Currency;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CurrencyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Log::info("job __construct");
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Log::info("job handle");
        $currencies = Http::withOptions([
            'verify' => false,
        ])->get('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json')->json();
        $data = [];
        $data[] = ['name' => 'GRN', 'rate' => 1];
        foreach($currencies as $currency) {
            $data[] = ['name' => $currency['cc'], 'rate' => $currency['rate']];
        }
        Currency::truncate();
        Currency::insert($data);
    }
}
