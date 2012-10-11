ALTER TABLE products ADD products_sku varchar(32) NULL default NULL after products_model;

INSERT INTO product_type_layout (configuration_id, configuration_title, configuration_key, configuration_value, configuration_description, product_type_id, sort_order, last_modified, date_added, use_function, set_function) VALUES 
(NULL, 'Show SKU', 'SHOW_PRODUCT_INFO_SKU', '0', 'Show product SKU on product info page (requires Numinix Product Fields)?', 1, 17, NULL, NOW(), NULL, 'zen_cfg_select_option(array(\'1\', \'0\'),');