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