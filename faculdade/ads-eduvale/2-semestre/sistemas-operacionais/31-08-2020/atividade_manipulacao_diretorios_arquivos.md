# Atividades:

##Parte 1: Manipulação de Diretórios e Arquivos

1. Dentro de seu diretório home, crie o diretório "exercicio".
```shell
andre@ubuntu:~$ mkdir exercicio
andre@ubuntu:~$ ls
exercicio
andre@ubuntu:~$
```
2. Dentro de "exercicio", crie o diretório "dir1".
```shell
andre@ubuntu:~$ mkdir exercicio/dir1
andre@ubuntu:~$ ls exercicio/
dir1
andre@ubuntu:~$

```
3. Dentro de "dir1", crie o diretório "sub11".
```shell
andre@ubuntu:~$ mkdir exercicio/dir1/dir11
andre@ubuntu:~$ ls exercicio/dir1/
dir11
andre@ubuntu:~$
```
4. Dentro de "sub11" crie, com algum conteúdo de texto, os arquivos "oi.txt", "ola.txt", "tchau.txt" e "temp.txt".
```shell
andre@ubuntu:~$ echo 'Olá' > exercicio/dir1/dir11/oi.txt
andre@ubuntu:~$ echo 'Olá' > exercicio/dir1/dir11/ola.txt
andre@ubuntu:~$ echo 'Tchau' > exercicio/dir1/dir11/tchau.txt
andre@ubuntu:~$ echo 'temp' > exercicio/dir1/dir11/temp.txt
andre@ubuntu:~$ ls exercicio/dir1/dir11/
oi.txt  ola.txt  tchau.txt  temp.txt
```
5. Dentro de "dir1", crie os diretórios "sub12" e "sub13".
```shell
andre@ubuntu:~$ mkdir exercicio/dir1/sub12
andre@ubuntu:~$ mkdir exercicio/dir1/sub13
andre@ubuntu:~$ ls exercicio/dir1/
dir11  sub12  sub13

```
6. Dentro de "exercicio", crie o diretório "dir2".
```shell
andre@ubuntu:~$ mkdir exercicio/dir2
andre@ubuntu:~$ ls exercicio/
dir1  dir2

```
7. Dentro de "dir2", crie os diretórios "sub21", "sub22" e "sub23".
```shell
andre@ubuntu:~$ mkdir exercicio/dir2/sub21
andre@ubuntu:~$ mkdir exercicio/dir2/sub22
andre@ubuntu:~$ mkdir exercicio/dir2/sub23
andre@ubuntu:~$ ls exercicio/dir2/
sub21  sub22  sub23

```
8. Copie os arquivos de extensão ".txt" do diretório "sub11" para o diretório "sub21".
```shell
root@ubuntu:/home/andre# cp -r exercicio/dir1/dir11/*.txt exercicio/dir2/sub21/
root@ubuntu:/home/andre# ls exercicio/dir2/sub21/
oi.txt  ola.txt  tchau.txt  temp.txt
```
9.  No diretório "sub11", apague os arquivos que se iniciam pela letra "o".
```shell
root@ubuntu:/home/andre# rm -rf exercicio/dir1/dir11/o*
root@ubuntu:/home/andre# ls exercicio/dir1/dir11/
tchau.txt  temp.txt
```
10. Dentro de seu diretório home, crie o diretório "backup".
```shell
root@ubuntu:/home/andre# mkdir backup
root@ubuntu:/home/andre# ls
backup  exercicio 
```
11. Dentro de "sub21", crie um arquivo compactado chamado "textos tar.gz" contendo todos os arquivos ".txt" e mova esse arquivo para o diretório "backup".
```shell
root@ubuntu:/home/andre# tar -zcvf backup/textos.tar.gz exercicio/dir2/sub21/*.txt
exercicio/dir2/sub21/oi.txt
exercicio/dir2/sub21/ola.txt
exercicio/dir2/sub21/tchau.txt
exercicio/dir2/sub21/temp.txt
root@ubuntu:/home/andre# ls backup/
textos.tar.gz
```
12. Apague o diretório "dir1".
```shell
root@ubuntu:/home/andre# rm -r exercicio/dir1/
root@ubuntu:/home/andre# ls exercicio/
dir2
```
13. Dentro de "exercicio", crie um diretório "textos".
```shell
root@ubuntu:/home/andre# mkdir exercicio/textos
root@ubuntu:/home/andre# ls exercicio/
dir2  textos
```
14. Descompacte o arquivo "textos.tar.gz" dentro de "textos".
```shell
root@ubuntu:/home/andre# tar -xvzf backup/textos.tar.gz exercicio/textos/
tar: exercicio/textos: Not found in archive
tar: Exiting with failure status due to previous errors
root@ubuntu:/home/andre# tar -xvzf backup/textos.tar.gz -C exercicio/textos/
exercicio/dir2/sub21/oi.txt
exercicio/dir2/sub21/ola.txt
exercicio/dir2/sub21/tchau.txt
exercicio/dir2/sub21/temp.txt
```
15. Apague o conteúdo do diretório "dir2", tornando-o vazio.
```shell
root@ubuntu:/home/andre# rm -r exercicio/dir2/*
root@ubuntu:/home/andre# ls exercicio/dir2/
root@ubuntu:/home/andre#
```
___

