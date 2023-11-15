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
