# Padrao MVC

Aplicação MVC em PHP com URL amigável.



## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

Consulte **[Implantação](#-implantação)** para saber como implantar o projeto.

### 📋 Pré-requisitos

Antes de começar, você precisará ter os seguintes itens instalados na sua máquina:

- **WampServer** ou **XAMPP** para rodar o servidor PHP.
- **Composer** para gerenciamento de dependências.

### 🔧 Instalação

Siga os passos abaixo para configurar o ambiente de desenvolvimento:

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/padrao-MVC.git
   ```

2. Navegue até o diretório do projeto:
   ```bash
   cd padrao-MVC
   ```

3. Instale as dependências com Composer:
   ```bash
   composer install
   ```

4. Configure o banco de dados no arquivo `config/config.php` com suas credenciais.

5. Execute o arquivo `init_database.sql` para criar a estrutura do banco de dados:
   ```sql
   -- Execute as instruções contidas no arquivo init_database.sql
   ```

6. Inicie o WampServer ou XAMPP e acesse o projeto pelo navegador:
   ```
   http://localhost/padrao-MVC/public
   ```

Agora você deve ser capaz de acessar a aplicação e interagir com as funcionalidades de gerenciamento de usuários.

## ⚙️ Executando os testes

Atualmente, a aplicação não possui testes automatizados implementados. Recomenda-se implementar testes de unidade e de integração para garantir a estabilidade do sistema.

### ⌨️ Testes de estilo de codificação

Os testes de estilo de codificação podem ser realizados utilizando ferramentas como PHP CodeSniffer ou PHPCS. Exemplos:

```bash
# Instalar PHP CodeSniffer
composer require --dev squizlabs/php_codesniffer

# Executar a análise de estilo
vendor/bin/phpcs --standard=PSR2 src/
```

## 📦 Implantação

Para implantar a aplicação em um servidor de produção, siga as instruções para configurar o ambiente e as variáveis de ambiente necessárias. Lembre-se de garantir que as credenciais do banco de dados estejam adequadas para o ambiente de produção.

## 🛠️ Construído com

* [PHP](https://www.php.net/) - Linguagem de programação
* [Composer](https://getcomposer.org/) - Gerenciador de dependências
* [Bootstrap](https://getbootstrap.com/) - Framework CSS para layout responsivo

## 📌 Versão

Nós usamos [Git 2.45.2](https://git-scm.com/) para controle de versão. Para as versões disponíveis, observe as [tags neste repositório](https://github.com/gab3mioni/padrao-MVC/tags).

## ✒️ Autores

* **Gabriel Mioni Bastos** - *Desenvolvedor Principal* - [gab3mioni](https://github.com/gab3mioni)
