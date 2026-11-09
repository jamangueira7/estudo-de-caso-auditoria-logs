<?php

// Exemplo simplificado de dados de auditoria por campo (trecho ilustrativo do estudo de caso).
// Conferir contra o código autorizado para divulgação antes de publicar.

$identifiers['ids'][$this->getKey()][] = [
    'field'               => $key,
    'old_value_field'     => $this->original[$key],
    'new_value_field'     => $field,
    'default_description' => $this->defaultDescription ?? '',
];

Log::channel('MysqlLog')->info($logMessage, $identifiers);
