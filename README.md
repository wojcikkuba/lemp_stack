Aplikacja opierająca się na Docker Compose, pozwalająca na uruchomienie usługi LEMP (Linux, Nginx, MySQL, PHP)

<code>docker-compose.yml</code> w sekcji *services* definiuje poszczególne usługi. Kontenery nginx, mysql i phpmyadmin korzystają z gotowych obrazów pochodzących
z serwisu DockerHub. Kontener php oparty jest na obrazie budowanym poprzez prosty plik Dockerfile.
