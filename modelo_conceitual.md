# Modelo Conceitual do Banco de Dados — Salgadê

```mermaid
erDiagram
    USUARIO ||--|| LOGIN : possui
    USUARIO ||--o{ VENDA : realiza
    VENDA ||--|{ ITEM_VENDA : contem

    USUARIO {
        string cpf PK
        string nome
        string endereco
        string bairro
        string cidade
        string estado
        string cep
    }

    LOGIN {
        string login PK
        string senha
        string cpf FK
    }

    VENDA {
        int id PK
        int num
        string cliente
        string pagamento
        datetime data_venda
        string nome_cartao
        decimal total
    }

    ITEM_VENDA {
        int id PK
        int venda_id FK
        string produto
        int quantidade
        decimal valor
        decimal subtotal
    }
```

## Entidades

- **USUARIO** — cliente cadastrado na loja
- **LOGIN** — credenciais de acesso do usuário
- **VENDA** — uma compra realizada
- **ITEM_VENDA** — cada produto que faz parte de uma venda

## Relacionamentos

- Um **usuário** possui **um login** (1:1)
- Um **usuário** pode realizar **várias vendas** (1:N)
- Uma **venda** contém **vários itens** (1:N)
