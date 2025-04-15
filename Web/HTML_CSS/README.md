## HTML: Estrutura da Página

HTML (HyperText Markup Language) é a linguagem de marcação utilizada para estruturar conteúdos na web

### Principais Elementos

| Elemento | Descrição                         |
|----------|-----------------------------------|
| `<html>`   | Raiz do documento HTML              |
| `<head>`   | Contém metadados, título, links     |
| `<body>`   | Conteúdo visível da página          |
| `<header>` | Cabeçalho do conteúdo ou seção      |
| `<main>`   | Conteúdo principal da página        |
| `<footer>` | Rodapé da página                    |
| `<section>`| Agrupamento temático de conteúdo    |
| `<article>`| Conteúdo independente e reutilizável|
| `<a>`      | Link de navegação                   |
| `<img>`    | Inserção de imagem                  |
| `<form>`   | Formulário de entrada de dados      |
| `<input>`  | Campo de entrada no formulário      |

## 🎨 CSS: Estilo Visual

CSS (Cascading Style Sheets) é responsável pela aparência e estilização dos elementos HTML

### Estrutura

```css
selector {
    property: value;
}
```

### Seletores Comuns

| Seletor         | Descrição                       |
|-----------------|---------------------------------|
| `*`             | Todos os elementos              |
| `element`       | Seleciona pelo nome da tag      |
| `.classe`       | Seleciona pelo atributo class   |
| `#id`           | Seleciona pelo atributo id      |
| `element element`| Seleciona descendentes diretos |
| `element > element` | Seleciona filhos diretos    |

---

## Boas Práticas

- Nomeação de classes e IDs **semântica e padronizada** (e.g: `btn-primary`, `input-email`)
- Organização do CSS por **componentes ou seções**
- Utilização de **comentários claros**
- Separação de responsabilidades: **HTML = estrutura / CSS = estilo**

---
