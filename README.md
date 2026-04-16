# NodeCommerce

## Descrição

O NodeCommerce é um sistema web desenvolvido com Laravel com foco em simular um e-commerce completo. O projeto permite a navegação por produtos, filtragem por categorias, visualização detalhada, gerenciamento de carrinho de compras e uma área administrativa com dashboard.

O sistema foi desenvolvido com arquitetura MVC e tem como objetivo consolidar conceitos de backend, frontend e integração com banco de dados, além de explorar funcionalidades modernas do Laravel.

---

## Funcionalidades

### Público (Usuário)

- Listagem de produtos na página inicial (com paginação)
- Filtro de produtos por categoria
- Visualização detalhada do produto:
  - Imagem
  - Nome
  - Preço
  - Descrição
  - Autor (quem publicou)
  - Categoria
- Adição de produtos ao carrinho
- Exibição de mensagens com feedback (toast)
- Carrinho de compras:
  - Listagem de produtos adicionados
  - Atualização de quantidade
  - Remoção de itens
  - Cálculo automático do valor total
  - Limpeza completa do carrinho
  - Finalização de pedido (simulação)

---

### Autenticação

- Login e logout de usuários
- Proteção de rotas (acesso restrito ao dashboard)
- Controle de acesso básico (somente usuários autenticados acessam área administrativa)

---

### Administrativo (Dashboard)

- Dashboard com métricas:
  - Faturamento (valor fictício)
  - Quantidade de usuários (real)
  - Pedidos do mês (simulado)
- Gráficos:
  - Aquisição de usuários (comparativo anual)
  - Distribuição de produtos por categoria (gráfico de pizza)
- Gerenciamento de produtos:
  - Cadastro de produtos com upload de imagem
  - Listagem com paginação
- Navegação administrativa:
  - Dashboard
  - Produtos
  - Retorno para Home

---

## Tecnologias Utilizadas

- PHP 8+
- Laravel 13
- Blade (Template Engine)
- MySQL
- XAMPP
- Materialize CSS
- JavaScript
- Composer
- Artisan

---

## Arquitetura

O projeto segue o padrão MVC (Model-View-Controller):

- **Models**: Representação das entidades (Produto, User, Categoria)
- **Controllers**: Regras de negócio e manipulação de dados
- **Views (Blade)**: Interface do usuário
- **Routes**: Gerenciamento de rotas da aplicação

Estrutura principal:
app/
Http/
Models/
Providers/

database/
migrations/
seeders/
factories/

resources/
views/

routes/


---

## Diferenciais do Projeto

- Implementação de carrinho de compras manual (sem uso de bibliotecas externas)
- Sistema de upload de imagens integrado ao Laravel Storage
- Uso de paginação nativa do Laravel
- Integração com sessões para persistência do carrinho
- Interface responsiva utilizando Materialize CSS
- Dashboard administrativo com gráficos e métricas
- Estrutura organizada seguindo boas práticas do MVC

---

## Como Executar o Projeto

### Pré-requisitos

- PHP 8+
- Composer
- MySQL ou SQLite
- XAMPP (ou similar)

---

### Passo a passo

Clone o repositório:
git clone https://github.com/seu-usuario/seu-repo.git
Acesse a pasta:
cd nome-do-projeto
Instale as dependências:
composer install
Copie o arquivo de ambiente:
cp .env.example .env
Configure o banco de dados no `.env`
Gere a chave da aplicação:
php artisan key:generate
Execute as migrations e seeders:
php artisan migrate --seed
Crie o link simbólico para imagens:
php artisan storage:link
Inicie o servidor:
php artisan serve
Acesse:
http://127.0.0.1:8000


---

## Observações

- O carrinho utiliza sessão, portanto os dados são temporários
- O sistema de pedidos é apenas simulado (não persiste no banco)
- Algumas funcionalidades administrativas ainda estão em desenvolvimento:
  - Gestão de categorias
  - Gestão de usuários
  - Perfil do usuário

---

## Possíveis Melhorias Futuras

- Implementação real de pedidos no banco de dados
- Integração com gateway de pagamento
- Sistema completo de autenticação (registro, recuperação de senha)
- CRUD completo de categorias e usuários
- Upload de imagens em serviços externos (AWS S3, Cloudinary)
- Deploy em ambiente de produção

---

## Autor

Vinicius Carmello Peliçari


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
