COINPEL — Gerenciador de Viagens

Este projeto consiste em um sistema de gerenciamento logístico de transporte da COINPEL, permitindo o controle de viagens, cadastro de motoristas e controle da frota de veículos


-Tecnologias Utilizadas

Back-end: PHP com o framework Laravel
Banco de Dados: PostgreSQL
Front-end: Blade Templates estilizado de forma responsiva com TailwindCSS
Gerenciador de Dependências: Composer
Arquitetura: MVC com persistência via Eloquent ORM


-Funcionalidades Implementadas

Fluxo de Autenticação: Tela de Login inicial integrada, redirecionando o fluxo do usuário para o ecossistema interno.
Dashboard de Viagens: Painel central para listagem e cadastro de rotas interligadas com motoristas e veículos.
Controle de Motoristas (CRUD): Interface baseada em cards dinâmicos para visualização e cadastro completo com validações de dados (CPF, CNH, PIS, Endereço e E-mail).
Controle de Frota (CRUD Veículos): Tabela interativa para controle de frotas.


-Instruções para Execução do Projeto

Instalação das Dependências:
composer install

Configurando o ambiente (.env):
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nome_do_seu_banco
DB_USERNAME=seu_usuario_postgres
DB_PASSWORD=sua_senha_postgres

Configurar o sistema de sessões:
SESSION_DRIVER=file

-Executar as migrations:
php artisan migrate:fresh

-Iniciar o servidor:
php artisan serve