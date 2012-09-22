# Nette Framework Hello World Benchmark


## Setup

* Set the `RewriteBase` directive in the `www/.htaccess` file if you are running in sub-folder:

```
RewriteBase /framework-bench/helloworld/nette/www/
```

* Set the log directory and the temporary files directory to be writable by the apache process:

```
$ chmod go+w -R log/ temp/
```

* Warm-up the cache:

```
$ ab http://localhost/framework-bench/helloworld/nette/www/index.php?presenter=Say&action=hello
```

or if you are using `mod_rewrite`:

```
$ ab http://localhost/framework-bench/helloworld/nette/www/say/hello
```



## Run

```
$ ab -n 1000 -c 5 http://localhost/framework-bench/helloworld/nette/www/index.php?presenter=Say&action=hello
```

or if you are using `mod_rewrite`:

```
$ ab -n 1000 -c 5 http://localhost/framework-bench/helloworld/nette/www/say/hello
```
