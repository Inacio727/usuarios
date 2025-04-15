# Revisão
## Composer
Gerenciador de pacotes, onde podemos instalar dependências externas.

```bash
# Inicializa um projeto com o composer
composer init
```

```bash
# Inicializa uma nova dependência do projeto
composer require nome_dependencia
# Instala uma nova dependência de desenvolvimento
composer require nome_dependencia --dev
```

```bash
#remove uma dependência do projeto
composer remove nome_dependencia
```

```bash
# Instala todas as dependências incluindo os de dev que estão listadas no composer.json
composer install

# Instalar sem os pacotes de desenvolimento
composer install --no-dev
```

### O autoload

```
    "autoload": {
        "psr-4": {
            "Projetux": "src/"
        }
    }
```

> toda alteração precisa ser executado o comando
```
composer dumpautoload
```

