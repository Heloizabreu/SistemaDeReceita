# Sistema de Gerenciamento de Receitas

## 1. Visão Geral do Projeto

### 1.1 Sobre o Projeto

O Sistema de Gerenciamento de Receitas é uma aplicação web desenvolvida em **PHP**, utilizando **PostgreSQL** como banco de dados e **PDO** para realizar a conexão entre a aplicação e o banco.

O sistema foi desenvolvido com o objetivo de facilitar o cadastro e a organização de receitas culinárias. Nele, é possível adicionar receitas informando o nome, os ingredientes e o tempo de preparo, além de consultar, editar e excluir receitas cadastradas.

A aplicação também possui funcionalidades de cadastro e login de usuários, permitindo organizar o acesso ao sistema.

### 1.2 Tecnologias Utilizadas

| Camada | Tecnologia |
|---|---|
| Back-end | PHP |
| Banco de dados | PostgreSQL |
| Acesso aos dados | PDO |
| Driver do banco | PDO_PGSQL |
| Front-end | HTML5 e CSS3 |
| Controle de versão | Git e GitHub |
| Editor de código | Visual Studio Code |

---

## 2. Funcionalidades

### 2.1 Usuários

- Cadastro de usuários.
- Login no sistema.
- Logout.
- Verificação de usuários.

### 2.2 Receitas

- Cadastro de novas receitas.
- Listagem das receitas cadastradas.
- Consulta das informações das receitas.
- Edição das receitas existentes.
- Exclusão de receitas.

### 2.3 Informações das Receitas

Cada receita pode conter as seguintes informações:

- **Nome:** nome da receita cadastrada.
- **Ingredientes:** ingredientes necessários para o preparo.
- **Tempo de preparo:** tempo necessário para preparar a receita.

---

## 3. Operações CRUD

O sistema utiliza operações CRUD para realizar o gerenciamento das receitas cadastradas. CRUD é a sigla para Create, Read, Update e Delete, que representam as operações de criação, consulta, atualização e exclusão de dados.

| Operação | Arquivo | Descrição |
|---|---|---|
| **Create (Criar)** | `create.php` | Responsável por cadastrar novas receitas. |
| **Read (Consultar)** | `select.php` | Responsável por consultar e listar as receitas cadastradas. |
| **Read (Consulta específica)** | `select_w.php` | Arquivo relacionado à consulta de receitas, conforme sua implementação. |
| **Update (Atualizar)** | `update.php` | Responsável por editar as informações das receitas. |
| **Delete (Excluir)** | `delete.php` | Responsável por excluir receitas cadastradas. |

### 3.1 Fluxo das Operações CRUD

```text
           CRUD
            |
    ┌───────┼────────┐
    |       |        |
  Create   Read    Update
    |       |        |
 Cadastrar Consultar Editar
 receita   receitas receita
                    |
                  Delete
                    |
              Excluir receita
```

Essas operações permitem manter as informações das receitas organizadas e atualizadas no banco de dados.

---

## 4. Estrutura do Projeto

```text
SistemaDeReceita/
│
├── app/
│   ├── create.php
│   ├── delete.php
│   ├── dir.php
│   ├── select.php
│   ├── select_w.php
│   └── update.php
│
├── database/
│   └── dump.sql
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
├── index.php
└── README.md
```

### 4.1 Descrição dos Diretórios

**Pasta `app/`**

Contém os arquivos responsáveis pelo gerenciamento das receitas, incluindo cadastro, consulta, atualização e exclusão.

**Pasta `database/`**

Armazena o arquivo `dump.sql`, que contém a cópia lógica do banco de dados utilizada no processo de restauração.

**Pasta `includes/`**

Contém arquivos reutilizáveis do sistema, como cabeçalho, rodapé e funções utilizadas pelas páginas.

**Pasta `login/`**

Reúne os arquivos relacionados ao cadastro, login, logout e verificação dos usuários.

**Pasta `style/`**

Contém o arquivo CSS responsável pela estilização das páginas.

**Arquivos principais**

- `index.php`: página inicial do sistema.
- `documentacao.md`: documentação complementar do projeto.
- `image.png`: imagem armazenada no projeto.
- `README.md`: documentação principal do repositório.

---

## 5. Banco de Dados

O sistema utiliza o PostgreSQL para armazenar as informações necessárias ao funcionamento da aplicação.

| Configuração | Valor |
|---|---|
| SGBD | PostgreSQL |
| Nome do banco | `receitas` |
| Método de conexão | PDO |
| Driver | `pgsql` |
| Arquivo de backup | `database/dump.sql` |

As tabelas e os campos utilizados devem corresponder à estrutura real do banco de dados do projeto.

### 5.1 Conexão com o Banco

A aplicação utiliza PDO para estabelecer a conexão com o PostgreSQL. As configurações devem incluir o endereço do servidor, o nome do banco, o usuário e a senha.

As credenciais devem ser configuradas no ambiente de execução e não devem ser publicadas no GitHub.

---

## 6. Processo de Dump do Banco de Dados

O dump é uma cópia lógica do banco de dados que pode conter a estrutura das tabelas e os dados armazenados. Ele permite transportar e restaurar o banco em outro ambiente.

### 6.1 Gerar o Dump

Com o PostgreSQL acessível e o utilitário `pg_dump` instalado, execute na pasta principal do projeto:

