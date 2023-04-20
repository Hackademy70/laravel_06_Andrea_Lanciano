ESERCIZIO
Continuare laravel_05 completando il progetto con i nuovi passaggi visti a lezione.
Il blog deve quindi avere:

    
form di creazione di un articolo (create)
pagina di visualizzazione degli articoli (index)
pagina di dettaglio dei singoli articoli con la nuova rotta parametrica (show)
form di edit degli articoli (edit)
possibilità di cancellare il singolo articolo (destroy)


# Import MySQL
winpty mysql -u root -p

create database

-> table plus connection

php artisan make:migration create_NOMEDATABASE_table

poi modificare migration per avere i nostri campi