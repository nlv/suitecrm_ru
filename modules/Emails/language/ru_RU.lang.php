<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_EMAIL_INFORMATION' => 'EMAIL',
  'LBL_EMPTY'                 => ' ',
	'LBL_FW'					=> 'FW:',
	'LBL_RE'					=> 'RE:',

	'LBL_BUTTON_CREATE'					=> 'Создать',
	'LBL_BUTTON_EDIT'					=> 'Изменить',
    'LBL_BUTTON_EDIT_EDIT_DRAFT'	    => 'Edit Draft',
	'LBL_QS_DISABLED'                   => '(Функция быстрого поиска не доступна для данного модуля. Пожалуйста, используйте кнопку выбора.)',
	'LBL_SIGNATURE_PREPEND'				=> 'Поместить подпись перед ответом',
    'LBL_EMAIL_DEFAULT_DESCRIPTION' 	=> 'Это запрошенное Вами коммерческое предложение (Вы можете изменить этот текст)', // PR 3307
    'LBL_IMPORT' => 'Импорт',
    'LBL_IMPORTING' => 'Импортирование',

	'LBL_CONFIRM_DELETE'		=> 'Вы уверены, что хотите удалить эту папку?',
	'LBL_CONFIRM_DELETE_EMAIL'		=> 'Are you sure you want to delete this email?',
	'LBL_ENTER_FOLDER_NAME'		=> 'Укажите название папки',

	'LBL_ERROR_SELECT_MODULE'   => 'Пожалуйста, выберите соответствующий модуль.',

	'ERR_ARCHIVE_EMAIL'			=> 'Ошибка: Выберите сообщения для архивирования.',
	'ERR_DATE_START'			=> 'Дата начала',
	'ERR_DELETE_RECORD'			=> 'Вы должны указать соответствующую запись перед её удалением.',
	'ERR_NOT_ADDRESSED'			=> 'Должны быть заполнены поля: Кому, Копия или Скрытая копия',
	'ERR_TIME_START'			=> 'Время начала',
	'ERR_TIME_SENT'				=> 'Время отправки',
	'LBL_ACCOUNTS_SUBPANEL_TITLE'=> 'Контрагенты',
	'LBL_ADD_ANOTHER_FILE'		=> 'Добавить другой файл',
    'LBL_ADD_DASHLETS'          => 'Добавить дашлеты',
	'LBL_ADD_DOCUMENT'			=> 'Добавить документ',
	'LBL_ADD_ENTRIES'           => 'Добавить записи',
	'LBL_ADD_FILE'				=> 'Добавить файлы',
	'LBL_ARCHIVED_EMAIL'		=> 'Архивное сообщение',
	'LBL_ARCHIVED_MODULE_NAME'	=> 'Архивация E-mail',
    'LBL_ARCHIVED_EMAILS_CREATE'  => 'Создать',
	'LBL_ATTACHMENTS'			=> 'Вложения:',
	'LBL_ATTACH_FILES'			=> 'Attach Files', // PR 3307
    'LBL_ATTACH_DOCUMENTS'		=> 'Attach Documents', // PR 3307
	'LBL_ATTACH_NOTES'			=> 'Attach Notes', // PR 3307
	'LBL_HAS_ATTACHMENT'		=> 'Содержит вложение?',
	'LBL_BCC'					=> 'Скрытая копия:',
	'LBL_BODY'					=> 'Тело:',
	'LBL_BUGS_SUBPANEL_TITLE'	=> 'Ошибки',
	'LBL_CC'					=> 'Копия:',
	'LBL_COLON'					=> ':',
	'LBL_COMPOSE_MODULE_NAME'	=> 'Создать E-mail',
	'LBL_CONTACT_FIRST_NAME'	=> 'Имя контакта',
	'LBL_CONTACT_LAST_NAME'		=> 'Фамилия контакта',
	'LBL_CONTACT_NAME'			=> 'Контакт:',
	'LBL_CONTACTS_SUBPANEL_TITLE'=> 'Контакты',
	'LBL_CREATED_BY'			=> 'Кем создано:',
	'LBL_DATE_AND_TIME'			=> 'Отправлено:',
	'LBL_DATE_SENT'				=> 'Дата отправки:',
	'LBL_DATE'					=> 'Дата отправки:',
    'LBL_DELETE_FROM_SERVER'    => 'Удалить сообщение с сервера',
	'LBL_DESCRIPTION'			=> 'Описание',
	'LBL_EDIT_ALT_TEXT'			=> 'Правка альтернативного текста',
	'LBL_SEND_IN_PLAIN_TEXT'	=> 'Отправить в виде неформатир. текста',
	'LBL_EDIT_MY_SETTINGS'		=> 'Править мои настройки',
	'LBL_EMAIL_ATTACHMENT'		=> 'Вложение E-mail',
	'LBL_EMAIL_EDITOR_OPTION'	=> 'Отправить E-mail в формате HTML',
	'LBL_EMAIL_SELECTOR_SELECT' => 'Выбрать',
	'LBL_EMAIL_SELECTOR_CLEAR'  => 'Очистить',
	'LBL_EMAIL'					=> 'E-mail:',
	'LBL_EMAILS_ACCOUNTS_REL'	=> 'E-mail: Контрагенты',
	'LBL_EMAILS_BUGS_REL'		=> 'E-mail: Ошибки',
	'LBL_EMAILS_CASES_REL'		=> 'E-mail: Обращения',
	'LBL_EMAILS_CONTACTS_REL'	=> 'E-mail: Контакты',
	'LBL_EMAILS_LEADS_REL'		=> 'E-mail: Предварительные контакты',
	'LBL_EMAILS_OPPORTUNITIES_REL'=> 'E-mail: Сделки',
    'LBL_EMAILS_NOTES_REL'      => 'E-mail: Заметки',
	'LBL_EMAILS_PROJECT_REL'	=> 'E-mail: Проект',
	'LBL_EMAILS_PROJECT_TASK_REL'=> 'E-mail: Проектная задача',
	'LBL_EMAILS_PROSPECT_REL'	=> 'E-mail: Потенциальный клиент',
	'LBL_EMAILS_CONTRACTS_REL'	=> 'E-mail: Договор',
	'LBL_EMAILS_TASKS_REL'		=> 'E-mail: Задачи',
	'LBL_EMAILS_USERS_REL'		=> 'E-mail: Пользователи',
    'LBL_EMPTY_FOLDER'          => 'Папка пуста',
    'LBL_SELECT_FOLDER'         => 'Select Folder',
	'LBL_ERROR_SENDING_EMAIL'	=> 'Ошибка при отправке E-mail',
	'LBL_ERROR_SAVING_DRAFT'	=> 'Ошибка сохранения черновика',
	'LBL_FROM_NAME'				=> 'Имя отправителя',
	'LBL_FROM'					=> 'От:',
	'LBL_REPLY_TO'				=> 'Ответить:',
	'LBL_HTML_BODY'				=> 'HTML-содержание',
	'LBL_INVITEE'				=> 'Получатели',
	'LBL_LEADS_SUBPANEL_TITLE'	=> 'Предварительные контакты',
	'LBL_MESSAGE_SENT'			=> 'Сообщение отправлено',
	'LBL_MODIFIED_BY'			=> 'Кем исправлено',
	'LBL_MODULE_NAME_NEW'		=> 'Отправить E-mail в архив',
	'LBL_MODULE_NAME'			=> 'Все E-mail',
	'LBL_MODULE_TITLE'			=> 'E-mail: ',
    'LBL_MY_EMAILS'            => 'E-mail',
	'LBL_NEW_FORM_TITLE'		=> 'Отправить E-mail в архив',
	'LBL_NONE'                  => 'Нет',
	'LBL_NOT_SENT'				=> 'Ошибка отправки',
	'LBL_NOTE_SEMICOLON'		=> 'Замечание: используйте точку с запятой для разделения адресов при мультирассылке e-mail.',
	'LBL_NOTES_SUBPANEL_TITLE'	=> 'Вложения',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Сделки',
	'LBL_PROJECT_SUBPANEL_TITLE'=> 'Проекты',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE'=> 'Проектные задачи',
    'LBL_RAW'                  => 'Исходный E-mail',
	'LBL_SAVE_AS_DRAFT_BUTTON_LABEL'=> 'Сохранить черновик',
	'LBL_SAVE_AS_DRAFT_BUTTON_TITLE'=> 'Сохранить черновик',
	'LBL_DISREGARD_DRAFT_BUTTON_TITLE'=> 'Disregard Draft', // PR 3307
	'LBL_SEARCH_FORM_DRAFTS_TITLE'=> 'Найти черновики',
	'LBL_SEARCH_FORM_SENT_TITLE'=> 'Найти отправленные E-mail',
	'LBL_SEARCH_FORM_TITLE'		=> 'Поиск E-mail',
	'LBL_SEND_ANYWAYS'			=> 'Не указана тема письма. Все равно отправить?',
	'LBL_SEND_BUTTON_LABEL'		=> 'Отправить',
	'LBL_SEND_BUTTON_TITLE'		=> 'Отправить',
	'LBL_SEND'					=> 'ОТПРАВИТЬ',
	'LBL_SENT_MODULE_NAME'		=> 'Отправленные E-mail',
	'LBL_SHOW_ALT_TEXT'			=> 'Показ альтернативного текста',
	'LBL_SIGNATURE'				=> 'Подпись',
	'LBL_SUBJECT'				=> 'Тема:',
	'LBL_TEXT_BODY'				=> 'Текст',
	'LBL_TIME'					=> 'Время отправки:',
	'LBL_TO_ADDRS'				=> 'Кому:',
	'LBL_USE_TEMPLATE'			=> 'Использовать шаблон:',
	'LBL_USERS_SUBPANEL_TITLE'	=> 'Пользователи',
	'LBL_USERS'					=> 'Пользователи',

	'LNK_ALL_EMAIL_LIST'		=> 'Все E-mail',
	'LNK_ARCHIVED_EMAIL_LIST'	=> 'Архивированные E-mail',
	'LNK_CALL_LIST'				=> 'Звонки',
	'LNK_DRAFTS_EMAIL_LIST'		=> 'Черновик',
	'LNK_EMAIL_LIST'			=> 'E-mail',
	'LBL_EMAIL_RELATE'          => 'Связано с',
	'LNK_EMAIL_TEMPLATE_LIST'	=> 'Шаблоны E-mail',
	'LNK_MEETING_LIST'			=> 'Встречи',
	'LNK_NEW_ARCHIVE_EMAIL'		=> 'Создать архивн. E-mail',
	'LNK_NEW_CALL'				=> 'Назначить звонок',
	'LNK_NEW_EMAIL_TEMPLATE'	=> 'Создать шаблон E-mail',
	'LNK_NEW_EMAIL'				=> 'Отправить E-mail',
	'LNK_NEW_MEETING'			=> 'Назначить встречу',
	'LNK_NEW_NOTE'				=> 'Создать заметку или вложение',
	'LNK_NEW_SEND_EMAIL'		=> 'Создать E-mail',
	'LNK_NEW_TASK'				=> 'Создать задачу',
	'LNK_NOTE_LIST'				=> 'Заметки',
	'LNK_SENT_EMAIL_LIST'		=> 'Отправленные E-mail',
	'LNK_TASK_LIST'				=> 'Задачи',
	'LNK_VIEW_CALENDAR'			=> 'Сегодня',

	'LBL_LIST_ASSIGNED'			=> 'Назначено',
	'LBL_LIST_CONTACT_NAME'		=> 'Контактное лицо',
	'LBL_LIST_CREATED'			=> 'Создано',
	'LBL_LIST_DATE_SENT'		=> 'Дата отправки',
	'LBL_LIST_DATE'				=> 'Дата отправки',
	'LBL_LIST_FORM_DRAFTS_TITLE'=> 'Набросок',
	'LBL_LIST_FORM_SENT_TITLE'	=> 'Отправленные E-mail',
	'LBL_LIST_FORM_TITLE'		=> 'Список E-mail',
	'LBL_LIST_FROM_ADDR'		=> 'От',
	'LBL_LIST_RELATED_TO'		=> 'Тип получателя',
	'LBL_LIST_SUBJECT'			=> 'Тема',
	'LBL_LIST_TIME'				=> 'Время отправки',
	'LBL_LIST_TO_ADDR'			=> 'Для',
	'LBL_LIST_TYPE'				=> 'Тип',

	'NTC_REMOVE_INVITEE'		=> 'Вы уверены, что хотите удалить этого получателя из данного e-mail?',
	'WARNING_SETTINGS_NOT_CONF'	=> 'Предупреждение: Ваши установки e-mail не сконфигурированы для отправки e-mail.',
	'WARNING_NO_UPLOAD_DIR'		=> 'Вероятно, вложения не будут прикреплены к сообщению: обнаружено неверное значение переменной "upload_tmp_dir". Пожалуйста, исправьте эту ошибку в файле php.ini.',
	'WARNING_UPLOAD_DIR_NOT_WRITABLE'	=> 'Вероятно, вложения не будут прикреплены к сообщению: обнаружено неверное значение переменной "upload_tmp_dir". Пожалуйста, исправьте эту ошибку в файле php.ini file.',

    // for All emails
    'LBL_BUTTON_RAW_TITLE'   => 'Показать исходный текст сообщения',
    'LBL_BUTTON_RAW_LABEL'   => 'Показать исходный текст сообщения',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Скрыть исходный текст сообщения',

	// for InboundEmail
	'LBL_BUTTON_CHECK'			=> 'Проверить почту',
	'LBL_BUTTON_CHECK_TITLE'	=> 'Проверить почту',
	'LBL_BUTTON_CHECK_KEY'		=> 'c',
	'LBL_BUTTON_FORWARD'		=> 'Переслать',
	'LBL_BUTTON_FORWARD_TITLE'	=> 'Переслать это сообщение',
	'LBL_BUTTON_REPLY_TITLE'	=> 'Ответить',
	'LBL_BUTTON_REPLY'			=> 'Ответить',
        'LBL_BUTTON_REPLY_ALL'		=> 'Ответить всем',
	'LBL_CASES_SUBPANEL_TITLE'	=> 'Обращения',
	'LBL_INBOUND_TITLE'			=> 'Входящие E-mail',
	'LBL_INTENT'				=> 'Цель',
	'LBL_MESSAGE_ID'			=> 'ID сообщения',
	'LBL_REPLY_HEADER_1'		=> 'Вкл.',
	'LBL_REPLY_HEADER_2'		=> 'писал(а):',
	'LBL_REPLY_TO_ADDRESS'		=> 'Ответить на адрес',
	'LBL_REPLY_TO_NAME'			=> 'Ответить на имя',

	'LBL_LIST_BUG'				=> 'Ошибки',
	'LBL_LIST_CASE'				=> 'Обращения',
	'LBL_LIST_CONTACT'			=> 'Контакты',
	'LBL_LIST_LEAD'				=> 'Предварит. контакты',
	'LBL_LIST_TASK'				=> 'Задачи',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный(ая)',

	// for Inbox
	'LBL_ALL'					=> 'Все',
	'LBL_ASSIGN_WARN'			=> 'Проверьте, что все 2 опции установлены.',
	'LBL_BACK_TO_GROUP'			=> 'Возврат к групповым входящим',
	'LBL_BUTTON_DISTRIBUTE_TITLE'=> 'Назначение',
	'LBL_BUTTON_DISTRIBUTE'		=> 'Назначить',
	'LBL_BUTTON_GRAB_TITLE'		=> 'Взять из группы',
	'LBL_BUTTON_GRAB'			=> 'Взять из группы',
	'LBL_CREATE_BUG'			=> 'Добавить ошибку',
	'LBL_CREATE_CASE'			=> 'Создать обращение',
	'LBL_CREATE_CONTACT'		=> 'Создать контакт',
	'LBL_CREATE_LEAD'			=> 'Создать предв. контакт',
	'LBL_CREATE_TASK'			=> 'Создать задачу',
	'LBL_DIST_TITLE'			=> 'Назначение',
	'LBL_LOCK_FAIL_DESC'		=> 'Выбранный пункт не доступен в настоящее время.',
	'LBL_LOCK_FAIL_USER'		=> ' взят владельцем.',
	'LBL_MASS_DELETE_ERROR'		=> 'Нет отмеченных записей для удаления.',
	'LBL_NEW'					=> 'Новый',
	'LBL_NEXT_EMAIL'			=> 'Следующая свободная запись',
	'LBL_NO_GRAB_DESC'			=> 'Нет доступным записей. Попробуйте ещё раз попозже.',
	'LBL_QUICK_REPLY'			=> 'Ответить',
	'LBL_REPLIED'				=> 'Дан ответ',
	'LBL_TAKE_ONE_TITLE'		=> 'Повт.',
	'LBL_TITLE_SEARCH_RESULTS'	=> 'Результаты поиска',
	'LBL_TO'					=> 'Кому:',
	'LBL_TOGGLE_ALL'			=> 'Отметить все',
	'LBL_UNKNOWN'				=> 'Неизвестно',
	'LBL_UNREAD_HOME'			=> 'Непрочитанные письма',
	'LBL_UNREAD'				=> 'Не прочитано',
	'LBL_USE_ALL'				=> 'Все результаты поиска',
	'LBL_USE_CHECKED'			=> 'Только отмеченные',
	'LBL_USE_MAILBOX_INFO'		=> 'Производить рассылку с адреса:',
	'LBL_USE'					=> 'Назначение:',
	'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Назначить выбранные результаты: ',
	'LBL_USER_SELECT'			=> 'Выбор пользователей',
	'LBL_USING_RULES'			=> 'Правило назначения:',
	'LBL_WARN_NO_DIST'			=> 'Не выбран метод рассылки',
	'LBL_WARN_NO_USERS'			=> 'Пользователи не выбраны',
    'LBL_WARN_NO_USERS_OR_TEAM' => 'Выберите пользователя для назначения ответственного.',
    'LBL_IMPORT_STATUS_TITLE'	=> 'Статус',
    'LBL_INDICATOR'         	=> 'Indicator',
	'LBL_LIST_STATUS'			=> 'Статус',
	'LBL_LIST_TITLE_GROUP_INBOX'=> 'Групповые входящие',
	'LBL_LIST_TITLE_MY_DRAFTS'	=> 'Drafts',
	'LBL_LIST_TITLE_MY_INBOX'	=> 'Inbox',
	'LBL_LIST_TITLE_MY_SENT'	=> 'Отправленный E-mail',
	'LBL_LIST_TITLE_MY_ARCHIVES'=> 'Архивированные E-mail',

	'LNK_CHECK_MY_INBOX'		=> 'Проверить почту',
	'LNK_DATE_SENT'				=> 'Дата отправки',
	'LNK_GROUP_INBOX'			=> 'Групповые входящие',
	'LNK_MY_DRAFTS'				=> 'Drafts',
	'LNK_MY_INBOX'				=> 'E-mail',
	'LNK_VIEW_MY_INBOX'			=> 'View Email',
	'LNK_QUICK_REPLY'			=> 'Ответить',
	'LNK_MY_ARCHIVED_LIST'		=> 'Мои архивы',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' =>'Основная команда не выбрана',
    'LBL_INSERT_CONTACT_EMAIL' => 'Insert Email Address from a Contact',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'Insert Email Address from an Account',
    'LBL_INSERT_TARGET_EMAIL' => 'Insert Email Address from a Target',
    'LBL_INSERT_USER_EMAIL' => 'Insert Email Address from an User',
    'LBL_INSERT_LEAD_EMAIL' => 'Insert Email Address from a Lead',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'Invalid email address',

	// advanced search
	'LBL_ASSIGNED_TO'			=> 'Ответственный(ая): ',
	'LBL_MEMBER_OF'				=> 'Родитель',
	'LBL_QUICK_CREATE'			=> 'Быстрое создание',
	'LBL_STATUS'				=> 'Статус письма:',
	'LBL_EMAIL_FLAGGED'			=> 'Помеченные:',
	'LBL_EMAIL_REPLY_TO_STATUS'	=> 'Статус ответа:',
	'LBL_TYPE'					=> 'Тип:',
	//#20680 EmialTemplate Ext.Message.show;
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Обратите внимание!',
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Выбор данного шаблона приведёт к перезаписи всех данных, введённых в тело письма. Все равно продолжить?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'При выборе пункта "--не выбрано--" будет удалён весь текст из тела письма. Все равно продолжить?',
	'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Внимание',
	'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Использование шаблона письма, содержащего переменные контакта (например - имя контакта), для рассылки письма сразу нескольким получателям может привести к неожиданным результатам. Рекомендуется использовать маркетинговые кампании для массовой рассылки электронных писем.',
	'LBL_CHECK_ATTACHMENTS'=>'Пожалуйста, проверьте вложения!',
	'LBL_HAS_ATTACHMENTS' => 'Е-mail содержит вложения. Хотите их сохранить?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Есть вложения',
	'ERR_MISSING_REQUIRED_FIELDS' => 'Необходимые поля не заполнены',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Необходимые поля неверно заполнены',
	'LBL_FILTER_BY_RELATED_BEAN' => 'Показать только связанных с записью получателей',
    'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'Получатели были успешно добавлены.',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Добавить',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Добавить',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Параметры учётной записи',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Сервер исходящей почты',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Серверы исходящей почты',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Учётные записи электронной почты',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'Входящие E-mail',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Исходящие E-mail',
    'LBL_ADD_CC' => 'Добавить копию',
    'LBL_ADD_BCC' => 'Добавить скрытую копию',
    'LBL_MOVE_TO_BCC' => 'Переместить в скрытую копию',
    'LBL_ADD_TO_ADDR' => 'Добавить в',
    'LBL_SELECTED_ADDR' => 'Выбрано',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Ошибка отправки Е-mail',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'показать ',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => ' больше',
    'LBL_MORE_OPTIONS' => 'Дополнительные поля>>',
    'LBL_LESS_OPTIONS' => '<<Стандартные поля',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Персональная',
    'LBL_MAILBOX_TYPE_GROUP' => 'Групповая',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Групповая-автоимпорт',
    'LBL_SEARCH_FOR' => 'Поиск',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Персональная</b>: Ваша учётная запись. Только вы можете работать с письмами этой учётной записи.<br><b>Групповая</b>: Групповая учётная запись. Все участники группы могут работать с письмами этой учётной записи.<br><b>Групповая-автоимпорт</b>: Групповая учётная запись. Письма данной учётной записи автоматически импортируются в систему.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Введите имя, фамилию, адрес электронной почты получателя, название контрагента или имя предварительного контакта.',
    'LBL_TEST_SETTINGS'     => 'Тест настроек',
    'LBL_EMPTY_EMAIL_BODY'  => '<p><span style="color: #888888;"><em> - Данные отсутствуют - </em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Please specify the subject', // PR 3307
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'Please specify your message in the body', // PR 3307
    'LBL_HAS_INVALID_EMAIL_CC' => 'The address(es) in the Cc field are invalid', // PR 3307
    'LBL_HAS_INVALID_EMAIL_BCC' => 'The address(es) in the Bcc field are invalid', // PR 3307
    'LBL_HAS_INVALID_EMAIL_TO' => 'The address(es) in the To field are invalid', // PR 3307
    'LBL_TEST_EMAIL_SUBJECT' => 'SuiteCRM - тест настроек электронной почты',
    'LBL_NO_SUBJECT' =>'(без темы)',
    'LBL_CHECKING_ACCOUNT'	=> 'Проверка учётной записи',
    'LBL_OF'	=> 'из',
    'LBL_TEST_EMAIL_BODY' => 'Это сообщение было отправлено с целью проверки настроек сервера исходящей почты SuiteCRM. Получение этого письма свидетельствует о корректных настройках сервера исходящей почты.',

    // for outbound email dialog
	'LBL_SMTP_SERVER_HELP' => 'Сервер SMTP может быть использован для отправки исходящей электронной почты. Для использования данного сервера в настройках учётной записи укажите соответствующего пользователя и пароль.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Администратор системы ещё не настроил стандартный сервер исходящей почты. Тестовое письмо не может быть отправлено.',
    'LBL_MAIL_SMTPAUTH_REQ'				=> 'Использовать SMTP-аутентификацию?',
	'LBL_MAIL_SMTPPASS'					=> 'SMTP-пароль:',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP-порт:',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTP-сервер:',
	'LBL_MAIL_SMTPUSER'					=> 'SMTP-пользователь:',
	'LBL_MAIL_SMTPTYPE'                => 'Тип SMTP-сервера:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'Настройка SMTP-сервера',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Выберите почтовую службу:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! - пароль:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! - учётная запись почты:',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail - пароль:',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail - адрес:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange - пароль:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange - логин:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange - порт сервера:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange  - сервер:',

	'LBL_EDIT_LAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,
	'LBL_ATTACHMENT' => 'Вложение' /*for 508 compliance fix*/,
	'LBL_DELETE_INLINE' => 'Удалить' /*for 508 compliance fix*/,
	'LBL_CREATE_CASES' => 'Создание Обращений' /*for 508 compliance fix*/,
	'LBL_CREATE_LEADS' => 'Создание Предварит. контактов' /*for 508 compliance fix*/,
	'LBL_CREATE_CONTACTS' => 'Создание Контактов' /*for 508 compliance fix*/,
	'LBL_CREATE_BUGS' => 'Новые Ошибки' /*for 508 compliance fix*/,
	'LBL_CREATE_TASKS' => 'Создание Задач' /*for 508 compliance fix*/,
	'LBL_CHECK_INLINE' => 'Correct' /*for 508 compliance fix*/,
	'LBL_CLOSE' => 'Закрыть' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Помощь' /*for 508 compliance fix*/,
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL' => 'Yahoo' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_WAIT' => 'Подождите' /*for 508 compliance fix*/,
	'LBL_CHECKEMAIL' => 'Проверить почту' /*for 508 compliance fix*/,
	'LBL_COMPOSEEMAIL' => 'Создать E-mail' /*for 508 compliance fix*/,
	'LBL_EMAILSETTINGS' => 'Параметры E-mail' /*for 508 compliance fix*/,

	// SNIP
	'LBL_EMAILS_MEETINGS_REL' => 'E-mail: Встречи',
	'LBL_DATE_CREATED' => 'Дата создания',
	'LBL_DATE_MODIFIED' => 'Дата изменения',

	'LBL_CATEGORY' => 'Категория',
	'LBL_LIST_CATEGORY' => 'Категория',
	'LBL_EMAIL_TEMPLATE' => 'Шаблон E-mail',

	'LBL_CONFIRM_TITLE' => 'Apply an Email Template',
	'LBL_CONFIRM_BODY' => 'This operation will override the email Body field, do you want to continue?',

	'LBL_MAILBOX_ID' => 'Mailbox ID',
	'LBL_PARENT_ID' => 'ID родителя',
    'LBL_LAST_SYNCED' => 'Last Synchronised', // PR 3551
    'LBL_ORPHANED' => 'Orphaned', // PR 3551
    'LBL_IMAP_KEYWORDS' => 'IMAP Keywords', // PR 3551
    'LBL_ERROR_NO_FOLDERS' => 'Error: There are no folders available. Please check your email settings.', // PR 3521
);

