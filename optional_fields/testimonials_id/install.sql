ALTER TABLE products ADD products_testimonials_id int(11) NULL default NULL after products_model;

INSERT INTO product_type_layout (configuration_id, configuration_title, configuration_key, configuration_value, configuration_description, product_type_id, sort_order, last_modified, date_added, use_function, set_function) VALUES 
(NULL, 'Show Testimonial', 'SHOW_PRODUCT_INFO_TESTIMONIAL', '0', 'Show testimonials on product info page?', 1, 17, NULL, NOW(), NULL, 'zen_cfg_select_option(array(\'1\' => \'true\', \'0\' => \'false\'),');