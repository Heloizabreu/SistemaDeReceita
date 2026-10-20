# DOCUMENTAÇÃO - GERENCIADOR DE RECEITAS

## 1. Sobre o projeto

O Gerenciador de Receitas é um mini sistema criado para cadastrar e organizar receitas de forma simples. O sistema permite que o usuário cadastre uma receita informando seu nome, ingredientes e tempo de preparo.

Além do cadastro, também é possível visualizar, atualizar e excluir as receitas.

## 2. Funcionalidades

O sistema possui as seguintes funcionalidades:

- Cadastrar novas receitas;
- Visualizar as receitas cadastradas;
- Editar informações das receitas;
- Excluir receitas;
- Criar uma conta de usuário;
- Entrar no sistema;
- Sair da conta.

## 3. Cadastro de receitas

Para cadastrar uma receita, o usuário deve acessar a opção "Cadastrar Receitas".

Nessa parte do sistema, são informadas as principais informações da receita:

- Nome da receita;
- Ingredientes;
- Tempo de preparo.

Depois de preencher os campos, a receita pode ser cadastrada no sistema.

## 4. Visualização das receitas

Na opção "Receitas", o usuário consegue consultar as receitas que já foram cadastradas.

As informações ficam organizadas para facilitar a visualização e o acesso aos dados de cada receita.

## 5. Atualização

A opção "Atualizar" permite alterar os dados de uma receita que já foi cadastrada.

Caso seja necessário corrigir o nome, os ingredientes ou o tempo de preparo, o usuário pode editar essas informações.

## 6. Exclusão

A opção "Excluir" permite remover uma receita cadastrada no sistema quando ela não for mais necessária.

## 7. Cadastro e login

O sistema também possui uma área de cadastro de usuários. Depois de criar uma conta, o usuário pode utilizar a opção "Entrar" para acessar o sistema.

A opção "Sair" permite encerrar o acesso à conta.

## 8. Menu principal

A página inicial possui um menu com as principais opções do sistema:

- Início
- Cadastrar Receitas
- Receitas
- Atualizar
- Excluir
- Cadastre-se
- Entrar
- Sair

Dessa forma, o usuário consegue acessar facilmente as diferentes partes do sistema.

## 9. Objetivo do projeto

O objetivo deste projeto foi criar um sistema simples de gerenciamento de receitas e colocar em prática os conhecimentos aprendidos durante as aulas, principalmente na criação de páginas, formulários, cadastro e gerenciamento de informações.

## 10. Conclusão

O Gerenciador de Receitas facilita a organização das receitas e permite realizar as principais operações necessárias para administrar os dados, como cadastrar, consultar, atualizar e excluir informações.

## Como Executar:
1. Clone o repositório:
```bash
git clone https://github.com/Heloizabreu/SistemaDeReceita.git
cd SistemaDeReceita
```

2. Cria o usuario e banco de dados receitas:
```sql
sudo -u postgres psql -c "CREATE USER receitas WITH PASSWORD 'receitas'; CREATE DATABASE receitas OWNER TO receitas;"

3. Restaurar o dump:
```sql
psql -U receitas -d receitas -f database/dump.sql
```


# DOCUMENTAÇÃO - GERENCIADOR DE RECEITAS

## 1. Sobre o projeto

O Gerenciador de Receitas é um mini sistema criado para cadastrar e organizar receitas de forma simples. O sistema permite que o usuário cadastre uma receita informando seu nome, ingredientes e tempo de preparo.

Além do cadastro, também é possível visualizar, atualizar e excluir as receitas.

## 2. Funcionalidades

O sistema possui as seguintes funcionalidades:

- Cadastrar novas receitas;
- Visualizar as receitas cadastradas;
- Editar informações das receitas;
- Excluir receitas;
- Criar uma conta de usuário;
- Entrar no sistema;
- Sair da conta.

## 3. Cadastro de receitas

Para cadastrar uma receita, o usuário deve acessar a opção "Cadastrar Receitas".

Nessa parte do sistema, são informadas as principais informações da receita:

- Nome da receita;
- Ingredientes;
- Tempo de preparo.

Depois de preencher os campos, a receita pode ser cadastrada no sistema.

## 4. Visualização das receitas

Na opção "Receitas", o usuário consegue consultar as receitas que já foram cadastradas.

As informações ficam organizadas para facilitar a visualização e o acesso aos dados de cada receita.

## 5. Atualização

A opção "Atualizar" permite alterar os dados de uma receita que já foi cadastrada.

Caso seja necessário corrigir o nome, os ingredientes ou o tempo de preparo, o usuário pode editar essas informações.

## 6. Exclusão

A opção "Excluir" permite remover uma receita cadastrada no sistema quando ela não for mais necessária.

## 7. Cadastro e login

O sistema também possui uma área de cadastro de usuários. Depois de criar uma conta, o usuário pode utilizar a opção "Entrar" para acessar o sistema.

A opção "Sair" permite encerrar o acesso à conta.

## 8. Menu principal

A página inicial possui um menu com as principais opções do sistema:

- Início
- Cadastrar Receitas
- Receitas
- Atualizar
- Excluir
- Cadastre-se
- Entrar
- Sair

Dessa forma, o usuário consegue acessar facilmente as diferentes partes do sistema.

## 9. Objetivo do projeto

O objetivo deste projeto foi criar um sistema simples de gerenciamento de receitas e colocar em prática os conhecimentos aprendidos durante as aulas, principalmente na criação de páginas, formulários, cadastro e gerenciamento de informações.

## 10. Conclusão

O Gerenciador de Receitas facilita a organização das receitas e permite realizar as principais operações necessárias para administrar os dados, como cadastrar, consultar, atualizar e excluir informações.