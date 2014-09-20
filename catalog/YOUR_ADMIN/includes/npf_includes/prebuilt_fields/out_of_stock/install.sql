ALTER TABLE products ADD out_of_stock int(1) NULL default 0;

INSERT INTO product_type_layout (configuration_id, configuration_title, configuration_key, configuration_value, configuration_description, product_type_id, sort_order, last_modified, date_added, use_function, set_function) VALUES 
(NULL, 'Show Product as Out of Stock', 'SHOW_PRODUCT_INFO_OUT_OF_STOCK', '0', 'Show out of stock in place of the add to cart button for specific products that have been set out of stock but still active', 1, 17, NULL, NOW(), NULL, 'zen_cfg_select_option(array(\'1\', \'0\'),');