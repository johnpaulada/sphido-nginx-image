<?php
/** @author Roman Ozana <ozana@omdesign.cz> */

/**
 * Try download file.
 *
 * @param string $file
 * @param string $name
 * @param  $expire
 */
function download($file, $name = null, $expire = null) {
	($finf = finfo_open(FILEINFO_MIME)) or function () use ($file) {
		throw new \BadFunctionCallException("File '$file' not found", 404);
	};

	$mime = finfo_file($finf, $file);
	finfo_close($finf);

	header('Pragma: public');
	header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($file)) . ' GMT');
	header('ETag: ' . md5(dirname($file)));

	if ($expire) {
		header('Cache-Control: maxage=' . strtotime($expire));
		header('Expires: ' . gmdate('D, d M Y H:i:s', time() + strtotime($expire)) . ' GMT');
	}

	header('Content-Disposition: attachment; filename=' . urlencode($name ?: basename($file)));
	header('Content-Type: ' . $mime);
	header('Content-Length: ' . filesize($file));
	header('Connection: close');

	readfile($file);
}

