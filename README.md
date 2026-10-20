

```markdown
# Mini Sistema de Gerenciamento de Receitas

## 1. Visão Geral do Projeto

### 1.1 Objetivo
O **Mini Sistema de Gerenciamento de Receitas** é uma aplicação web desenvolvida em PHP e PostgreSQL, com o objetivo de facilitar o cadastro, organização e administração de receitas culinárias. 

O sistema permite criar receitas (informando nome, ingredientes e tempo de preparo), consultar a lista completa ou itens específicos, atualizar informações e excluir registros do banco de dados. Além disso, conta com um módulo de autenticação e controle de acesso de usuários.

### 1.2 Tecnologias Utilizadas

| Camada | Tecnologia |
| :--- | :--- |
| **Back-end** | PHP |
| **Banco de dados** | PostgreSQL |
| **Acesso aos dados** | PDO (PHP Data Objects) |
| **Driver do banco** | PDO_PGSQL |
| **Front-end** | HTML5 e CSS3 |
| **Servidor web** | PHP Development Server |
| **Controle de versão** | Git e GitHub |
| **Editor de código** | Visual Studio Code |

---

## 2. Estrutura do Projeto

```text
mini_sistema/ (SistemaDeReceita/)
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
│   ├── dump.sql
│   └── receitas.sql
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

### 2.1 Descrição dos Diretórios e Arquivos

* **Pasta `app/`:** Contém os scripts PHP responsáveis por executar as operações CRUD de gerenciamento das receitas.
* **Pasta `database/`:** Armazena os arquivos SQL (`dump.sql` / `receitas.sql`) utilizados para backup, transporte e restauração do banco de dados.
* **Pasta `includes/`:** Reúne componentes reutilizáveis da aplicação, como cabeçalho, rodapé e funções utilitárias.
* **Pasta `login/`:** Contém os módulos de cadastro, login, logout e verificação de permissão dos usuários.
* **Pasta `style/`:** Armazena as folhas de estilo CSS responsáveis pelo design e leiaute do sistema.
* **`index.php`:** Página inicial e ponto de entrada da aplicação.

---

## 3. Funcionalidades e Operações CRUD

O sistema utiliza a arquitetura CRUD para a manipulação dos dados no banco PostgreSQL:

### 3.1 Mapeamento do CRUD de Receitas

| Operação | Arquivo PHP | Descrição e Ação no Sistema |
| --- | --- | --- |
| **Create (Criar)** | `create.php` | Exibe o formulário e realiza o cadastro de uma nova receita (informando nome, ingredientes e tempo de preparo). |
| **Read (Consultar Tudo)** | `select.php` | Busca no banco e exibe a listagem de todas as receitas cadastradas no sistema. |
| **Read (Consulta Específica)** | `select_w.php` | Permite realizar consultas específicas filtrando receitas (por ID ou parâmetros definidos). |
| **Update (Atualizar)** | `update.php` | Exibe os dados atuais da receita selecionada e salva as edições feitas pelo usuário. |
| **Delete (Excluir)** | `delete.php` | Remove permanentemente a receita selecionada do banco de dados. |

### 3.2 Mapeamento do Módulo de Usuários

| Operação / Recurso | Arquivo PHP | Descrição e Ação no Sistema |
| --- | --- | --- |
| **Cadastro** | `cadastrar.php` | Permite o registro de novos usuários no sistema. |
| **Login** | `login.php` | Valida as credenciais do usuário e inicia a sessão no sistema. |
| **Verificação** | `verifica_user.php` | Controla e protege o acesso às páginas restritas verificando a sessão ativa. |
| **Logout** | `logout.php` | Encerra a sessão do usuário de forma segura. |

### 3.3 Diagrama do Fluxo do Sistema

```text
           Início
             |
             v
      Página Principal
             |
     ┌───────┼────────────────────────┐
     │       │                        │
 Cadastro  Login           Gerenciador de Receitas
 Usuários                             │
                             ┌────────┼────────┬────────┐
                             │        │        │        │
                         Cadastrar Consultar Atualizar Excluir
                          Receita  Receitas  Receita  Receita
                         (create)  (select)  (update) (delete)
             │
             v
           Logout

```

---

## 4. Configuração do Banco de Dados

### 4.1 Parâmetros de Conexão

| Configuração | Valor |
| --- | --- |
| **SGBD** | PostgreSQL |
| **Nome do Banco** | `receitas` |
| **Método de Conexão** | PDO (PHP Data Objects) |
| **Driver** | `pgsql` |
| **Arquivo de Backup** | `database/dump.sql` ou `database/receitas.sql` |

### 4.2 Exemplo de Conexão PHP (PDO)

