<?php
namespace parsers {

	/**
	 * Title <h1> || Markdown title extractor
	 *
	 * @author Roman Ožana <ozana@omdesign.cz>
	 */
	trait TitleParser {
		/**
		 * Extract main title from HTML or Markdown
		 *
		 * @param string $content
		 * @return null|string
		 */
		public static function parse($content) {
			$pattern = '/<h1[^>]*>([^<>]+)<\/h1>| *# *([^\n]+?) *#* *(?:\n+|$)/isU';
			if (preg_match_all($pattern, $content, $matches, PREG_SET_ORDER)) {
				$first = reset($matches);
				return trim(end($first));
			}
		}
	}
}