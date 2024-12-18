### **Enunciado: Criando um Encurtador de Links**

Você foi contratado para desenvolver um **encurtador de links**, como o famoso **Bitly**. O objetivo do sistema é permitir que usuários insiram um URL longo (como `https://www.exemplo.com/alguma-pagina-muito-longa`) e recebam um link curto (como `https://encurta.io/abc123`) que redirecione para o URL original.

---

**Requisitos do Sistema:**

1. **Inserir Link Original**:
   - O sistema deve permitir que o usuário insira um URL longo.
   - O link deve ser validado para garantir que seja um URL válido.

2. **Gerar Link Curto**:
   - O sistema deve gerar um identificador único e curto (ex.: `abc123`) para cada URL original.
   - O link curto deve ser armazenado junto ao URL original em um banco de dados ou estrutura de dados simples.

3. **Redirecionar**:
   - Quando o link curto for acessado, o sistema deve redirecionar o usuário para o URL original.

4. **Persistência**:
   - Os links gerados devem ser armazenados para que continuem funcionando mesmo após o sistema ser reiniciado.

5. **Exemplo de Fluxo**:
   - O usuário insere: `https://www.exemplo.com/artigo-importante`.
   - O sistema retorna: `https://encurta.io/xyz789`.
   - Quando `https://encurta.io/xyz789` for acessado, o usuário será redirecionado para `https://www.exemplo.com/artigo-importante`.