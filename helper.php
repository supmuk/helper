<?php
/**
 * Remove the directory and its content (all files and subdirectories).
 * @param string $dir the directory name
 * return void
 */
 
 
function rmrf($dir) {
	$rmDirs = glob($dir);

	if (is_array($rmDirs) && count($rmDirs)) {
		foreach ($rmDirs as $file)
		{
			if (is_dir($file)) {
				rmrf("$file/*");
				rmdir($file);
			} else {
				@unlink($file);
			}
		}
	}
}

/**
 *Remove a file from a directory
 * @param string $dir - the directory name
 * @param string $file - the file name
 */
function deleteFile($dir, $file) {
	$dfile = $dir.$file;
	if(file_exists($dfile))
		return @unlink($dfile);
	return true;
}
