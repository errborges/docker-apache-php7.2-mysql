# Docker + Apache + PHP7.2 + Mysql + phpMyAdmin

Ambiente para desenvolvimento com Docker. Adicione seus projetos a pasta **www**

**Pré requisitos:** Docker e Docker Compose

```
# Criar e levantar os containers
docker-compose up -d

# Iniciar o container Docker
docker-compose start

# Parar o container Docker
docker-compose stop

```

**Acesso localhost**

```
http://localhost:4500/myapp

```

**Acesso phpMyAdmin**

```
http://localhost:8080

user: root
senha: root

```
version: "3"

command: ['--default-authentication-plugin=mysql_native_password','--character-set-server=utf8mb4', '--collation-server=utf8mb4_general_ci']
restart: always