# Support_System

## Sobre
Este projeto foi desenvolvido na plataforma Windows, utilizando Servidor Xampp, PHP 8.0+ e Sql.
Sistema de suporte onde o usuário abre um chamado, e só pode continuar a conversa após
o administrador ter respondido sua ultima pergunta.

## Como funciona
Para testes abra 2 navegadores diferentes, para criar 2 sessões diferentes ex: Chrome e Internet Edge.
No primeiro navegador faça login como Admin e no segundo como Usuário normal. Para iniciar 
os testes utilize os login abaixo:
```
Login:admin | Normal:marlon
senha:admin | senha:123
Ou criar manulmente na tabela sql.
```
## Configuração
Acessar o arquivo config.php

- Onde se encontra a pasta do projeto, alterar caso nescessário.
```PHP
define('INCLUDE_PATH', 'http://localhost/support_system/');
```
- Nome do DB: support_system, alterar caso nescessario.
```PHP
define('DATABASE', 'support_system');
```
## Front-end
- HTML
- CSS
## Back-end
- PHP 
## FrameWorks
- Nenhum
