Para executar o container utilize o comando docker **compose up --build -d**

Na primeira execução do laravel é necessário realizar alguns passos:

    O primeiro é **criar um arquivo .env** dentro da pasta /src e colocar todo o conteúdo que existe no arquivo .env.example;

    O segundo passo é abrir um novo terminal e, com o container do laravel rodando, digitar o comando **docker compose run --rm composer update**

    No mesmo terminal **docker compose run --rm artisan key:generate**

    Por fim, para criar o banco de dados **docker compose run --rm artisan migrate**

OBSERVAÇÕES:

    Sempre que forem executar comandos do docker, é necessario estar na mesma pasta que contém o arquivo docker-compose.yml (no caso, vai ser a pasta raiz)

    Para executar comandos com o php artisan, utilizem docker compose run --rm artisan COMANDO

    Para executar comandos com o composer, utilizem docker compose run --rm composer COMANDO




- **laravel** http://localhost:8070/

- **nginx** - `:80`
- **mysql - phpadmin** - http://localhost:8071/
- **redis** - `:6379`
- **mailhog** - `:8025` 
 
