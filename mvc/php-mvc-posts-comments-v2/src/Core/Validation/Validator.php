<?php
namespace App\Core\Validation;

final class Validator
{
    public static function validate(array $data, array $rules): array
    {
        $errors = [];
        foreach ($rules as $field => $ruleStr) {
            $rulesArr = array_filter(array_map('trim', explode('|', $ruleStr)));
            $value = $data[$field] ?? null;

            foreach ($rulesArr as $rule) {
                if ($rule === 'required' && ($value === null || $value === '')) {
                    $errors[$field][] = 'required';
                } elseif ($rule === 'string' && !is_string($value)) {
                    $errors[$field][] = 'string';
                } elseif (str_starts_with($rule, 'min:')) {
                    $min = (int)substr($rule, 4);
                    if (is_string($value) && mb_strlen($value) < $min) $errors[$field][] = "min:$min";
                } elseif (str_starts_with($rule, 'max:')) {
                    $max = (int)substr($rule, 4);
                    if (is_string($value) && mb_strlen($value) > $max) $errors[$field][] = "max:$max";
                } elseif ($rule === 'email') {
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) $errors[$field][] = 'email';
                }
            }
        }
        return [
            'valid' => empty($errors),
            'errors' => $errors,
            'data' => $data,
        ];
    }
}
