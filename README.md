# 💼 QInvest

**QInvest** é uma aplicação web fullstack desenvolvida como Trabalho de Conclusão de Curso (TCC) do Técnico em Informática (2023). O projeto tem como objetivo auxiliar no controle e planejamento de investimentos financeiros, com uma interface simples, moderna e funcional.

## 🚀 Tecnologias Utilizadas

- ⚙️ **Backend:** [Laravel](https://laravel.com/)
- 🗃️ **Banco de Dados:** PostgreSQL
- 📦 **Gerenciador de Pacotes:** Composer & NPM

## 🧱 Estrutura do Projeto

```
qinvest-web/
├── app/               # Controllers, Models, Services
├── bootstrap/         # Inicialização do Laravel
├── config/            # Arquivos de configuração
├── database/          # Migrations e Seeders
├── public/            # Arquivos acessíveis publicamente
├── resources/         # Views (Blade), assets e componentes front-end
├── routes/            # Definições de rotas web e API
├── storage/           # Arquivos gerados e cache
├── tests/             # Testes automatizados
└── vite.config.js     # Configuração do Vite
```

## 🛠️ Funcionalidades Principais

- 📊 Cadastro e controle de investimentos
- 👥 Gerenciamento de usuários
- 🔐 Autenticação e autorização
- 📈 Visualização de dados financeiros
- 🧩 Estrutura modular e de fácil manutenção

## 📦 Instalação

```bash
# Clone o repositório
git clone https://github.com/GKsegura/qinvest-web.git
cd qinvest-web

# Instale as dependências do PHP
composer install

# Instale as dependências do JavaScript
npm install

# Configure o ambiente
cp .env.example .env
php artisan key:generate

# Configure o banco de dados no .env
# Depois, execute as migrations
php artisan migrate

# Compile os assets (CSS/JS via Vite)
npm run build

# Execute o servidor
php -S 127.0.0.1:8000 -t public
```

> **Nota (Windows):** se o caminho do projeto tiver acentos (ex: `C:\Users\José\...`), `php artisan serve` falha com erro de encoding ao tentar iniciar o processo interno. Use `php -S 127.0.0.1:8000 -t public` no lugar — funciona de forma equivalente.
>
> Depois de rodar, acesse **http://127.0.0.1:8000**.
