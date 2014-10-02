ALTER TABLE products_description ADD products_video_embed_2 text NULL default NULL;
ALTER TABLE products_description ADD products_video_embed_2_thumbnail varchar(200) NULL default NULL after products_video_embed_2;

INSERT INTO product_type_layout (configuration_id, configuration_title, configuration_key, configuration_value, configuration_description, product_type_id, sort_order, last_modified, date_added, use_function, set_function) VALUES 
(NULL, 'Show Product Video Embed 2', 'SHOW_PRODUCT_INFO_VIDEO_EMBED_2', '0', 'Show the video embed 2 on the product info page?', 1, 17, NULL, NOW(), NULL, 'zen_cfg_select_option(array(\'1\', \'0\'),');