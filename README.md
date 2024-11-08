Para executar o container utilize o comando docker compose up --build -d

Na primeira execução do laravel é necessário realizar alguns passos:

    O primeiro é criar um arquivo .env dentro da pasta /src e colocar todo o conteúdo que existe no arquivo .env.example;

    O segundo passo é abrir um novo terminal e, com o container do laravel rodando, digitar o comando **docker compose run --rm composer update**

    No mesmo terminal **docker compose run --rm artisan key:generate**

OBSERVAÇÕES:

    Sempre que for executar comandos do docker, é necessario estar na mesma pasta que contém o arquivo docker-compose.yml (no caso, vai ser a pasta raiz)

    Para executar comandos com o composer, utilizem docker compose run --rm composer COMANDO


- **laravel** http://localhost:8070/

- **nginx** - `:80`
- **mysql - phpadmin** - http://localhost:8071/
- **redis** - `:6379`
- **mailhog** - `:8025` 
 
 Testes no Insomnia
 Configuração do insomnia
 
 Headers
 token: "token_do_desafio"
 Accept: application/json (esse serve para funcione o arquivo DealRequest.php que valida a entrada de dados do Json do desafio).
 
 Body
 Json - o Json de entrada para validar o resultado.
 

Route::post('/deal', [DealController::class, 'createDeal']);






