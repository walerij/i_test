<?php 

namespace walerij;

class ipoteka 
{
       
    public function getMespay($summa_kr, $srok_kr, $proc_stavka)
    {
       
        $mes_proc=$proc_stavka/100/12;
       
        $tmp=(1+$mes_proc)^($srok_kr*12);
       
        $mespay = $summa_kr*$mes_proc*$tmp/($tmp-1);
        
        return $mespay;
    }
        
}
