ALTER TABLE products_description ADD products_description2 text NULL default NULL;

INSERT INTO product_type_layout (configuration_id, configuration_title, configuration_key, configuration_value, configuration_description, product_type_id, sort_order, last_modified, date_added, use_function, set_function) VALUES 
(NULL, 'Show Product Description 2', 'SHOW_PRODUCT_INFO_DESCRIPTION2', '0', 'Show the second description on the product info page?', 1, 17, NULL, NOW(), NULL, 'zen_cfg_select_option(array(\'1\', \'0\'),');