<?php

return [
    'app' => [
        'name' => 'October CMS',
        'motto' => 'Voltando ao básico',
    ],
    'locale' => [
        'en' => 'Inglês',
        'nl' => 'Holandês',
        'ja' => 'Japonês',
        'se' => 'Sueco',
        'tr' => 'Turco',
        'de' => 'Alemão',
        'ru' => 'Russo',
        'fr' => 'Francês',
        'it' => 'Italiano',
        'ro' => 'Romano',
        'pt-br' => 'Português do Brasil',
        'fa' => 'Persian',
    ],
    'directory' => [
        'create_fail' => "Não é possível criar o diretório: :name",
    ],
    'file' => [
        'create_fail' => "Não é possível criar o arquivo: :name",
    ],
    'combiner' => [
        'not_found' => "O arquivo combinador ':name' não foi encontrado.",
    ],
    'system' => [
        'name' => 'Sistema',
        'menu_label' => 'Sistema',
        'categories' => [
            'cms' => 'Temas',
            'misc' => 'Diversos',
            'logs' => 'Registros',
            'mail' => 'E-mail',
            'shop' => 'Loja ',
            'team' => 'Time',
            'users' => 'Usuários',
            'system' => 'Sistema',
            'social' => 'Social',
            'events' => 'Eventos',
            'customers' => 'Clientes',
            'my_settings' => 'Configurações',
        ],
    ],
    'plugin' => [
        'unnamed' => 'Plugin não nomeado',
        'name' => [
            'label' => 'Nome do Plugin',
            'help' => 'Nome do plugin pelo seu código único. Por exemplo, RainLab.Blog',
        ],
    ],
    'plugins' => [
        'manage' => 'Gerenciar plugins',
        'enable_or_disable' => 'Habilitar ou desabilitar',
        'enable_or_disable_title' => 'Habilitar ou Desabilitar Plugins',
        'remove' => 'Remover',
        'refresh' => 'Atualizar',
        'disabled_label' => 'Desabilitado',
        'disabled_help' => 'Plugins que estão desabilitados são ignorados pela aplicação.',
        'selected_amount' => 'Plugins selecionados: :amount',
        'remove_confirm' => 'Você tem certeza?',
        'remove_success' => "Plugins removidos com sucesso do sistema.",
        'refresh_confirm' => 'Você tem certeza?',
        'refresh_success' => "Plugins atualizados com sucesso.",
        'disable_confirm' => 'Você tem certeza?',
        'disable_success' => "Plugins desabilitados com sucesso.",
        'enable_success' => "Plugins habilitados com sucesso.",
        'unknown_plugin' => "Plugin removido do sistema de arquivos.",
    ],
    'project' => [
        'name' => 'Projeto',
        'owner_label' => 'Desenvolvedor',
        'attach' => 'Anexar Projeto',
        'detach' => 'Desanexar Projeto',
        'none' => 'Nenhum',
        'id' => [
            'label' => 'ID do Projeto',
            'help' => 'Como encontrar o ID do seu projeto?',
            'missing' => 'Por favor, especifique um ID de Projeto para usar.',
        ],
        'detach_confirm' => 'Tem certeza de que deseja desanexar este projeto?',
        'unbind_success' => 'Projeto desanexado com sucesso.',
    ],
    'settings' => [
        'menu_label' => 'Configurações',
        'missing_model' => 'A página de configurações está faltando uma definição de modelo.',
        'update_success' => 'Configurações para :name foram atualizados com sucesso.',
        'return' => 'Retornar para as configurações do sistema',
        'search' => 'Buscar'
    ],
    'mail' => [
        'menu_label' => 'Configurações de E-mail',
        'menu_description' => 'Gerenciar configurações de e-mail.',
        'general' => 'Geral',
        'method' => 'Método de Envio',
        'sender_name' => 'Nome do Remetente',
        'sender_email' => 'E-mail do Remetente',
        'smtp' => 'SMTP',
        'smtp_address' => 'Endereço SMTP',
        'smtp_authorization' => 'Autenticação SMTP obrigatória',
        'smtp_authorization_comment' => 'Use esta opção se o seu servidor SMTP requer autenticação.',
        'smtp_username' => 'Usuário',
        'smtp_password' => 'Senha',
        'smtp_port' => 'Porta SMTP',
        'smtp_ssl' => 'Conexão SSL obrigatória',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Caminho do Sendmail',
        'sendmail_path_comment' => 'Por favor, especifique o caminho do programa sendmail.',
    ],
    'mail_templates' => [
        'menu_label' => 'Modelos de E-mail',
        'menu_description' => 'Modificar os modelos de e-mail que são enviados para usuários e administradores.',
        'new_template' => 'Novo modelo',
        'new_layout' => 'Novo layout',
        'template' => 'Modelo',
        'templates' => 'Modelos',
        'menu_layouts_label' => 'Layouts de E-mail',
        'layout' => 'Layout',
        'layouts' => 'Layouts',
        'name' => 'Nome',
        'name_comment' => 'Nome exclusivo usado para se referir à este modelo',
        'code' => 'Código',
        'code_comment' => 'Código único usado para se referir à este modelo',
        'subject' => 'Assunto',
        'subject_comment' => 'Assunto da mensagem',
        'description' => 'Descrição',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Texto Simples',
        'test_send' => 'Enviar mensagem de teste',
        'test_success' => 'Mensagem de teste enviada com sucesso.',
        'return' => 'Retornar à lista de modelos'
    ],
    'install' => [
        'project_label' => 'Anexar ao projeto',
        'plugin_label' => 'Instalar plugin',
        'missing_plugin_name' => 'Por favor, especifique um nome de plugin para instalar.',
        'install_completing' => 'Finalizando processo de instalação.',
        'install_success' => 'O plugin foi instalado com sucesso.',
    ],
    'updates' => [
        'title' => 'Gerenciar Atualizações',
        'name' => 'Atualização de software',
        'menu_label' => 'Atualizações',
        'menu_description' => 'Atualize o sistema, gerencie e instale plugins e temas.',
        'check_label' => 'Verificar atualizações',
        'retry_label' => 'Tentar novamente',
        'plugin_name' => 'Nome',
        'plugin_description' => 'Descrição',
        'plugin_version' => 'Versão',
        'plugin_author' => 'Autor',
        'core_build' => 'Compilação atual',
        'core_build_old' => 'Compilação atual :build',
        'core_build_new' => 'Compilação :build',
        'core_build_new_help' => 'Última versão está disponível.',
        'core_downloading' => 'Baixando arquivos do aplicativo',
        'core_extracting' => 'Desempacotando arquivos de aplicativos',
        'plugin_downloading' => 'Baixando o plugin: :name',
        'plugin_extracting' => 'Desempacotando o plugin: :name',
        'plugin_version_none' => 'Novo plugin',
        'plugin_version_old' => 'Atual v:version',
        'plugin_version_new' => 'v:version',
        'theme_label' => 'Tema',
        'theme_new_install' => 'Instalação do novo tema.',
        'theme_downloading' => 'Baixando o tema: :name',
        'theme_extracting' => 'Desempacotando o tema: :name',
        'update_label' => 'Atualizar o software',
        'update_completing' => 'Finalizando processo de atualização',
        'update_loading' => 'Carregando atualizações disponíveis...',
        'update_success' => 'O processo de atualização foi realizada com sucesso.',
        'update_failed_label' => 'Falha na atualização',
        'force_label' => 'Forçar atualização',
        'found' => [
            'label' => 'Encontrado novas atualizações!',
            'help' => 'Clique Atualizar o software para iniciar o processo de atualização.',
        ],
        'none' => [
            'label' => 'Não há atualizações',
            'help' => 'Não há novas atualizações.',
        ],
    ],
    'server' => [
        'connect_error' => 'Erro ao conectar-se ao servidor.',
        'response_not_found' => 'O servidor de atualização não pôde ser encontrado.',
        'response_invalid' => 'Resposta inválida do servidor.',
        'response_empty' => 'Resposta vazia a partir do servidor.',
        'file_error' => 'Servidor não conseguiu entregar o pacote.',
        'file_corrupt' => 'Arquivo do servidor está corrompido.',
    ],
    'behavior' => [
        'missing_property' => 'Classe :class deve definir a $:property imóvel usado por:behavior  comportamento.',
    ],
    'config' => [
        'not_found' => 'Não foi possível localizar arquivos de configuração :file definido para :location.',
        'required' => 'Configuração usada em :location deve fornecer um valor :property.',
    ],
    'zip' => [
        'extract_failed' => "Não foi possível extrair arquivo core ':file'.",
    ],
    'event_log' => [
        'hint' => 'Este registro mostra a lista dos potenciais erros que ocorreram na aplicação, assim como as exceções e informações de depuração.',
        'menu_label' => 'Registro de Eventos',
        'menu_description' => 'Visualize as mensagens do sistema, com o tempo de registro e detalhes.',
        'empty_link' => 'Registro de eventos vazio',
        'empty_loading' => 'Limpando registro de eventos...',
        'empty_success' => 'Registro de eventos limpo com sucesso.',
        'return_link' => 'Retornar ao registro de eventos',
        'id' => 'ID',
        'id_label' => 'ID do Evento',
        'created_at' => 'Data & Hora',
        'message' => 'Mensagem',
        'level' => 'Nível',
    ],
    'request_log' => [
        'hint' => 'Este registro mostra a lista de requisições do navegador que requerem atenção. Por exemplo, se um usuário acessar uma página inexistente, será armazenado o registro nesta lista.',
        'menu_label' => 'Registro de Requisições',
        'menu_description' => 'Visualize requisições com problema na aplicação, como Página não encontrada (404).',
        'empty_link' => 'Registro de requisições vazio.',
        'empty_loading' => 'Limpando registro de requisições...',
        'empty_success' => 'Registro de requisições limpo com sucesso.',
        'return_link' => 'Retornar ao registro de requisições',
        'id' => 'ID',
        'id_label' => 'ID',
        'count' => 'Contador',
        'referer' => 'Referentes',
        'url' => 'URL',
        'status_code' => 'Código',
    ],
    'permissions' => [
        'manage_system_settings' => 'Gerenciar configurações do sistema',
        'manage_software_updates' => 'Gerenciar atualizações',
        'manage_mail_templates' => 'Gerenciar modelos de e-mail',
        'manage_other_administrators' => 'Gerenciar outros administradores',
        'view_the_dashboard' => 'Visualizar o painel'
    ]
];
