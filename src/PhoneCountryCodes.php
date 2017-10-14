<?php

namespace megastruktur;

class PhoneCountryCodes {
  
  /**
   * Get codes list
   *    
   * @return array
   * 
   *  "country_code" => [
   *    "name",
   *    "dial_code",
   *    "code",
   *  ]
   */
  public static function getCodesFullList() {
    
    $country_phone_codes = self::parseCodeVault();
    
    $codes_list = [];
    
    foreach ($country_phone_codes as $code) {
      $codes_list[$code['code']] = $code;
    }
    
    return $codes_list;
    
  }
  
  
  /**
   * Get the list of phone codes.
   * 
   * @return array
   *  "AF" => "+93",
   *  "AX" => "+358",
   *  "AL" => "+355",
   *  "DZ" => "+213",
   *  "AS" => "+1684",
   */
  public static function getCodesList() {
    
    $phone_codes = self::parseCodeVault();
    
    $codes_list = [];
    foreach ($phone_codes as $c) {
      $codes_list[$c['code']] = $c['dial_code'];
    }
    
    return $codes_list;
  }
  
  /**
   * Parse vault with phone codes and return array.
   * @return array
   */
  private static function parseCodeVault() {
    
    $json = file_get_contents(__DIR__ . '/includes/country_codes_vault.json');
    return json_decode($json, 1);
    
  }
  
}


