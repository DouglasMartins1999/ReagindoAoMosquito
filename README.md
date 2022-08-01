# Reagindo ao Mosquito

O **Reagindo ao Mosquito** foi parte de um **projeto de pesquisa** - O Poder da Internet no Combate ao Aedes - atendendo a um edital da **FAPESB** - Fundação de Amparo a Pesquisa do Estado da Bahia. Desenvolvido entre 2016 e 2017, constituiu uma web plataforma online de disseminação de informações e combate ao mosquito Aedes Aegypti e a tríplice viral - Dengue, Zika e Chikungunya - voltada a estudantes do ensino médio em Malhada de Pedras - pequeno município interiorano da Bahia com pouco mais de 8 mil habitantes.

A pesquisa e a plataforma associada tornaram-se finalistas no referido edital e se consolidaram entre [os Top 10 projetos do estado da Bahia](https://www.bahia.ba.gov.br/2017/01/noticias/educacao/estudantes-da-rede-estadual-tem-projetos-selecionados-pela-fapesb/). Enfrentando diversos desafios como limitações em recursos financeiros, hardware obsoleto da rede pública para uso dos alunos, e inexperiência destes com o uso das TICs, a plataforma representa, dentre vários avanços, um marco para o autor como o primeiro projeto de desenvolvimento de software full-stack.

![RaM](https://i.imgur.com/QMsfIlQ.jpg)


### Tecnicamente…

Devido as limitações de hardware tanto do lado cliente quanto do lado servidor, a aplicação foi construída sem frameworks e apenas com leves bibliotecas que possibilitassem o desenvolvimento para um hardware mais antigo. HTML4, CSS2, **JavaScript** **ES5**, **JQuery**, **PHP e MySQL** compõem a stack da plataforma que precisava funcionar em uma hospedagem gratuita de PHP 5 e ter compatibilidade com o navegador Konqueror 3.5 - lançado em Agosto de 2005, exclusivo para Linux, mais de uma década antes do projeto iniciar. Logicamente, a interface precisava ser a mais simples possível e evitar muitos artifícios de CSS que pudessem oferecer algum risco a execução do projeto. Atualmente, o projeto pode ser visualizado em **reagindo.dotins.eu.org**.


## O que a plataforma disponibilizava?

> Se desejar ler o artigo submetido a FAPESB na íntegra, [clique aqui](https://drive.google.com/file/d/1q0xTl3XdIO75vm-ppXbDnq95fHOYNkAK/view?usp=sharing)

Em essência, recursos didáticos na forma de textos, slides e imagens:

* Na Aprendizagem Interativa, principal destaque, o aluno acompanhava um slide show interativo com imagens e infográficos ressaltando a origem das doenças, seus sintomas, as características do mosquito e como se prevenir.
* O Quiz 120 por 12 atuava como uma forma de avaliar o aprendizado dos alunos em um game com 12 questões, ao qual o aluno tinha dois minutos - 120 segundos - para responder.
* O Mapa de Focos representava um mapa da cidade com indicadores sobre o estado de prevenção ao mosquito nas residências, informações levantadas pelos próprios alunos com base em análises feitas pelo controle de endemias municipal.
* A denúncia de focos disponibilizava um formulário para preenchimento dos alunos. A denúncia era coletada e encaminhada a Secretaria de Vigilância Sanitária Municipal.
* A Galeria de Imagens fornecia posts com dicas de prevenção ao mosquito que podiam ser compartilhadas pelos alunos em redes sociais. O aluno poderia ativar notificações push em seu dispositivo para receber as dicas semanalmente.
* Além disso, a página do portal na internet oferecia artigos de autoria própria para complementar o material oferecido pelos demais meios.

Cabe destacar que mesmo que a aplicação não tenha um design responsivo por padrão, ela foi projetada para que os alunos usassem tanto em sala de aula, nos laboratórios de informática das escolas, quanto por iniciativa própria em seus próprios dispositivos, seja um computador ou celular.

![RamTablet](https://i.imgur.com/bBNTzwu.jpg)


## Dificuldades e Aprendizados

Os laboratórios de informática da escola estadual do município - local onde a maior parte dos trabalhos foi desenvolvida - continha **em 2016**, para 30 alunos, apenas **10 computadores** com apenas **512MB** de memória RAM cada rodando **Linux Educacional 3.0** - distro baseada no Kubuntu 8.0 lançado em 2008. Devido a impossibilidade da troca de hardware ou de software, a ferramenta precisou se adequar as necessidades, o que implicou em um maior tempo de desenvolvimento, além de uma curva de aprendizagem muito maior para compreender o que poderia e o que não poderia ser utilizado na aplicação cliente.

O projeto marcou o primeiro uso da biblioteca jQuery, e embora o projeto indique a capacidade de desenvolvimento com a maioria dos conceitos e tecnologias empregadas, por outro lado evidencia algumas lacunas no portfólio de um desenvolvedor, que ao longo dos anos foram preenchidas - a ausência do controle de versão, baixo planejamento de código, alto acoplamento entre camadas e deploys / codificação com ferramentas obsoletas ficaram para trás nos projetos seguintes.

O projeto possibilitou amplo contato com várias áreas da administração pública, melhor compreensão de processos de ensino-aprendizagem e as necessidades dos alunos, bem como a primeira apresentação a metodologia científica.

![RamDesktop](https://i.imgur.com/Op5zHRQ.jpg)
