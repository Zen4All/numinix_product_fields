<?php

function npf_field_value($id, $field){
    global $db;
    $product = $db->Execute("SELECT * FROM ".TABLE_PRODUCTS." WHERE products_id=".(int)$id." LIMIT 1");
    while(!$product->EOF){
        $value = $product->fields[$field];
        return $value;
        $product->MoveNext();
    }
}