```bash
pg_dump -h 192.168.10.25 -U postgres -d receitas -F p -f database/dump.sql
```

O comando gera o arquivo `database/dump.sql`.

**Parâmetros utilizados:**

- `-h`: endereço do servidor PostgreSQL.
- `-U`: usuário utilizado para acessar o banco.
- `-d`: nome do banco de dados.
- `-F p`: define o formato SQL puro.
- `-f`: indica o caminho do arquivo de saída.

O comando solicita a senha do usuário do banco, caso necessário.

### 6.2 Conferir o Dump

No Linux, execute:

```bash
ls -lh database/dump.sql
```

Para verificar as tabelas descritas no arquivo:

```bash
grep -n "CREATE TABLE" database/dump.sql
```

O arquivo deverá existir e conter o dump gerado corretamente.

### 6.3 Armazenamento do Dump

Após gerar o arquivo, mantenha-o dentro da pasta `database/` e adicione-o ao repositório para que possa ser utilizado na restauração em outro ambiente.

**Atenção:** não publique dumps que contenham senhas, dados pessoais ou outras informações sensíveis.

---

## 7. Como Executar o Projeto

### 7.1 Requisitos

- PHP instalado.
- PostgreSQL instalado ou acessível pela rede.
- Extensão `pdo_pgsql` habilitada no PHP.
- Git instalado.
- Utilitários `psql` e `pg_dump`.
- Visual Studio Code.
- Navegador web.

### 7.2 Clonar o Repositório

Execute os comandos:

```bash
git clone https://github.com/Heloizabreu/SistemaDeReceita.git
cd SistemaDeReceita
```

### 7.3 Criar o Usuário e o Banco de Dados

No Linux, entre no terminal administrativo do PostgreSQL:

```bash
sudo -u postgres psql
```

Execute os comandos separadamente:

```sql
CREATE USER receitas WITH PASSWORD 'SUA_SENHA';
CREATE DATABASE receitas OWNER receitas;
```

Substitua `SUA_SENHA` por uma senha definida por você.

Para sair do PostgreSQL:

```sql
\q
```

Se o usuário ou o banco já existir, verifique a configuração antes de tentar criá-los novamente.

### 7.4 Restaurar o Dump

Com o banco `receitas` criado e vazio, execute na pasta principal do projeto:

```bash
psql -h 192.168.10.25 -U receitas -d receitas -f database/dump.sql
```

Digite a senha do usuário `receitas` quando solicitado.

A restauração recria a estrutura e os dados presentes no dump, desde que o arquivo contenha essas informações e que o usuário possua as permissões necessárias.

Se estiver restaurando em um PostgreSQL instalado no próprio computador, utilize `localhost` no lugar de `192.168.10.25`.

**Importante:** o banco de destino deve existir antes da restauração. Evite executar o dump em um banco que já possua as mesmas tabelas, pois isso pode causar conflitos.

### 7.5 Configurar a Conexão

Após criar ou restaurar o banco, configure o arquivo de conexão utilizado pela aplicação com os dados corretos do ambiente.

O endereço do servidor, o nome do banco, o usuário e a senha precisam corresponder à configuração do PostgreSQL.

### 7.6 Iniciar o Servidor PHP

Na pasta principal do projeto, execute:

```bash
php -S localhost:8080
```

Depois, abra o navegador e acesse:

```text
http://localhost:8080
```

---

## 8. Validação Pós-Restauração

Após restaurar o banco, é importante verificar se a conexão e as tabelas estão funcionando.

### 8.1 Testar a Conexão

```bash
psql -h 192.168.10.25 -U receitas -d receitas -c "SELECT 1;"
```

### 8.2 Listar as Tabelas

```bash
psql -h 192.168.10.25 -U receitas -d receitas -c "\dt"
```

### 8.3 Conferir a Aplicação

- Verificar se a página inicial abre.
- Testar o cadastro de receitas.
- Consultar as receitas cadastradas.
- Testar a edição e a exclusão.
- Verificar o cadastro e o login de usuários.
- Confirmar se a aplicação consegue acessar o banco.

---

## 9. Segurança

Para manter o sistema mais seguro, é importante:

- Utilizar consultas preparadas para reduzir o risco de SQL Injection.
- Proteger as páginas que exigem autenticação.
- Encerrar corretamente as sessões no logout.
- Não publicar senhas ou credenciais reais no GitHub.
- Restringir as permissões de acesso ao banco de dados.
- Manter backups atualizados.
- Conferir os arquivos SQL antes de executar uma restauração.

---

## 10. Objetivo Acadêmico

O projeto foi desenvolvido para praticar conceitos de desenvolvimento web e gerenciamento de dados, utilizando PHP e PostgreSQL.

Durante o desenvolvimento, são trabalhados conceitos de operações CRUD, formulários, autenticação de usuários, organização de arquivos, conexão com banco de dados e procedimentos de backup e restauração por meio de dumps SQL.

---

## 11. Desenvolvido para Fins Acadêmicos

Projeto desenvolvido com o objetivo de aplicar conhecimentos em:

- Desenvolvimento Web.
- PHP.
- PostgreSQL.
- PDO.
- HTML5 e CSS3.
- Operações CRUD.
- Autenticação de usuários.
- Git e GitHub.
- Backup e restauração de banco de dados.
