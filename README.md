project
=======

A Symfony project created on June 13, 2018, 3:09 pm.


bundle
=======

bin/console generate:bundle

composer dumpautoload

table
=======

bin/console doctrine:generate:entities CommonBundle --no-backup

bin/console doctrine:schema:update --dump-sql