# php

buildTrack structure

views folder:
|  auth folder
|      |----login.blade.php
|      |----reset_pass.blade.php
|      |----update_pass.blade.php
|  dashboard
|      |---home.blade.php
|  layouts
|      |---main.blade.php
|  tasks
|      |---add_task.blade.php
|      |---all_tasks.blade.php
|      |---view_task.blade.php
|  categories
|      |---add_category.blade.php
|      |---all_categories.blade.php
|  users
|      |---add_user.blade.php
|      |---all_users.blade.php
|      |---home.blade.php
|      |---view_user.blade.php
|  fallback.blade.php

routes folder:
|----api.php
|----channels.php
|----console.php
|----web.php

controllers folder:
|----Controller.php
|----DashBoardController.php
|----TaskApiController.php
|----TasksController.php
|----UserController.php

- laravel new project-buildTrack
- composer update
- composer require laravel/fortify
- php artisan migrate:status
- php artisan make migration - - create_database
- php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
- php artisan migrate

categorias:
|  (1, 'betão'),
|      |---- estrutura
|  (2, 'alvenaria')
|      |---- ceramico
|      |---- pedra
|  (3, 'reboco'),
|  (4, 'revestimento'),
|      |---- ceramico
|      |---- madeira
|      |---- pedra
|  (5, 'pavimento'),
|      |---- ceramico
|      |---- madeira
|      |---- pedra
|  (6, 'gesso'),
|      |---- tecto
|      |---- parede
|  (7, 'serralharia'),
|      |---- vão exterior
|      |---- estrutura
|      |---- elemento
|  (8, 'carpintaria'),
|      |---- mobiliario
|      |---- elemento
|  (9, 'pintura'),
|  (10, 'elétrica'),
|  (11, 'hidráulica'),
|  (12, 'impermeabilização'),
|  (13, 'isolamento'),




User controller-
- public function all_users() - retorna a view users.home
- public function viewUser($id) - retorna a view users.all_users e passa algumas variáveis para essa view
- public function getAllUsersInfo() - retorna da base de dados as informações dos users
- public function viewUser($id) - mostra um user por ID
- public function editUser(Request $request) - editar as informações de um usuário existente com base nos dados fornecidos pelo formulário de edição ALTERAR, TEM FOTO
- public function deleteUser($id) - apaga um user por ID
- public function addUser() - retorna a view para adicionar um user
- public function createUser(Request $request) - lógica para criar um novo user com os dados recebidos do orm, insere-o na base de dados e retorna a view home_all_users
- public function resetPass() - retorna a view para dar reset à password

TasksController
-  public function all_tasks() - retorna todas as tarefas e retorna a view com todas as tarefas
-  public function viewTask($id) - retorna uma tarefa por ID e retorna a view com todas essa tarefa
-  public function deleteTask($id) - apaga uma tarefa por ID
- protected function getAllTasks() - retorna todas as tarefas com os users que as adicionaram e retorna a view com todas as tarefas e users
- public function addTask() - retorna a view para adicionar nova tarefa
- public function storeTask(Request $request) - adicionar a tarefa a base de dados

 










 


