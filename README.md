# 🛠️ GestãoFix - Sistema de Gestão de Ocorrências

Projeto Integrado desenvolvido como parte da grade curricular do curso superior de **Análise e Desenvolvimento de Sistemas (ADS)**. O sistema tem como objetivo o registro, controle e listagem de ocorrências de forma automatizada, integrando uma interface web a um banco de dados relacional.

---

## 🚀 Tecnologias Utilizadas

O projeto foi construído utilizando a seguinte stack:
* **Frontend**: HTML5, CSS3 e JavaScript (utilizando `fetch` para comunicação assíncrona).
* **Backend**: PHP (com PDO para conexões seguras e manipulação de requisições).
* **Banco de Dados**: MySQL (SGBD relacional).
* **Versionamento**: Git e GitHub.

---

## 📁 Estrutura do Projeto

* `index.html` / `painel.html` / `criar.html`: Páginas de interface do usuário (telas de acesso, listagem e cadastro).
* `salvar_ocorrencia.php`: Script backend responsável por receber os dados via POST e realizar a inserção (`INSERT`) no banco MySQL.
* `listar_ocorrencia.php`: Script backend responsável por consultar os registros (`SELECT`) no banco e retornar um JSON para a listagem dinâmica.
* `database.sql`: Script contendo a estruturação do banco de dados e tabelas relacionais (`usuario`, `categoria`, `ocorrencia`).

---

## ⚙️ Como Executar o Projeto Localmente

Para rodar este projeto em sua máquina utilizando um servidor local (como o XAMPP):

1. **Clone o repositório**:
   ```bash
   git clone [https://github.com/Thalibarros/gestaofix.git](https://github.com/Thalibarros/gestaofix.git)