
🍳# Gerenciador de Receitas

────୨ৎ────────୨ৎ────────୨ৎ────

## Sobre o Projeto

O Gerenciador de Receitas é uma aplicação web desenvolvida em **PHP**, com o objetivo de facilitar o cadastro e a organização de receitas.

O sistema permite cadastrar receitas informando o nome, os ingredientes e o tempo de preparo. Também é possível visualizar as receitas cadastradas, atualizar suas informações e excluir receitas quando necessário.

Além disso, o projeto possui um sistema de cadastro e login de usuários, uma página inicial e um menu de navegação para facilitar o acesso às funcionalidades.

## Tecnologias Utilizadas

- PHP
- HTML5
- CSS3
- MySQL, caso utilizado no banco de dados
- PDO, caso utilizado na conexão com o banco

## Funcionalidades

### Usuários

- Cadastro de usuários
- Login
- Logout
- Verificação de usuários

### Receitas

- Cadastro de receitas
- Listagem de receitas cadastradas
- Consulta de receitas
- Atualização das informações
- Exclusão de receitas

### Informações das Receitas

Cada receita pode conter:

- Nome da receita
- Ingredientes
- Tempo de preparo

## Estrutura do Projeto

```text
mini_sistema/
│
├── app/
│   ├── create.php
│   ├── delete.php
│   ├── dir.php
│   ├── select_w.php
│   ├── select.php
│   └── update.php
│
├── database/
│
├── includes/
│   ├── footer.php
│   ├── functions.php
│   └── header.php
│
├── login/
│   ├── cadastrar.php
│   ├── login.php
│   ├── logout.php
│   └── verifica_user.php
│
├── style/
│   └── style.css
│
├── documentacao.md
├── image.png
└── index.php
```

## Descrição dos Arquivos

### Pasta `app`

Contém os arquivos responsáveis pelas operações de gerenciamento das receitas.

- `create.php`: responsável pela criação de novas receitas.
- `delete.php`: responsável pela exclusão de receitas.
- `dir.php`: arquivo auxiliar do sistema.
- `select_w.php`: arquivo relacionado à consulta de receitas, conforme sua implementação.
- `select.php`: responsável pela consulta e listagem de receitas.
- `update.php`: responsável pela atualização das informações das receitas.

### Pasta `database`

Pasta destinada aos arquivos relacionados ao banco de dados do projeto.

### Pasta `includes`

Contém arquivos que podem ser reutilizados em diferentes páginas.

- `footer.php`: contém o rodapé das páginas.
- `functions.php`: reúne funções utilizadas pelo sistema.
- `header.php`: contém o cabeçalho das páginas.

### Pasta `login`

Contém os arquivos relacionados ao acesso dos usuários.

- `cadastrar.php`: página de cadastro de usuários.
- `login.php`: página de login.
- `logout.php`: responsável por encerrar a sessão do usuário.
- `verifica_user.php`: arquivo relacionado à verificação do usuário.

### Pasta `style`

- `style.css`: arquivo responsável pela estilização e aparência das páginas.

### Arquivos principais

- `index.php`: página inicial do Gerenciador de Receitas.
- `documentacao.md`: documentação com informações sobre o projeto.
- `image.png`: imagem utilizada ou armazenada no projeto.

## Operações CRUD

O sistema utiliza arquivos separados para organizar as principais operações de gerenciamento de dados, conhecidas como CRUD.

| Operação | Descrição |
|---|---|
| Create | Cadastro de novas receitas |
| Read | Consulta e visualização das receitas |
| Update | Edição das receitas cadastradas |
| Delete | Exclusão de receitas |

## Como Executar

1. Baixe ou clone o projeto.
2. Abra a pasta `mini_sistema` no Visual Studio Code.
3. Configure o ambiente PHP e o banco de dados, conforme a implementação do projeto.
4. Abra o terminal na pasta principal do sistema.
5. Execute o comando:

```bash
php -S localhost:8080
```

6. Acesse o endereço abaixo no navegador:

```text
http://localhost:8000
```

**Observação:** para o sistema funcionar corretamente, é necessário configurar o banco de dados e as demais dependências utilizadas no projeto.

## Objetivo do Projeto

O objetivo deste projeto é desenvolver um sistema prático para organizar receitas, permitindo cadastrar, consultar, editar e excluir informações.

O desenvolvimento também ajuda a praticar conceitos de programação em PHP, organização de arquivos, reutilização de código, formulários, autenticação de usuários e operações CRUD.

## Desenvolvido para fins acadêmicos

Projeto desenvolvido para praticar conhecimentos de desenvolvimento web, PHP, HTML, CSS, gerenciamento de dados e criação de sistemas.
