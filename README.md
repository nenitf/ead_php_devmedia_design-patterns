# [ead_php_devmedia_design-patterns](https://www.devmedia.com.br/view/viewaula.php?idcomp=13999)

## Dinâmica
- módulos são pastas com namespaces dentro de `src/`
- teste de módulos são através da `index.php` de cada módulo
- explicações específicas do módulo no `README.md` específico
- explicações mais gerais sobre o curso em si dentro desse `README.md`

## Adaptações do curso
O curso é feito através do Java com Netbeans, portanto são necessárias algumas modificações

### Executar módulos
1. Subir o servidor
```sh
# sem docker-compose
sudo docker-compose up # Cancele com Ctrl-C

# com docker-compose
php -S localhost:8001 # Cancele com Ctrl-C
```

2. Acessar `localhost:8001` para ver os outputs disponíveis

### Gerar UML
Com o [Graphviz](https://www.graphviz.org/) é possível ler `.gv` e transformar em `.png`, facilitando a criação de diagramas. [Testa aí](https://dreampuf.github.io/GraphvizOnline).
```sh
dot -Tpng -O arquivo.gv
```

## Conteúdo
