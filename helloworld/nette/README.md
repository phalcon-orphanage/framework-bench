# Nette Hello Word Benchmark


## Setup

1) Set directory permissions
2) Warm-up cache

```
$ chmod go+w -R log/ temp/
$ ab http://localhost/bench/nette/www/index.php
```

## Run

```
$ ab -n 1000 -c 5 http://localhost/bench/nette/www/index.php
```

## Links

* [github.com/nette](https://github.com/nette/nette)
* [nette.org](http://nette.org)
