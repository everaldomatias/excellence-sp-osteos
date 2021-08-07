# Excellence Client

Plugin base para a personalização dos sites desenvolvidos pela AGP Agência com o Excellence Theme.

## How to use

- Faça download do plugin no [Gitlab](https://gitlab.com/agpagencia/excellence-client)
- Altere o nome da pasta do plugin 'excellence-client' substituindo '-cliente' pelo nome real do cliente.
- No arquivo 'excellence-client.php' altere obrigatoriamente no header (cabeçalho) do arquivo o comentário 'Plugin Name' para o nome que deseja que seja exibido no painel administrativo, na listagem de plugins. Os demais comentários do header são opicionais.
- No mesmo arquivo 'excellence-client.php' faça um search & replace em 'ExcellenceClient' substituindo 'Client' pelo nome do cliente em questão, usando o padrão StudlyCaps. Esse procedimento deve localizar e alterar 6 strings.
- Altere o nome do arquivo 'excellence-client.php' substituindo '-cliente' pelo nome real do cliente.

Ao renomear os arquivos e pastas conforme solicitado acima, respeitar as boas práticas para pastas e arquivos, sem acentos, espaços, caracteres especiais e etc. Veja mais sobre os padrões exigidos e propostos para os arquivos do plugin em [Plugin Handbook](https://developer.wordpress.org/plugins/plugin-basics/#top).

## Adding new features

- Adicione na pasta /includes um arquivo para cada nova funcionalidade que deseja adicionar.
- Faça a inclusão do arquivo de sua funcionalidade no final do functions.php da raiz do plugin.

## Changelog

As alterações registradas nesse changelog são referentes a base do plugin que está repositada no [Gitlab](https://gitlab.com/agpagencia/excellence-client)

## [0.0.4] - 2020-06-25

- Fix translate button call on page about us

## [0.0.3] - 2020-06-25

- Custom admin login page with new images and color.

## [0.0.2] - 2020-04-20

- Add excellence-client.css on the frontend.

## [0.0.1] - 2020-04-17

- First version