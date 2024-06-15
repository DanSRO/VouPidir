
# Instruções para uso do projeto
## Requisitos (baseados em ambiente Windows)

- **Editor**: Utilize um editor de sua preferência. No projeto, foi usada a IDE VSCODE.
- **Docker**: Certifique-se de ter o Docker instalado em sua máquina.
- **Postgres**: Certifique-se de ter o Postgres instalado.


## Passo a Passo

### 1. Baixar o projeto

- Faça o download do projeto a partir do repositório GitHub:
  - **URL**: [https://github.com/jocelio23/VouPidir](https://github.com/jocelio23/VouPidir)
  - ![Baixar projeto](/public/img/gitVouPidir.png)

### 1.1. Criar arquivo .env na raiz do projeto com as opções seguintes:

- Após criar cópia do .envExample somente com nome .env:
-![imagem-env](/public/img/envVouPidir.png)
- A chave será gerada em orientação futura adiante

### 1.2 Criar uma pasta dentro da raiz do projeto com nome "docker" e dentro criar dois arquivos seguintes:
    ### php.ini  e  www.conf para serem usados pelo docker como configurações:
-![php.ini](/public/img/iniVouPidir.png)
-![conf](/public/img/confVouPidir.png) 

### 2. Navegar para a raiz do projeto

- Usar cd VouPidir

#### 2.1. Crie um arquivo com extensão .yml na raiz do projeto, caso seja necessário, de acordo com a figura abaixo:
  ![docker-compose](/public/img/dockerYML.png)
#### 2.2. Caso seja necessário, aqui está o arquivo Dockerfile para ser criado na raiz do projeto:
  ![dockerfile-back](/public/img/DockerfileVouPidir.png)

#### 2.3. Dentro do projeto use "docker exec -it voupidir sh" para entrar no container;

#### 2.4. Dentro do container use 'php artisan key:generate' e 'php artisan migrate' para gerar a nova chave e as migrates;

#### 2.5. Caso seja necessário use um 'composer install' para instalar dependências;

#### 2.6. Use o comando na raiz VouPidir para subir o ambiente do projeto (sem aspas): ' docker-compose up --build -d';

#### 2.7. Para refazer as migrations, SE NECESSÁRIO, use o comando dentro do container voupidir: 'php artisan migrate:fresh'( Atenção:'Esse comando irá apagar dados das tabelas');

#### 2.8. Detalhe: Use o comando 'docker ps' para verificar os nomes dos containers, caso haja necessidade;

#### 2.9. Para usar comandos artisan no terminal primeiro inicie entre no container "voupidir"; 

#### 2.10. O projeto estará rodando na **URL**: 'http://localhost:9001 ;

#### 2.11. Na página inicial há links para as demais páginas;

#### 2.12. Caso não haja dados há opções de criar funcionários ou criar usuários.

  ### $${\color{green}END.}$$
