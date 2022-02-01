<h1> 📘 Projeto Agenda </h1>

<h2> 1️⃣ > Configurando o ambiente para a execução do projeto: </h2>

<ul> 1.1) Copiar a pasta projeto-agenda <br>
1.2) Colar dentro do diretorio <strong>'C:\xampp\htdocs'</strong> <br>
1.3) Abrir o XAMPP Control Panel <br>
1.4) Iniciar o módulo do Apache <br>
1.5) Iniciar o módulo do MySQL <br>
1.6) Abra o navegador e acesse <a href="http://localhost/phpmyadmin">http://localhost/phpmyadmin</a> <br>
1.7) Entre na aba <strong>'SQL'</strong> e insira o seguinte trecho de código:  <br><br>

```mysql
create database agenda;
use agenda;

create table pessoa(
    id int auto_increment primary key,
    nome varchar(100),
    empresa varchar(100),
    contato int 
);
```

1.8) Clique no botão <strong>'executar'</strong> e em seguida o código adicionado irá criar um banco de dados com o nome <strong>'agenda'</strong> e uma tabela com o nome <strong>'pessoa'</strong> possuindo os seguintes campos <strong>'nome'</strong>,<strong>'empresa'</strong> e <strong>'contato'</strong>. <br>
</ul>

<h2> 2️⃣ > Executando o projeto: </h2>
<ul>
2.1) No navegador acesse o endereço <a href="http://localhost/projeto-agenda">http://localhost/projeto-agenda</a> <br>
2.2) Na página será possível vizualisar um breve resumo sobre como a agenda pode ser utilizada, um <strong>'card'</strong> chamado <strong>'Cadastrar Contato'</strong> e outro chamada <strong>'Lista de Contatos'</strong>.
 Como nenhuma informação foi adicionada até o momento o <strong>'card' 'Lista de Contatos'</strong> estará vazio. <br>
2.3) Para adicionar um contato será preciso preecher os três campos, em seguida clicar no botão <strong>'Cadastrar'</strong>.  <br>
 As informações serão salvas no banco de dados e carregadas no <strong>'card' 'Lista de Contatos'</strong>. <br>
 A partir do oitavo item adicionado na lista uma <strong>'barra de scroll'</strong> irá aparecer e os itens poderão ser vizualizados conforme a barra for movimentada. <br>
</ul>
<h2> 3️⃣ > Observações </h2>
<ul>
⚠️ Só será permitido adicionar as informações no banco de dados se todos os campos estiverem sido preenchidos. 
<ul>

