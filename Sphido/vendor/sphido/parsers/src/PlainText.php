<?php
namespace parsers {
	/**
	 * Extract pure text from html or markdown content
	 *
	 * @author Roman Ožana <ozana@omdesign.cz>
	 */
	trait PlainText {

		/**
		 * Return plain text from markdown and HTML mix
		 *
		 * @see https://gist.github.com/jbroadway/2836900
		 *
		 * @param string $content
		 * @return mixed
		 */
		public static function parse($content) {
			$rules = [
				'/(#+) ?(.*)/' => '\2', // headers
				'/\[([^\[]+)\]\(([^\)]+)\)/' => '\1', // links
				'/(\*\*|__)(.*?)\1/' => '\2', // bold
				'/(\*|_)(.*?)\1/' => '\2', // emphasis
				'/\~\~(.*?)\~\~/' => '\1', // del
				'/\:\"(.*?)\"\:/' => '\1', // quote
				'/`(.*?)`/' => '\1', // inline code
				'/\s+/' => ' ' // strip spaces
			];

			return trim(preg_replace(array_keys($rules), array_values($rules), strip_tags($content)));
		}
	}
}