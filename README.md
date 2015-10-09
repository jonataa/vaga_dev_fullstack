# Vaga desenvolvedor Full Stack iTFLEX Tecnologia

Esta é uma oportunidade para uma vaga de desenvolvedor Full Stack,
para desenvolvimento de interface de administração e geração de relatórios
de servidores de telefonia IP, firewall e email, além de serviços
de processamento de dados, e APIs de controle e integração com terceiros.

Trabalho presencial em Joinville / SC

Perfil:
- Gostar muito desenvolvimento de software e tecnologia
- Ser participativo na construção do produto, contribuindo com ideias para o negócio
- Ser dinâmico e inquieto, questionando dogmas e premissas, sempre procurando inovação
- Ter facilidade de trabalhar dentro de times multi-disciplinares
- Ter iniciativa para estudos
- Acompanhar tendências e inovações que surgem no mercado
- Ser poliglota em linguagens de programação e scripting
- Escrever código limpo e legível para pessoas
- Ter profunda preocupação com qualidade e performance
- Compreender a importância e praticar versionamento de código
- Ter conhecimentos em design e arquitetura de software
- Gostar de programar em todos os níveis do stack tecnológico

Requisitos:
- Curso superior em Sistemas de Informação, Ciências da Computação ou Engenharia da computação
  - Curso superior em andamento para Analista de Desevolvimento Júnior
  - Curso superior concluído para Analista de Desenvolvimento Pleno
- Ter experiência com programação em Python
- Entender o funcionamento do protocolo HTTP
- Ter experiência com bibliotecas e frameworks backend
- Ter experiência com desenvolvimento Web (HTML5, CSS, JavaScript, etc)
- Ter conhecimentos na linguagem de scripts Bash
- Conhecimento de modelagem e utilização de bancos de dados relacionais

Diferenciais:
- Ter experiência em utilização do Git
- Ter experiência com métodos ágeis (Scrum, Kanban, Lean, etc)
- Ter conhecimentos de práticas de XP (TDD, refactoring, continuous integration, etc)
- Ter experiência com ferramentas de integração contínua (Jenkins, GoCD, etc)
- Ter experiência com ferramentas de TDD de código
- Ter experiência com ferramentas de TDD de frontend (Selenium, etc)
- Ter experiência com ferramentas de monitoramento de performance de aplicação
- Conhecer/utilizar expressões regulares
- Usar/conhecer Linux
- Ter experiência com bibliotecas e frameworks frontend
- Utilizar/conhecer o banco de dados PostgreSQL
- Utilizar/conhecer o banco de dados MySQL
- Ter conhecimentos de automação de deploy (capistrano, fabric, etc)
- Ter conhecimentos em alguma ferramenta de provisionamento, tais como Puppet, Chef, etc
- Ter conhecimentos de infra-estrutura
- Ter conhecimentos de virtualização e/ou conteinerização com KVM, Docker, etc
- Ter conhecimentos de configuração e implantação de serviços Linux
- Ter conhecimentos de telefonia IP

Tratamos todas as nossas aplicações como sistemas de missão crítica.
Usamos software livre na grande maioria das aplicações e ferramentas por traz da aplicação.

A vaga é CLT, oferece as seguintes vantagens:
- Plano de saúde
- Ticket refeição
- Auxílio faculdade / Pós Graduação
- Incentivos a treinamentos, certificações e participação em eventos técnicos
- Sala de descompressão com videogame

## Sobre a empresa

Empresa com 11 anos de mercado, já implantou mais de 800 servidores Linux.
Contato com novas tecnologias, oferece possibilidade de crescimento profissional.
Empresa localizada em Joinville, a maior cidade de Santa Catarina (500 mil habitantes),
próximo a diversas praias (até 100Km), e também a capital Florianópolis (180Km) e a
capital do Paraná, Curitiba (130Km).

## Desafios

Para se candidatar a vaga, será necessário completar os três
desafios abaixo, sendo que no segundo é necessário somente descobrir
a resposta e enviar junto com o currículo e no terceiro é necessário
fazer um pull request neste repositório com a resolução do desafio.

### Desafio 1

Responder o seguinte questionário:

https://docs.google.com/a/itflex.net/forms/d/1cwiZ3TarmWx4MXcfJPqANkTU9jnfdah_FWOvqJNzxuw/viewform

### Desafio 2

Você faz parte de um esquadrão anti-bombas, e um terrorista
armou uma bomba que só pode ser desarmada se resolver o desafio que ele criou.

O desafio é o seguinte:

Existe quatro botões, um vermelho, um azul, um verde e um amarelo.
Um destes botões desarma a bomba, mas você precisa descobrir qual.

Para cada botão, foi associado um código:

| Cor        | Código             |
| ---------- | ------------------ |
| VERMELHO   | IAJNLITLUNAYDHFAA  |
| AZUL       | EFDLUMHBNDRRTM     |
| VERDE      | ZTRAHDSICFQH       |
| AMARELO    | QPSKXDLPWFLAAKHY   |

Para resolver este desafio, foi associado um valor númerico para cada letra,
sendo 1 para A até 26 para Z.

O desafio é descobrir a soma dos valores das letras de cada código e cor,
depois fazer a divisão do valor descoberto de cada código pelo valor descoberto da cor,
onde o resto desta divisão deve ser 11.

O botão que encaixar nesta resolução desarma a bomba.

Enviar a resposta deste desafio no campo observação do formulário do link abaixo,
juntamente o login do github que fez o pull request do terceiro desafio e
o currículo em pdf.

https://www.itflex.com.br/trabalhe

### Desafio 3

#### Objetivo
Criar um aplicativo web de lista de tarefas.

Ele deve permitir o cadastro de tarefas,
marcar como concluida e excluir tarefas.

#### Requisitos
- Desenvolver em Python ou NodeJS
- As interações da interface web com o backend devem seguir os princípios REST
- Salvar as informações necessárias em um dos bancos de dados relacionais abaixo:
  - PostgreSQL
  - MySQL
  - Sqlite
- Testes com informação da cobertura
- Gerar logs das ações
- Documentar como rodar o projeto e os testes

#### Operações desejadas
- Cadastro de tarefas
- Marcar tarefas como concluidas
- Excluir tarefas

#### Exemplos de requisições
Requisições e suas respectivas respostas esperadas. Iremos usar estes exemplos para testar sua aplicação.

- Criar uma tarefa:
```
curl -X POST -H "Content-Type: application/json" -d '{"task": "Tomar um café", "done": false}' http://localhost:xxxx/task/
Resposta: HTTP 201
{
  "id": 2,
  "task": "Tomar um café",
  "done": false
}
```

- Lista de tarefas:
```
curl -X GET http://localhost:xxxx/task/
Resposta: HTTP 200
[
  {
    "id": 1,
    "task": "Fazer desafio da iTFLEX",
    "done": false
  },
  {
    "id": 2,
    "task": "Tomar um café",
    "done": true
  }
]
```

- Excluir uma tarefa
```
curl -X DELETE http://localhost:xxxx/task/1/
Resposta: HTTP 204
```
