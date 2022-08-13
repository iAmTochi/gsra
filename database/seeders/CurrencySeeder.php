<?php

namespace Database\Seeders;


use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currency = array(
            array('name' => 'Nairas','code' => 'NGN','symbol' => '₦'),
            array('name' => 'Leke','code' => 'ALL','symbol' => 'Lek'),
            array('name' => 'Dollars','code' => 'USD','symbol' => '$'),
            array('name' => 'Afghanis','code' => 'AFN','symbol' => '؋'),
            array('name' => 'Pesos','code' => 'ARS','symbol' => '$'),
            array('name' => 'Guilders','code' => 'AWG','symbol' => 'ƒ'),
            array('name' => 'Dollars','code' => 'AUD','symbol' => '$'),
            array('name' => 'New Manats','code' => 'AZN','symbol' => 'ман'),
            array('name' => 'Dollars','code' => 'BSD','symbol' => '$'),
            array('name' => 'Dollars','code' => 'BBD','symbol' => '$'),
            array('name' => 'Rubles','code' => 'BYR','symbol' => 'p.'),
            array('name' => 'Euro','code' => 'EUR','symbol' => '€'),
            array('name' => 'Dollars','code' => 'BZD','symbol' => 'BZ$'),
            array('name' => 'Dollars','code' => 'BMD','symbol' => '$'),
            array('name' => 'Bolivianos','code' => 'BOB','symbol' => '$b'),
            array('name' => 'Convertible Marka','code' => 'BAM','symbol' => 'KM'),
            array('name' => 'Pula','code' => 'BWP','symbol' => 'P'),
            array('name' => 'Leva','code' => 'BGN','symbol' => 'лв'),
            array('name' => 'Reais','code' => 'BRL','symbol' => 'R$'),
            array('name' => 'Pounds','code' => 'GBP','symbol' => '£'),
            array('name' => 'Dollars','code' => 'BND','symbol' => '$'),
            array('name' => 'Riels','code' => 'KHR','symbol' => '៛'),
            array('name' => 'Dollars','code' => 'CAD','symbol' => '$'),
            array('name' => 'Dollars','code' => 'KYD','symbol' => '$'),
            array('name' => 'Pesos','code' => 'CLP','symbol' => '$'),
            array('name' => 'Yuan Renminbi','code' => 'CNY','symbol' => '¥'),
            array('name' => 'Pesos','code' => 'COP','symbol' => '$'),
            array('name' => 'Colón','code' => 'CRC','symbol' => '₡'),
            array('name' => 'Kuna','code' => 'HRK','symbol' => 'kn'),
            array('name' => 'Pesos','code' => 'CUP','symbol' => '₱'),
            array('name' => 'Koruny','code' => 'CZK','symbol' => 'Kč'),
            array('name' => 'Kroner','code' => 'DKK','symbol' => 'kr'),
            array('name' => 'Pesos','code' => 'DOP','symbol' => 'RD$'),
            array('name' => 'Dollars','code' => 'XCD','symbol' => '$'),
            array('name' => 'Pounds','code' => 'EGP','symbol' => '£'),
            array('name' => 'Colones','code' => 'SVC','symbol' => '$'),
            array('name' => 'Pounds','code' => 'FKP','symbol' => '£'),
            array('name' => 'Dollars','code' => 'FJD','symbol' => '$'),
            array('name' => 'Cedis','code' => 'GHC','symbol' => '¢'),
            array('name' => 'Pounds','code' => 'GIP','symbol' => '£'),
            array('name' => 'Quetzales','code' => 'GTQ','symbol' => 'Q'),
            array('name' => 'Pounds','code' => 'GGP','symbol' => '£'),
            array('name' => 'Dollars','code' => 'GYD','symbol' => '$'),
            array('name' => 'Lempiras','code' => 'HNL','symbol' => 'L'),
            array('name' => 'Dollars','code' => 'HKD','symbol' => '$'),
            array('name' => 'Forint','code' => 'HUF','symbol' => 'Ft'),
            array('name' => 'Kronur','code' => 'ISK','symbol' => 'kr'),
            array('name' => 'Rupees','code' => 'INR','symbol' => 'Rp'),
            array('name' => 'Rupiahs','code' => 'IDR','symbol' => 'Rp'),
            array('name' => 'Rials','code' => 'IRR','symbol' => '﷼'),
            array('name' => 'Pounds','code' => 'IMP','symbol' => '£'),
            array('name' => 'New Shekels','code' => 'ILS','symbol' => '₪'),
            array('name' => 'Dollars','code' => 'JMD','symbol' => 'J$'),
            array('name' => 'Yen','code' => 'JPY','symbol' => '¥'),
            array('name' => 'Pounds','code' => 'JEP','symbol' => '£'),
            array('name' => 'Tenge','code' => 'KZT','symbol' => 'лв'),
            array('name' => 'Won','code' => 'KPW','symbol' => '₩'),
            array('name' => 'Won','code' => 'KRW','symbol' => '₩'),
            array('name' => 'Soms','code' => 'KGS','symbol' => 'лв'),
            array('name' => 'Kips','code' => 'LAK','symbol' => '₭'),
            array('name' => 'Lati','code' => 'LVL','symbol' => 'Ls'),
            array('name' => 'Pounds','code' => 'LBP','symbol' => '£'),
            array('name' => 'Dollars','code' => 'LRD','symbol' => '$'),
            array('name' => 'Switzerland Francs','code' => 'CHF','symbol' => 'CHF'),
            array('name' => 'Litai','code' => 'LTL','symbol' => 'Lt'),
            array('name' => 'Denars','code' => 'MKD','symbol' => 'ден'),
            array('name' => 'Ringgits','code' => 'MYR','symbol' => 'RM'),
            array('name' => 'Rupees','code' => 'MUR','symbol' => '₨'),
            array('name' => 'Pesos','code' => 'MXN','symbol' => '$'),
            array('name' => 'Tugriks','code' => 'MNT','symbol' => '₮'),
            array('name' => 'Meticais','code' => 'MZN','symbol' => 'MT'),
            array('name' => 'Dollars','code' => 'NAD','symbol' => '$'),
            array('name' => 'Rupees','code' => 'NPR','symbol' => '₨'),
            array('name' => 'Guilders','code' => 'ANG','symbol' => 'ƒ'),
            array('name' => 'Dollars','code' => 'NZD','symbol' => '$'),
            array('name' => 'Cordobas','code' => 'NIO','symbol' => 'C$'),
            array('name' => 'Krone','code' => 'NOK','symbol' => 'kr'),
            array('name' => 'Rials','code' => 'OMR','symbol' => '﷼'),
            array('name' => 'Rupees','code' => 'PKR','symbol' => '₨'),
            array('name' => 'Balboa','code' => 'PAB','symbol' => 'B/.'),
            array('name' => 'Guarani','code' => 'PYG','symbol' => 'Gs'),
            array('name' => 'Nuevos Soles','code' => 'PEN','symbol' => 'S/.'),
            array('name' => 'Pesos','code' => 'PHP','symbol' => 'Php'),
            array('name' => 'Zlotych','code' => 'PLN','symbol' => 'zł'),
            array('name' => 'Rials','code' => 'QAR','symbol' => '﷼'),
            array('name' => 'New Lei','code' => 'RON','symbol' => 'lei'),
            array('name' => 'Rubles','code' => 'RUB','symbol' => 'руб'),
            array('name' => 'Pounds','code' => 'SHP','symbol' => '£'),
            array('name' => 'Riyals','code' => 'SAR','symbol' => '﷼'),
            array('name' => 'Dinars','code' => 'RSD','symbol' => 'Дин.'),
            array('name' => 'Rupees','code' => 'SCR','symbol' => '₨'),
            array('name' => 'Dollars','code' => 'SGD','symbol' => '$'),
            array('name' => 'Dollars','code' => 'SBD','symbol' => '$'),
            array('name' => 'Shillings','code' => 'SOS','symbol' => 'S'),
            array('name' => 'Rand','code' => 'ZAR','symbol' => 'R'),
            array('name' => 'Rupees','code' => 'LKR','symbol' => '₨'),
            array('name' => 'Kronor','code' => 'SEK','symbol' => 'kr'),
            array('name' => 'Dollars','code' => 'SRD','symbol' => '$'),
            array('name' => 'Pounds','code' => 'SYP','symbol' => '£'),
            array('name' => 'New Dollars','code' => 'TWD','symbol' => 'NT$'),
            array('name' => 'Baht','code' => 'THB','symbol' => '฿'),
            array('name' => 'Dollars','code' => 'TTD','symbol' => 'TT$'),
            array('name' => 'Lira','code' => 'TRY','symbol' => '₺'),
            array('name' => 'Liras','code' => 'TRL','symbol' => '£'),
            array('name' => 'Dollars','code' => 'TVD','symbol' => '$'),
            array('name' => 'Hryvnia','code' => 'UAH','symbol' => '₴'),
            array('name' => 'Pesos','code' => 'UYU','symbol' => '$U'),
            array('name' => 'Sums','code' => 'UZS','symbol' => 'лв'),
            array('name' => 'Bolivares Fuertes','code' => 'VEF','symbol' => 'Bs'),
            array('name' => 'Dong','code' => 'VND','symbol' => '₫'),
            array('name' => 'Rials','code' => 'YER','symbol' => '﷼'),
            array('name' => 'Zimbabwe Dollars','code' => 'ZWD','symbol' => 'Z$'),
            //array('name' => 'Rupees','code' => 'INR','symbol' => '₹')
          );

          foreach($currency as $currency){
            Currency::create($currency);
          }
    }
}
