CREATE TABLE sys_file_metadata (

	dc_contributor varchar(255) DEFAULT '' NOT NULL,
	dc_coverage varchar(255) DEFAULT '' NOT NULL,
	dc_creator varchar(255) DEFAULT '' NOT NULL,
	dc_date varchar(255) DEFAULT '' NOT NULL,
	dc_description text NOT NULL,
	dc_format varchar(255) DEFAULT '' NOT NULL,
	dc_identifier varchar(255) DEFAULT '' NOT NULL,
	dc_language varchar(255) DEFAULT '' NOT NULL,
	dc_publisher varchar(255) DEFAULT '' NOT NULL,
	dc_relation varchar(255) DEFAULT '' NOT NULL,
	dc_rights varchar(255) DEFAULT '' NOT NULL,
	dc_source varchar(255) DEFAULT '' NOT NULL,
	dc_subject varchar(255) DEFAULT '' NOT NULL,
	dc_title varchar(255) DEFAULT '' NOT NULL,
	dc_type varchar(255) DEFAULT '' NOT NULL,

	iptc4xmpcore_country_code varchar(3) DEFAULT '' NOT NULL,

	iptc4xmpext_location_created_world_region varchar(255) DEFAULT '' NOT NULL,
	iptc4xmpext_country_name varchar(255) DEFAULT '' NOT NULL,
	iptc4xmpext_province_state varchar(255) DEFAULT '' NOT NULL,
	iptc4xmpext_city varchar(255) DEFAULT '' NOT NULL,
	iptc4xmpext_sublocation varchar(255) DEFAULT '' NOT NULL,

	photoshop_caption_writer varchar(255) DEFAULT '' NOT NULL,
	photoshop_instructions text NOT NULL,
	photoshop_source varchar(255) DEFAULT '' NOT NULL,

	xmp_create_date char(24) DEFAULT '' NOT NULL,
	xmp_creator_tool varchar(255) DEFAULT '' NOT NULL,
	xmp_identifier varchar(255) DEFAULT '' NOT NULL,
	xmp_label varchar(255) DEFAULT '' NOT NULL,
	xmp_metadata_date char(24) DEFAULT '' NOT NULL,
	xmp_modify_date char(24) DEFAULT '' NOT NULL,
	xmp_rating int(11) unsigned DEFAULT '0',

	xmprights_certificate varchar(255) DEFAULT '' NOT NULL,
	xmprights_marked tinyint(1) unsigned DEFAULT '0' NOT NULL,
	xmprights_owner varchar(255) DEFAULT '' NOT NULL,
	xmprights_usage_terms text NOT NULL,
	xmprights_web_statement varchar(255) DEFAULT '' NOT NULL,

	cc_license varchar(255) DEFAULT '' NOT NULL,
	cc_more_permissions varchar(255) DEFAULT '' NOT NULL,
	cc_attribution_url varchar(255) DEFAULT '' NOT NULL,
	cc_attribution_name varchar(255) DEFAULT '' NOT NULL,

	xmpmm_derived_from varchar(255) DEFAULT '' NOT NULL,
	xmpmm_document_id varchar(255) DEFAULT '' NOT NULL,
	xmpmm_instance_id varchar(255) DEFAULT '' NOT NULL,
	xmpmm_original_document_id varchar(255) DEFAULT '' NOT NULL,
	xmpmm_rendition_class varchar(255) DEFAULT '' NOT NULL,
	xmpmm_rendition_params varchar(255) DEFAULT '' NOT NULL,

	xmpidq_scheme varchar(255) DEFAULT '' NOT NULL,

) ENGINE=InnoDB;

CREATE TABLE sys_file_reference (

	dc_description text,
	dc_title varchar(255),

	xmprights_usage_terms varchar(255),
	xmprights_web_statement varchar(255),

	cc_license varchar(255),
	cc_more_permissions varchar(255),
	cc_attribution_url varchar(255),
	cc_attribution_name varchar(255),

) ENGINE=InnoDB;