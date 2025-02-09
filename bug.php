```php
function processData(array $data): array {
    foreach ($data as &$value) {
        if (is_string($value)) {
            $value = strtolower($value);
        }
    }
    return $data;
}

$myData = ['Apple', 'Banana', 123];
$processedData = processData($myData);
print_r($processedData);
```