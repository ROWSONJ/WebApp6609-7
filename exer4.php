<?php
    function test($s)
    {
        $ctr_aa = 0;
        $i = 0;
        if($i < (strlen($s)-1))
        {
            if(substr($s, $i, 1) == 'a')
            {
                return $ctr_aa++;
            }
            else
            {
                return $i++;
            }
        }else
        {
            return $ctr_aa;
        }
    }

    echo test("bbaaccaag")."\n";
    echo test("jjkiaaasew")."\n";
    echo test("JSaaakoiaa")."\n";
?>