<?php

namespace megastruktur\PhoneCountryCodes;

class PhoneCountryCodes {
  
  public static function getCodesList() {
    
    $json = file_get_contents(__DIR__ . '/includes/country_codes_vault.json');
    $country_codes = json_decode($json, 1);
    
    return $country_codes;
    
  }
  
}
