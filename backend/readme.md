Récupérer la data:
    faire: 
    -docker-compose up
    -docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)
    -aller sur l'adresse IP indiqué
    -trouver la BD imdb_ijs
    -exporter le fichier sql

Importer la data:
    -mysql -h 127.0.0.1 -P 3306 -u root -p
    -use imdb_ijs
    -source imdb_ijs.sql

NE PAS OUBLIER DE SUPPRIMER LE FICHIER .sql IL EST TROP LOURD ET RISQUE DE CRÉER DES PB QUAND ON PUSH

Notation Big-O: 
    - { GET } /api/actors : complexité de O(N) comme l'entité actors n'a pas d'inner joint, donc son temps d'exécution est propotionel à son taille.

    - { DELET, GET } /api/actor/{id} : complexité de O(log(n)) comme l'entité n'a pas d'inner join et qu'elle possède un index unique dans sa table, et on recherche un attribut où sa valeur est égales à un index, le temps d'exécution de la requête est proportionnel au logarithme de la taille d'entrée.

    - { GET } /api/movies : complexité de O(M+N) car l'entié possède un inner join avec une deuxième entité sous forme de table de hachage. La requête prendra dans le pire des cas un  temps d'exécution de O(M+N).

    - { GET } /api/movie/{id} : complexité de O(M+N) car l'entié possède un inner join avec une deuxième entité sous forme de table de hachage. La requête prendra dans le pire des cas un  temps d'exécution de O(M+N).

    - { DELETE } /api/movie/{id} : complexité de O(log(N)), lA requête prendra un temps de O(log(N)) pour rechercher un objet ou son attribut est égale à la valeur mis en paramètre de l'api.

    - { GET } /api/directors : complexité de O(M+N) car l'entié possède un inner join avec une deuxième entité sous forme de table de hachage (pointeur). La requête prendra dans le pire des cas un  temps d'exécution de O(M+N).

    - { GET } /api/director/{id} : complexité de O(M+N) car l'entié possède un inner join avec une deuxième entité sous forme de table de hachage (pointeur). La requête prendra dans le pire des cas un  temps d'exécution de O(M+N).

    - { DELETE } /api/director/{id} : complexité de O(log(N)), la requête prendra un temps de O(log(N)) pour rechercher un objet ou son attribut est égale à la valeur mis en paramètre de l'api.

    - { GET } /api/slow/movies : complexité de O((N + M)²), Dans la fonction, la requête d'exécution pour récupérer les données d'entrés prends une complexité de O(N+M). Les données d'entrés passent dans une bloucle qui est dans une boucle prenant une complexité O(N + M)². 

