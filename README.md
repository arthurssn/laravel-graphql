# 🚀 Laravel GraphQL 

<p>Este projeto implementa uma API GraphQL utilizando Laravel. Ele é construído com o pacote [rebing/graphql-laravel](https://github.com/rebing/graphql-laravel), que provê uma camada de abstração para GraphQL no Laravel.</p>

### ✨ Funcionalidades:
- ⚡ GraphQL API: Suporte completo para queries, mutations e tipagem.
- 🛠️ Laravel: Integração com o framework Laravel para facilitar o desenvolvimento de APIs escaláveis e organizadas.
- 📊 CRUD via GraphQL: Implementação de operações CRUD para as entidades definidas.


### ⚙️ Requisitos
- 🐘 PHP >= 8.0
- 🎼 Composer
- 🧱 Laravel >= 9.x
- 📦 Extensão PHP mbstring e json

### 🛠️ Instalação

  1. 🔄 Clone o Repositório:
  2. 📥 Instale as dependências do projeto:
  3. 📝 Crie o arquivo .env baseado no exemplo:
  4. 🔑 Gere a chave da aplicação:
  5. ⚙️ Configure o banco de dados no arquivo .env.
  6. 🗂️ Execute as migrações:
  7. 🚀 Inicie o servidor local:
 
### 🚀 Uso
Após iniciar o servidor, acesse /graphql para enviar queries e mutations. Você pode utilizar ferramentas como o GraphiQL ou Insomnia para testar as queries.

### 📋 Exemplos de Queries

```graphql
{
    categories {
        id,
        name
    }
}
```


### 🔮 O que vem por aí
<p>Estou trabalhando e novas funcionalidades para o projeto. Atualizações previstas: </p>

- 🐳 Dockerizar a aplicação: Adicionar um ambiente Docker para facilitar o desenvolvimento e a implantação. Isso permitirá isolar as dependências e garantir a consistência do ambiente de execução em diferentes máquinas.
- 🔗 Criação de relacionamentos entre Models: Implementar relações entre as entidades do banco de dados, como hasMany, belongsTo, e outras, melhorando as capacidades de consultas e estruturação da API GraphQL.
- 🎨 Criação de um frontend: Desenvolver um frontend que consuma a API GraphQL, oferecendo uma interface amigável para interagir com os dados e realizar operações, como criação, leitura e atualização de registros.