## Parte 2: Gerenciamento de Permissões de Acesso

Execute as tarefas a seguir na mesma sequência em que aparecem:

1. Crie os usuários "prog1" e "prog2", ambos com a senha "123".
```shell
andre@ubuntu:~$ sudo adduser prog1
[sudo] password for andre:
Adding user `prog1' ...
Adding new group `prog1' (1001) ...
Adding new user `prog1' (1001) with group `prog1' ...
Creating home directory `/home/prog1' ...
Copying files from `/etc/skel' ...
New password:
Retype new password:
passwd: password updated successfully
Changing the user information for prog1
Enter the new value, or press ENTER for the default
        Full Name []: fulano
        Room Number []: 1
        Work Phone []: 1111111111
        Home Phone []:
        Other []:
Is the information correct? [Y/n] y

andre@ubuntu:~$ sudo adduser prog2
Adding user `prog2' ...
Adding new group `prog2' (1002) ...
Adding new user `prog2' (1002) with group `prog2' ...
Creating home directory `/home/prog2' ...
Copying files from `/etc/skel' ...
New password:
Retype new password:
passwd: password updated successfully
Changing the user information for prog2
Enter the new value, or press ENTER for the default
        Full Name []: fulano 2
        Room Number []: 2222
        Work Phone []: 222222222
        Home Phone []: 222222222
        Other []:


Is the information correct? [Y/n] y
```

2. Crie o grupo "programadores".

```shell
andre@ubuntu:~$ sudo addgroup programadores
Adding group `programadores' (GID 1003) ...
Done.
```
3. Adicione os usuários "prog1" e "prog2" ao grupo "programadores".

```shell
andre@ubuntu:~$ sudo addgroup prog1 programadores
Adding user `prog1' to group `programadores' ...
Adding user prog1 to group programadores
Done.
andre@ubuntu:~$ sudo addgroup prog2 programadores
Adding user `prog2' to group `programadores' ...
Adding user prog2 to group programadores
Done.

andre@ubuntu:~$ groups prog1
prog1 : prog1 programadores

andre@ubuntu:~$ groups prog2
prog2 : prog2 programadores
```
4. Crie o diretório "/usr/programas".

```shell
andre@ubuntu:~$ sudo mkdir /usr/programas
andre@ubuntu:~$ ls
andre@ubuntu:~$ cd /usr/
andre@ubuntu:/usr$ ls
bin    include  lib32  libexec  local      sbin   src
games  lib      lib64  libx32   programas  share
```
5. Mude o grupo do diretório "/usr/programas" para "programadores".
```shell
andre@ubuntu:/usr$ sudo chgrp programadores programas
```

6. Mude a permissão de grupo do diretório "/usr/programas" para "rwx".
```sh
andre@ubuntu:/usr$ sudo chmod -v 070 programas
mode of 'programas' changed from 0755 (rwxr-xr-x) to 0070 (---rwx---)
```
7. Mude o usuário corrente para "prog1".
```shell
andre@ubuntu:/usr$ sudo su prog1
prog1@ubuntu:/usr$
```
8. Na pasta home de "prog1" crie o arquivo "arq.c" com algum texto qualquer.
```shell
root@ubuntu:/usr#  echo texto qualquer > /home/prog1/arq.c
```
9.  Mova o arquivo "arq.c" para o diretório "/usr/programas".
```shell
root@ubuntu:/usr# mv /home/prog1/arq.c /usr/programas/
root@ubuntu:/usr# ls /usr/programas/arq.c
root@ubuntu:/usr#
```
10. Mude o grupo do arquivo "arq.c" para "programadores".
```shell
root@ubuntu:/usr# chgrp programadores programas/arq.c
root@ubuntu:/usr# ls -l programas/
total 4
-rw-r--r-- 1 root programadores 15 Sep 15 01:34 arq.c
```
11. Mude o usuário corrente para "prog2".
```shell
root@ubuntu:/usr# su prog2
prog2@ubuntu:/usr$
```
12. Visualize o conteúdo do arquivo "arq.c".
```shell
root@ubuntu:/usr/programas# vim arq.c
```
13. Adicione um texto qualquer no final do arquivo "arq.c".
```shell
root@ubuntu:/usr/programas# echo 'mais texto' >> arq.c

```
14. Visualize novamente o conteúdo do arquivo "arq.c".
```shell
root@ubuntu:/usr/programas# vim arq.c

```
15. Apague o arquivo "arq.c".
```shell
root@ubuntu:/usr/programas# rm arq.c
```
16. Apague o diretório "/usr/programas".
```shell
root@ubuntu:/usr# rm -r programas/
```

