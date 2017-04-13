Nette Framework Hello World Benchmark
-------------------------------------

Setup:

- install framework using `composer update`
- set the log directory and the temporary files directory to be writable: `chmod go+w -R log/ temp/`
- warm-up the cache: `ab http://localhost/framework-bench/helloworld/nette/www/index.php`
- run test: `ab -n 2000 -c 10 http://localhost/framework-bench/helloworld/nette/www/index.php`
- delete contents of `temp/`
