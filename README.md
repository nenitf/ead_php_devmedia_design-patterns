# [ead_php_devmedia_design-patterns](https://www.devmedia.com.br/view/viewaula.php?idcomp=13999)

## Dinâmica
- módulos são pastas com namespaces dentro de `src/`
- teste de módulos são através da `index.php` de cada módulo
- explicações específicas do módulo no `README.md` específico
- explicações mais gerais sobre o curso em si dentro desse `README.md`

## Adaptações do curso
O curso é feito através do Java com Netbeans, portanto são necessárias algumas modificações

### Execução do módulo
```sh
php src/lectureX/index.php
```

### Gerar UML
Com o [Graphviz](https://www.graphviz.org/) é possível ler `.gv` e transformar em `.png`, facilitando a criação de diagramas. [Testa aí](https://dreampuf.github.io/GraphvizOnline).
```sh
dot -Tpng -O arquivo.gv
```

## Conteúdo
