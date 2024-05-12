<?php

namespace App\Http\Controllers;

use AmrShawky\LaravelCurrency\Facade\Currency;

class ExchangeRatesController extends Controller
{
    public function convert() 
    {
        $amount       = 10000;
        $baseCurrency = 'TWD';
        $outputCurrencyAry = ['USD', 'AUD', 'EUR', 'SGD', 'HKD'];
        $startDate    = '2023-02-22';
        $endDate      = '2023-03-01';
        $convertedAmount = Currency::convert()->from($baseCurrency)->to($outputCurrencyAry[0])->amount($amount)->round(2)->get();
        echo '新台幣金額 $' . $amount . ' ' . '匯率換算成美金 $' . $convertedAmount . PHP_EOL;
        $timeSeriesCurrencyAry = Currency::rates()->timeSeries($startDate, $endDate)->symbols($outputCurrencyAry)->base($baseCurrency)->amount($amount)->round(2)->get();
        foreach ($timeSeriesCurrencyAry as $date => $timeSeriesCurrency) {
            echo '日期：' . $date . ' ' . '新台幣金額 $' . $amount . ' ' . '匯率換算成美金 $' . $timeSeriesCurrency['USD'] . PHP_EOL;
            echo '日期：' . $date . ' ' . '新台幣金額 $' . $amount . ' ' . '匯率換算成澳大利亞元 $' . $timeSeriesCurrency['AUD'] . PHP_EOL;
            echo '日期：' . $date . ' ' . '新台幣金額 $' . $amount . ' ' . '匯率換算成歐元 $' . $timeSeriesCurrency['EUR'] . PHP_EOL;
            echo '日期：' . $date . ' ' . '新台幣金額 $' . $amount . ' ' . '匯率換算成新加坡元 $' . $timeSeriesCurrency['SGD'] . PHP_EOL;
            echo '日期：' . $date . ' ' . '新台幣金額 $' . $amount . ' ' . '匯率換算成港元 $' . $timeSeriesCurrency['HKD'] . PHP_EOL;
        }
    }
}
