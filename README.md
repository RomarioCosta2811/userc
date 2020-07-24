# USERC - APLICAÇÃO WEB PARA CADASTRO DE USUÁRIOS

### INSTALAÇÃO LOCAL
• Instale apache, php e sql ao seu modo (xampp, wamp ou individual).

• Em seu servidor local  adicione a pasta do projeto USERC dentro da pasta htdocs caso usar xampp;

• Adicione uma porta de acesso ao localhost para acessar a página inicial do projeto;

• Startar a utilização do apache e do mysql antes de acessar o link exemplo:

http://localhost:8080/userc/index.html

###  BANCO DE DADOS

* O arquivo campos.sql é o arquivo que contém as informações cadastradas;

* Para utilização do mesmo no PHPMyAdmin, por exemplo, é necessário que importe este arquivo, que se encontra na pasta BD do repositório USERC, após a criação da tabela com nome userc no banco. Feito isso o banco está pronto pra ser manuseado;

### APLICAÇÃO WEB USERC - COMO CADASTRAR

* Ao acessar o link da index.html você poderá visualizar a tela de cadastro de usuários;

* Os campos do formulário para inserção de dados são:

* Nome, RG, CPF, CEP, Rua, Número, Bairro, Cidade, Estado e E-mail;

* O Campo CEP utiliza a API do site viacep.com.br, onde realiza a validação do CEP informado pelo usuário;

* Ao ser validado o CEP com auxílio da API, os campos que compõem o endereço do usuário serão preenchidos automaticamente;

* Estes campos são todos obrigatórios, logo não será possível realizar cadastro com campos em branco ou com um campo qualquer faltando ser inserido;

* Após a inserção dos dados nos campos do formulário há um botão azul com nome CADASTRAR, logo é só clicar e o cadastro será efetuado com sucesso;
