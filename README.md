# What is this?
This is a sample project demonstrating an issue with using illuminate/console as a standalone package.

# How to reproduce
1. Clone this repository
2. Run `composer install`
3. Run `php run.php example`

The output should be something like:
```
PHP Fatal error:  Uncaught Error: Call to undefined method Illuminate\Container\Container::runningUnitTests() in /home/user/illuminate-console-standalone/vendor/illuminate/console/Concerns/ConfiguresPrompts.php:36
Stack trace:
#0 /home/user/illuminate-console-standalone/vendor/illuminate/console/Command.php(179): Illuminate\Console\Command->configurePrompts()
#1 /home/user/illuminate-console-standalone/vendor/symfony/console/Application.php(1076): Illuminate\Console\Command->run()
#2 /home/user/illuminate-console-standalone/vendor/symfony/console/Application.php(342): Symfony\Component\Console\Application->doRunCommand()
#3 /home/user/illuminate-console-standalone/vendor/symfony/console/Application.php(193): Symfony\Component\Console\Application->doRun()
#4 /home/user/illuminate-console-standalone/run.php(17): Symfony\Component\Console\Application->run()
#5 {main}
  thrown in /home/user/illuminate-console-standalone/vendor/illuminate/console/Concerns/ConfiguresPrompts.php on line 36
```
