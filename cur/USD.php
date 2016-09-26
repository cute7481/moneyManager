<?php
 
    echo get_currency("USD", "KRW");
 
    /*
     * Retrieve real-time currency from Yahoo Finance
     * 
     * @param   string  $from_currency  e.g.) AUD
     * @param   string  $to_currency    e.g.) KRW
     * @access  public
     * @return  float   -1 as false, positivle float value as currency value
     *  
     */
    function get_currency($from_currency, $to_currency)
    {
        $url = 'http://download.finance.yahoo.com/d/quotes.csv?s='.$from_currency.$to_currency.'=X&f=sl1d1t1c1ohgv&e=.csv';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $currency_csv = curl_exec($ch);
        curl_close ($ch);
 
        $csv_data = explode(',', $currency_csv);
        $currency_value = -1;
        if(sizeof($csv_data) == 9 && isset($csv_data[1]))
        {
            $currency_value = (float)$csv_data[1];
            $currency_value = number_format($currency_value,2, '.', '');
 
            // FIXME: Do Something
        }
        unset($csv_data); unset($currency_csv);
        return $currency_value;
    }
?>
