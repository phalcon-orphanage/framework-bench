<?php

/**
 * Builds minified version of framework for better performance.
 * @see https://github.com/nette/build-tools
 */
class ClassCacheBuilder
{

	public static function getClasses()
	{
		return array_merge(get_declared_interfaces(), get_declared_classes());
	}


	public static function build(array $classes)
	{
		$files = array();
		foreach (array_reverse($classes) as $class) {
			$rc = new \ReflectionClass($class);
			$files[$rc->getFileName()] = TRUE;
		}
		$files = array_reverse(array_keys($files));

		$res = '';
		foreach ($files as $file) {
			$s = file_get_contents($file);
			if (!preg_match('#__(DIR|FILE)__|\* @[A-Z]#', $s)) {
				$res .= preg_replace('#^(namespace .+?);#sm', '$1{', substr($s, 5)) . '}';
			}
		}
		return '<?php ' . $res;
	}


	public static function customBuild($file)
	{
		$skip = self::getClasses();

		register_shutdown_function(function() use ($skip, $file) {
			$classes = ClassCacheBuilder::getClasses();
			$classes = array_diff($classes, $skip);
			$classes = array_filter($classes, function($class) {
				return substr($class, 0, 6) === 'Nette\\';
			});
			file_put_contents($file, ClassCacheBuilder::build($classes));
			file_put_contents($file, php_strip_whitespace($file));
		});
	}

}
