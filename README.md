Aplikacja opierająca się na Docker Compose, pozwalająca na uruchomienie usługi LEMP (Linux, Nginx, MySQL, PHP)

<code>docker-compose.yml</code> w sekcji *services* definiuje poszczególne usługi. Kontenery nginx, mysql i phpmyadmin korzystają z gotowych obrazów pochodzących
z serwisu DockerHub. Kontener php oparty jest na obrazie budowanym poprzez prosty plik Dockerfile.

Kontener PHP jest zależny od MySQL - wykonywany jest wcześniej healthcheck usługi MySQL.

Uruchomienie:

<code>docker compose up -d</code>

Następnie:</br>
<code>localhost:6001</code> - phpmyadmin </br>
<code>localhost:6666</code> - nginx

\* Niektóre przeglądarki mogą blokować port 6666 i oznaczać go jako *unsafe*. Możliwa zmiana portu w pliku *docker-compose.yml*.
