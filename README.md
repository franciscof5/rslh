rslh
=======

Reinvente sua Lan House

instalação windows ou mac
=========
<ol>
    <li>configure o 'default sotrage directory' do seu GIT Client para a raiz do seu localhost<br />
        <i>Exemplo: C:\xampp\htdocs</i>
    </li>
    <li>clone o GIT<br >
        <i>deverá ficar em www/rslh</i>
    </li>
    <li>renomeie a pasta 'wp-content' para 'wp-content-bk'</li>
    <li>baixe o pacote wordpress-3.5-pt_BR</li>
    <li>descompacte-o na pasta 'rslh'</li>
    <li>crie um banco de dados 'rslh'</li>
    <li>acesse pelo browser localhost/rslh</li>
    <li>siga a instalação (nome do banco de dados: rslh</li>
    <li>faça o login e verifique se o wordpress foi instalado corretamente</li>
    <li>delete a pasta wp-content</li>
    <li>renomeie de volta a pasta wp-content-bk para wp-content</li>
    <li>faça as seguintes alterações no DUMP do SQL<br />
    <i>está localizado na pasta rslh com o nome dump.sql, copie para outra pasta antes de editar</i></li>
    <ol>
        <li>substitua</li>
        <ol>
            <li>'www.reinventesualanhouse.com.br' por 'localhost/rslh'</li>
            <li>'http://reinventesualanhouse.com.br' por 'http://localhost/rslh'</li>
        </ol>
        <li>elimine todas as tabelas do dbase 'rslh'</li>
        <li>copie o DUMP alterado e rode o SQL</li>
    </ol>
    <li>acesse o ADMIN do wordpress novamente (aparecerá um aviso para fazer um update no wordpress)</li>
    <li>faça o update</li>
    <li>DAQUI PARA BAIXO JÁ VEM NO DUMP DO SQL</li>
    <li>configure o permalink para '/%category%/%post_id%/'<br /></li>
    <li>ative o tema GAME CDILan</li>
    <li>ative os seguintes plugins</li>
    <ul><ul>
        <li>Avatars</li>
        <li>Categories Images</li>
        <li>Category Order and Taxonomy Terms Order</li>
        <li>Comprehensive Google Map Plugin</li>
        <li>CubePoints</li>
        <li>Digg Digg</li>
        <li>Easy FancyBox</li>
        <li>Formidable</li>
        <li>Social Connect</li>
        <li>Usernoise</li>
        <li>User Role Editor</li>
        <li>WordPress Access Control</li>
    </ul></ul>
</ol>

Erros Inesperados
=================
Se no GIT client, antes mesmo de você fazer qualquer alteração, tiver arquivos para comitar, descarte-os.<br />
A conexão via FACEBOOK não funciona no local host<br/>
Alguns formulários do Formidable perdem configurações de Custom Display e Mensagens de Email, se a programação envolver o Formidable, por favor atualize seu localhost pelo DEV.cdilan.com.br<br/>


instalação linux
=========
<ol>
    <li>instale e inicie o xampp<br />
        <i>sudo /opt/lampp/lampp start</i>
    </li>
    <li>instale os pacotes do github<br />
        <i>adicione um pacote de interface gráfica chamado git-cola</i></li>
    <li>baixe o zip do arquivo</li>
</ol>
