##Aplicação criada com exemplo de SQL-Injection
##Aula - SQL-Injection IFSP Guarulhos
##Disciplina: Segurança da Informação
###Elaborada por: Ricardo Longatto
###DESEC Security - Curso de PENTEST Gratuito (YOUTUBE)
###Adaptada por: Prof. Robson Lopes

###Aplicação construída e testada em servidor Linux(Debian 9)
###LAMP = Linux Apache2 MariaDB e PHP7

1. Clone o diretório da aplicação
2. Copie no diretório do APACHE2 destinado as paginas WEB (/var/www/html ou /srv/www)

3. Logar no mysql
#mysql -u <usuario> -p

4. Criar a base no mysql e depois saia do servidor
mysql>CREATE DATABASE app;
mysql>quit

5. Recupere o dump da base de dados app, ao executar a instrução será solicitado a senha do usuário para realizar a restauração da base.
#mysql -u <usuario> -p -b app < app.sql

6. Reinicie o apache2 só para garantir
#systemctl restart apache2  //ou
#/etc/init.d/apache2 restart

7. Acesse a aplicação pelo navegador
http://ip_do_servidor/app

Só usar...