```php
<?php
$host = "192.168.10.25"; // Ou 'localhost' dependendo do ambiente
$dbname = "receitas";
$user = "receitas";
$pass = getenv("DB_PASSWORD") ?: "receitas";

try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    return $conexao;

} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Erro ao conectar ao banco de dados.");
}
?>

```

---

## 5. Processo de Dump e Backup do Banco de Dados

O dump é uma cópia lógica do banco que contém a estrutura das tabelas e os dados armazenados.

### 5.1 Gerar o Dump

Para exportar o banco de dados via terminal, execute o comando na raiz do projeto:

```bash
pg_dump -h 192.168.10.25 -U postgres -d receitas -F p -f database/dump.sql

```

**Parâmetros utilizados:**

* `-h`: Endereço do servidor PostgreSQL.
* `-U`: Usuário administrativo do PostgreSQL.
* `-d`: Nome do banco de dados a ser exportado.
* `-F p`: Formato de saída em SQL puro (plain text).
* `-f`: Caminho e nome do arquivo de saída.

### 5.2 Conferir o Backup

No Linux, verifique se o arquivo foi gerado e confira o seu tamanho:

```bash
ls -lh database/dump.sql

```

Para verificar as tabelas presentes no dump:

```bash
grep -n "CREATE TABLE" database/dump.sql

```

---

## 6. Como Executar o Projeto

### 6.1 Pré-requisitos

* PHP (versão 7.4 ou superior) instalado.
* PostgreSQL instalado e em execução.
* Extensão `pdo_pgsql` habilitada no `php.ini`.
* Git instalado.
* Visual Studio Code.
* Navegador web.

### 6.2 Clonar o Repositório

```bash
git clone [https://github.com/Heloizabreu/SistemaDeReceita.git](https://github.com/Heloizabreu/SistemaDeReceita.git)
cd SistemaDeReceita

```

### 6.3 Criar Usuário e Banco de Dados no PostgreSQL

Acesse o terminal do PostgreSQL como administrador:

```bash
sudo -u postgres psql

```

Execute os comandos SQL para criar o usuário e o banco:

```sql
CREATE USER receitas WITH PASSWORD 'receitas';
CREATE DATABASE receitas OWNER receitas;
\q

```

### 6.4 Restaurar o Dump do Banco

Com o banco de dados `receitas` criado e vazio, execute a restauração:

```bash
psql -U receitas -d receitas -h localhost -f database/dump.sql

```

*(Caso esteja utilizando um servidor remoto, substitua `localhost` pelo IP correspondente, como `192.168.10.25`).*

### 6.5 Iniciar o Servidor PHP

Na pasta raiz do projeto, inicie o servidor embutido do PHP:

```bash
php -S localhost:8080

```

Acesse a aplicação no navegador em: `http://localhost:8080`

---

## 7. Validação Pós-Restauração

Para garantir que o banco e a aplicação estejam funcionando corretamente:

1. **Testar a Conexão via Terminal:**
```bash
psql -U receitas -d receitas -h localhost -c "SELECT 1;"

```


2. **Listar as Tabelas Criadas:**
```bash
psql -U receitas -d receitas -h localhost -c "\dt"

```


3. **Conferir a Aplicação:**
* Acesse a página inicial e faça o login/cadastro de usuário.
* Realize o cadastro de uma nova receita (`create.php`).
* Verifique a listagem de receitas (`select.php`).
* Teste a edição (`update.php`) e exclusão (`delete.php`).



---

## 8. Boas Práticas e Segurança

* **Acesso ao Banco:** Utilização do PDO com *Prepared Statements* para evitar ataques de SQL Injection.
* **Controle de Acesso:** Proteção das páginas internas do CRUD por meio do arquivo `verifica_user.php`.
* **Gestão de Sessões:** Encerramento completo das variáveis de sessão no `logout.php`.
* **Credenciais:** Proteção de senhas e dados sensíveis através de variáveis de ambiente (`getenv`), impedindo a publicação de senhas reais no GitHub.
* **Backups:** Manutenção periódica de dumps SQL atualizados.

---

## 9. Objetivo Acadêmico

Este projeto foi desenvolvido com fins acadêmicos para consolidar conceitos fundamentais de desenvolvimento web e banco de dados, incluindo:

* Desenvolvimento de aplicações web em PHP.
* Integração e manipulação do banco de dados PostgreSQL via PDO.
* Construção e organização de arquiteturas CRUD.
* Autenticação, controle de acesso e gestão de sessões de usuários.
* Rotinas de versionamento de código com Git/GitHub.
* Procedimentos práticos de backup e restauração de dados via Dump SQL.

```

```
