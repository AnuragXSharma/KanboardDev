Как установить Канборд на Debian?
=================================

Некоторые возможности Канборда требуют [запуск ежедневных фоновых задач](cronjob.markdown).


Debian 8 (Jessie)[¶](#debian-8-jessie "Ссылка на этот заголовок")
-----------------------------------------------------------------


Установите Apache и PHP:


    apt-get update

    apt-get install -y php5 php5-sqlite php5-gd unzip

    service apache2 restart



Установите Канборд:


    cd /var/www/html

    # Download the latest release from https://github.com/kanboard/kanboard/releases
    wget https://github.com/kanboard/kanboard/archive/v<version>.zip

    unzip kanboard-<version>.zip
    chown -R www-data:www-data kanboard-<version>/data
    rm kanboard-<version>.zip



Debian 7 (Wheezy)[¶](#debian-7-wheezy "Ссылка на этот заголовок")
-----------------------------------------------------------------



Установите Apache и PHP:



    apt-get update

    apt-get install -y php5 php5-sqlite php5-gd unzip



Установите Канборд:



    cd /var/www

    # Download the latest release from https://github.com/kanboard/kanboard/releases
    wget https://github.com/kanboard/kanboard/archive/v<version>.zip

    unzip kanboard-<version>.zip
    chown -R www-data:www-data kanboard-<version>/data
    rm kanboard-<version>.zip



Debian 6 (Squeeze)[¶](#debian-6-squeeze "Ссылка на этот заголовок")
-------------------------------------------------------------------



Установите Apache и PHP:



    apt-get update

    apt-get install -y libapache2-mod-php5 php5-sqlite php5-gd unzip



Установите Канборд:



    cd /var/www

    # Download the latest release from https://github.com/kanboard/kanboard/releases
    wget https://github.com/kanboard/kanboard/archive/v<version>.zip

    unzip kanboard-<version>.zip
    chown -R www-data:www-data kanboard-<version>/data
    rm kanboard-<version>.zip



 



[Русская документация Kanboard](http://kanboard.ru/doc/)

