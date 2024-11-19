
<p align="center"><a href="https://www.nacionalinn.com.br" target="_blank"><img src="https://letsimage.s3.sa-east-1.amazonaws.com/editor/nacionalinn/pt/_/1644465025187-02_logo_nacional_inn_rede.png" width="300" alt="Nacionalinn"></a></p>

# Avaliação Técnica - Code Group - Nacionalinn

Esse é um teste técnico para a vaga de **Desenvolvedor PHP Senior** para a empresa **Code Group - Nacionalinn**.

## Descrição

Imagine um grupo de jogadores que se reúnem mensalmente para sessões de RPG. Recentemente, o Mestre do jogo decidiu que, para a próxima sessão de RPG, cada guilda será montada de acordo com classes específicas e deve ser equilibrada considerando os pontos de experiência, XP, de cada jogador. Sua missão é criar uma aplicação para criar guildas equilibradas não só em número de jogadores, mas também em classes e experiência. O front end deve ser funcional, mas não precisa ser visualmente elaborado.

## Requisitos

1. Cadastro de Jogadores e Classes Para o cadastro dos jogadores deve ser obrigatório selecionar as seguintes classes principais do universo RPG:
    - Guerreiro.
    - Mago.
    - Arqueiro.
    - Clérigo.

    Além de definir a classe, cada jogador deve ter um nível de XP (de 1 a 100) que será utilizado para o balanceamento das guildas. Esse XP representa a experiência acumulada do jogador e ajudará a criar guildas equilibradas.

2. Distribuição de Classes nas Guildas Ao formar as guildas, a aplicação deve considerar que cada grupo idealmente possua:
   - Pelo menos um Clérigo para garantir suporte.
   - Ao menos um Guerreiro para absorver dano.
   - Um Mago ou Arqueiro para o ataque à distância.

    Caso não seja possível ter uma formação completa com essas classes, a aplicação deve informar ao Mestre e sugerir uma alternativa próxima ao ideal.

3. Equilíbrio de XP das Guildas

    Ao distribuir os jogadores entre as guildas, o sistema deve buscar equilibrar o total de pontos de XP de cada grupo para garantir que uma guilda não tenha uma vantagem significativa em experiência sobre a outra.

4. Balanceamento de Guildas com Classe e XP: 

    Desenvolva um algoritmo que:

- Garanta que cada guilda tenha a composição mínima de classes necessária.
- Equilibre o somatório de XP entre as guildas de forma a minimizar a diferença de experiência.
- Permita ao Mestre do jogo definir o número de jogadores por guilda, e ajuste a distribuição conforme necessário.

5. Interface de Confirmados

    Crie a funcionalidade para marcar os jogadores confirmados e formar guildas apenas com aqueles que vão participar da sessão.

### Frontend (Opicional)

O front end deve ser funcional, mas não precisa ser visualmente elaborado.

### Backend

Será realizado utilizando o framework [laravel 11](https://laravel.com).


## Funcionalidades e Usabilidade

Todas as funcionalidades propostas foram implementadas de maneira que funcionam como esperado.

A interface facilita o uso, mesmo sendo básica.


## Instalação

A partir de um ambiente de desenvolvimento composto pelo PHP na versão 8.2 ou superior e com o Composer instalado execute o comando dentro da pasta do projeto.

Este projeto utiliza o [Docker](https://www.docker.com/) e o [Docker Compose](https://docs.docker.com/compose/) para o desenvolvimento e deploy local. Antes de executar o comando abaixo verifique se você possui a última versão do **Docker** e do **Docker Compose** respectivamente:

```bash
  docker-compose up -d --build
```

Após isso execute o comando abaixo para instalar as dependências do projeto:

```bash
  docker-compose exec app composer install
```
    
## Rodando os testes

Para rodar os testes, execute o comando dentro do container `app`:

```bash
  php artisan test
```

ou

```bash
  docker-compose exec app php artisan test
```

## Documentação

- [PHP](https://www.php.net/manual/pt_BR/index.php)
- [Laravel](https://laravel.com/docs)
- [Composer](https://getcomposer.org/)


## Documentação da API

A documentação da API é gerada através do [Swagger](https://swagger.io/) pela biblioteca `darkaonline/l5-swagger`. 

É possível utilizar e testar as API's a partir do link [/api/documentation](http://localhost:8082/api/documentation).

## Stack utilizada

**Back-end:** Laravel, PHP

## Autores

- [Github - @danilo-righetto](https://github.com/danilo-righetto)
- [Linkedin - @danilo-righetto](https://www.linkedin.com/in/danilo-righetto/)

## Licença

Esta aplicação é um software de código aberto licenciado pelo [MIT license](https://opensource.org/licenses/MIT).

