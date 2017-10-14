# Phone Country Codes

The library provides a list of country phone codes.

### Example

`getCodesList` method:
```
   "AF" => "+93",
   "AX" => "+358",
   "AL" => "+355",
   "DZ" => "+213",
   "AS" => "+1684",
```

`getCodesFullList` method allows to get the list of all details per phone/country code.

### Usage

```php
// Return the list of phone codes:
\megastruktur\PhoneCountryCodes::getCodesList();

/* Return the full array of codes and details:
 *  "country_code" => [
 *    "name",
 *    "dial_code",
 *    "code",
 *  ]
*/
\megastruktur\PhoneCountryCodes::getCodesFullList();
```

