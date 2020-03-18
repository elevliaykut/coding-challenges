<?php

$kotukelime = ['elma','armut','cilek'];
        if(in_array($request->input('kullanici_adi'),$kotukelime)){
            $badword=strlen($request->input('kullanici_adi'));
            $sansur="";
            for($i=1; $i <=$badword; $i++){
                $sansur=$sansur."*";
            }
            $username = $request->input('kullanici_adi');
            $username = $sansur;
            print_r($username);
        }