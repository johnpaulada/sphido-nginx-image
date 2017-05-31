<?php
namespace parsers {

	/**
	 * Metadata extractor from Markdown or HTML content
	 *
	 * <!--
	 * key: value
	 * key2: value
	 * key3: value
	 * -->
	 *
	 * will be transform to
	 *
	 * ['key' => value, 'key2' => 'value', 'key3' => 'value']
	 *
	 * @author Roman Ožana <ozana@omdesign.cz>
	 */
	trait MetadataParser {

		/**
		 * Parse content and getting metadata
		 *
		 * @param $content
		 * @return array
		 */
		public static function parse($content) {
			preg_match('/<!--(.*)-->/sU', $content, $matches);
			if ($matches && $ini = end($matches)) {
				$ini = preg_replace('#^([^:]+)\s*:\s*(.+)\s?$#Umi', '$1=$2', $ini);
				return parse_ini_string($ini, false, INI_SCANNER_RAW);
			}
		}
	}
}