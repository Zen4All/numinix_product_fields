ALTER TABLE products_description ADD care_instructions text NULL default NULL;

INSERT INTO product_type_layout (configuration_id, configuration_title, configuration_key, configuration_value, configuration_description, product_type_id, sort_order, last_modified, date_added, use_function, set_function) VALUES 
(NULL, 'Show Care Instructions', 'SHOW_PRODUCT_INFO_CARE_INSTRUCTIONS', '0', 'Show the care instructions on the product info page?', 1, 17, NULL, NOW(), NULL, 'zen_cfg_select_option(array(\'1\', \'0\'),');