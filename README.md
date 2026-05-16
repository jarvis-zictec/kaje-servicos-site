# Kaje Serviços — site institucional (rascunho)

Rascunho inicial do site institucional da Kaje Serviços.

## Objetivo
Criar uma base publicável e versionada para evolução rápida do site, com foco em:
- apresentação clara da empresa
- percepção de confiança e profissionalismo
- conversão para contato/orçamento
- ajustes incrementais conforme retorno da Kerly

## Contexto incorporado nesta versão
- empresa familiar
- fundadora: Kerly
- sede: Rua Atalanta, 75 — Timbó
- atendimento presencial com agendamento
- maioria dos atendimentos realizada online

## Arquivos principais
- `index.html` — landing page estática principal

## Publicação
O site pode ser servido localmente com:

```bash
python3 -m http.server 8093 --directory .
```

## Próximos ajustes esperados
- logo oficial
- paleta final baseada na logo enviada pela Kerly
- descrição exata dos serviços
- WhatsApp, email e Instagram oficiais
- provas sociais / fotos / portfólio
- revisão de copy comercial


## Uso como tema WordPress

Este repositório também é um tema WordPress simples para o site institucional `www.kajeservicos.com.br`.

Arquivos relevantes:
- `style.css` — cabeçalho obrigatório para o WordPress reconhecer o tema.
- `front-page.php` — versão WordPress da landing page, com assets resolvidos via `get_template_directory_uri()`.
- `index.php` — fallback do tema.
- `functions.php` — bootstrap mínimo do tema.

Deploy no servidor WordPress:

```bash
cd /var/www/kaje/wp-content/themes
git clone https://github.com/jarvis-zictec/kaje-servicos-site.git kaje-site
chown -R nginx:nginx /var/www/kaje/wp-content/themes/kaje-site
```

Atualização posterior:

```bash
cd /var/www/kaje/wp-content/themes/kaje-site
git pull --ff-only
chown -R nginx:nginx /var/www/kaje/wp-content/themes/kaje-site
```

No painel Multisite:
1. Administração da rede > Temas > habilitar “KAJE Serviços”.
2. No site `www.kajeservicos.com.br`, ativar o tema “KAJE Serviços”.
