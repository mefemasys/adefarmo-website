# MEFEMA Agropecuária - Website Institucional

![Banner MEFEMA Agro](https://via.placeholder.com/1200x400.png?text=MEFEMA+Agropecuária+-+Cultivando+o+Futuro)  
*(substitua por um screenshot real do site quando fizer upload)*

**Demo online:** [https://demo-agro.mefemasys.co.mz/](https://demo-agro.mefemasys.co.mz/)

## Descrição

Este é o código-fonte do website institucional da **MEFEMA Agropecuária**, uma empresa líder em agronegócio localizada em **Moçambique**. A empresa atua em agricultura de precisão, pecuária sustentável e fornecimento de insumos agrícolas, com foco em tecnologia, sustentabilidade e excelência operacional.

O site apresenta a empresa, suas operações, produtos (cereais, carnes, insumos), missão, valores, tecnologias utilizadas e informações sobre parcerias comerciais.

O projeto foi desenvolvido pela **Mefema Systems** como uma solução moderna, responsiva e otimizada para divulgação do agronegócio.

### Principais características do site
- Design moderno com tema agrícola (verde, dourado, tons terrosos)
- Interface responsiva e acessível
- Modo escuro/claro automático
- Estrutura modular com includes (header, footer, scripts)
- Páginas dedicadas para:
  - Sobre a empresa
  - Missão, visão e valores
  - Agricultura de precisão
  - Pecuária sustentável
  - Tecnologia e inovação
  - Produtos:
    - Cereais e grãos (milho, soja, feijão, arroz)
    - Carnes e derivados (bovina, gado vivo, leite)
    - Insumos agrícolas (fertilizantes, sementes, equipamentos)
  - Sustentabilidade
  - Equipa técnica
  - Galeria de operações
  - Contactos
  - Cotações e parcerias
- Configuração de URLs e paths centralizada
- Uso de Tailwind CSS via CDN
- Ícones Lucide para elementos visuais

## Estrutura do projeto

```
mefema-agropecuaria/
├── config/
│   ├── bootstrap.php       → Define ROOT_PATH, helpers e autoload
│   └── url-config.php      → Função url() e BASE_URL
├── css/                    → Estilos personalizados (se houver)
├── images/                 → Imagens do site (fazendas, plantações, gado, etc.)
├── includes/               → Partes reutilizáveis
│   ├── head.php           → Meta tags, CSS, configurações
│   ├── header.php         → Navegação principal
│   ├── footer.php         → Rodapé com links e informações
│   └── scripts.php        → JavaScript e inicialização de ícones
├── js/                     → Scripts JavaScript personalizados
├── pages/                  → Páginas principais
│   ├── agricultura.php    → Agricultura de precisão
│   ├── pecuaria.php       → Pecuária sustentável
│   ├── tecnologia.php     → Tecnologia e inovação
│   ├── sustentabilidade.php → Práticas sustentáveis
│   ├── sobre.php          → História da empresa
│   ├── missao-valores.php → Missão, visão e valores
│   ├── equipa.php         → Equipa técnica
│   ├── galeria.php        → Galeria de fotos
│   ├── contacto.php       → Formulário de contacto
│   ├── cotacao.php        → Solicitação de cotação
│   └── produtos/
│       ├── cereais.php    → Cereais e grãos
│       ├── carne.php      → Carnes e derivados
│       └── insumos.php    → Insumos agrícolas
└── index.php               → Página inicial
```

## Tecnologias utilizadas

- **HTML5** + **CSS3**
- **PHP** (estrutura modular com includes)
- **JavaScript** (interações e modo escuro)
- **Tailwind CSS** (via CDN) - Framework CSS principal
- **Lucide Icons** (via CDN) - Biblioteca de ícones
- Servidor web: Apache / Nginx + PHP 7.4+

## Funcionalidades principais

### 🌾 Agricultura
- Apresentação das culturas principais (milho, soja, feijão, arroz)
- Tecnologias utilizadas (GPS, drones, sensores IoT)
- Estatísticas de produção

### 🐄 Pecuária
- Informações sobre criação de gado
- Sistema de Integração Lavoura-Pecuária (ILP)
- Bem-estar animal e rastreabilidade

### 💻 Tecnologia
- Agricultura 4.0
- Monitoramento por satélite
- Análise de dados e IA
- Aplicação variável de insumos

### 🌱 Sustentabilidade
- Economia circular
- Energia limpa
- Gestão hídrica
- Preservação ambiental

### 📦 Produtos
- Cereais e grãos com especificações técnicas
- Carnes de qualidade premium
- Insumos agrícolas (fertilizantes, sementes, equipamentos)
- Sistema de cotações online

## Instalação e uso local

1. Clone o repositório:
   ```bash
   git clone https://github.com/mefemasys/mefema-agropecuaria.git
   ```

2. Entre na pasta:
   ```bash
   cd mefema-agropecuaria
   ```

3. (Opcional) Ajuste o `BASE_URL` em `config/url-config.php` para o seu ambiente local:
   ```php
   define('BASE_URL', 'http://localhost/mefema-agropecuaria');
   ```

4. Inicie um servidor local:
   - **PHP built-in:** `php -S localhost:8000`
   - Ou use XAMPP / WAMP / Laragon / MAMP

5. Abra no browser: `http://localhost:8000` (ou a porta que escolheu)

## Configuração de produção

### Variáveis de ambiente
Ajuste em `config/url-config.php`:
```php
define('BASE_URL', 'https://mefemasys.co.mz');
```

### Requisitos do servidor
- PHP 7.4 ou superior
- Apache com mod_rewrite habilitado (ou Nginx)
- Permissões de escrita em pastas de upload (se houver)

### .htaccess (Apache)
```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
```

## Personalização

### Cores do tema
As cores principais estão definidas no Tailwind config em `includes/head.php`:
- Verde primário: `#2D5A27`
- Dourado/Amarelo: `#DAA520`
- Marrom: `#8B4513`

### Adicionar novas páginas
1. Crie o arquivo PHP em `pages/`
2. Inclua header e footer:
```php
<?php
require_once __DIR__ . '/../config/bootstrap.php';
get_part('head');
get_part('header');
?>
<!-- Seu conteúdo aqui -->
<?php
get_part('scripts');
get_part('footer');
?>
```

### Menu de navegação
Edite `includes/header.php` para adicionar/remover links do menu.

## Licença e uso do código

Copyright © 2025–2026 **Mefema Systems** (https://mefemasys.co.mz)

**Licença proprietária** – Todos os direitos reservados.

Este repositório está público **apenas para fins de divulgação e portfólio**.  
**Não é permitida a utilização, cópia, modificação, distribuição ou uso comercial do código sem autorização expressa por escrito da Mefema Systems.**

Para solicitar permissão de uso ou uma versão adaptada para outra empresa, contacte:  
📧 [comercial@mefemasys.co.mz](mailto:comercial@mefemasys.co.mz)  
🌐 https://mefemasys.co.mz

## Créditos

- **Desenvolvimento:** Mefema Systems  
- **Design e conteúdo:** Baseado na MEFEMA Agropecuária  
- **Tecnologias:** PHP, Tailwind CSS, Lucide Icons
- **Mantenedor:** [@mefemasys](https://github.com/mefemasys)

## Contactos da MEFEMA Agropecuária

- **Endereço:** Av. Julius Nyerere, Expansão, Maputo, Moçambique
- **Telefone Comercial:** +258 84 123 4567
- **Telefone Suporte:** +258 85 123 4567
- **Email Comercial:** comercial@mefemasys.co.mz
- **Email Geral:** geral@mefemasys.co.mz
- **Horário:** Segunda a Sexta: 7h00 - 18h00 | Sábado: 7h00 - 13h00

## Estatísticas do projeto

- **Páginas:** 14+
- **Produtos apresentados:** 15+
- **Seções principais:** 8
- **Tecnologias destacadas:** 10+
- **Imagens ilustrativas:** 20+

## Roadmap / Melhorias futuras

- [ ] Sistema de login para clientes
- [ ] Portal do produtor com área restrita
- [ ] Integração com API de cotações de commodities
- [ ] Blog técnico sobre agricultura
- [ ] Sistema de pedidos online
- [ ] Calculadora de necessidade de insumos
- [ ] Mapas interativos das fazendas
- [ ] Vídeos institucionais

## Contribuições

Este é um projeto proprietário. Contribuições externas não são aceitas no momento.  
Para sugestões ou reporte de bugs, contacte: comercial@mefemasys.co.mz

## Changelog

### v1.0.0 (Janeiro 2025)
- Lançamento inicial do website
- 14 páginas completas
- Sistema de cotações
- Galeria de produtos
- Modo escuro/claro
- Design responsivo

---

**Desenvolvido com 💚 pela Mefema Systems**  
*Tecnologia a serviço do agronegócio moçambicano*