<?php

/*
 * Plugin Name:       ElasticPress on OpenSearch
 * Description:       Makes ElasticPress OpenSearch-compatible
 * Version:           1.0.0
 * Author:            dxw
 * Author URI:        https://dxw.com/
 */

add_filter(
	'ep_elasticsearch_version',
	function() {
		return '7.10';
	}
);

add_filter(
	'ep_elasticsearch_plugins',
	function($info) {
		if (!array_key_exists('ingest-attachment', $info)) {
			$info['ingest-attachment'] = '2.13.0';
		}
		return $info;
	}
);
