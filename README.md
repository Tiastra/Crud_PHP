# Crud_PHP
Crud desenvolvido em PHP com laravel e bootstrap e mysql

Instruções para rodar a aplicação (CRUD) em um servidor local:

 1- O Laravel possui uma série de pré-requisitos para funcionar, porém para atender a todos basta instalar o [XAMPP](https://www.apachefriends.org/pt_br/download.html).
 
 2- Instalar o [composer](https://getcomposer.org) para gerenciar nossos pacotes. 
 
 3- Instalando o Laravel. Com o composer devidamente instalado abra um terminal no seu diretório de preferência e digite o seguinte comando: `composer create-project --prefer-dist laravel/laravel Crud_PHP`
 
 4- Crie um database chamado castcursos.
 
 5- Rodar as migrantions. No seu terminal, na raiz do projeto, digite o seguinte comando: `php artisan migrate`. Verifique no banco se as tabelas foram criadas.
 
 6- Testar: vamos ligar o servidor do Laravel e acessar pelo navegador para ver nosso formulário carregando. Para isso vá no seu terminal, na pasta raiz do projeto, e digite o seguinte comando: `php artisan serve` . Este comando irá ligar o servidor nativo do Laravel, e a aplicação poderá ser acessada em localhost:8000. 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
