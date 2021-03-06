<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'ERR_DELETE_RECORD' => 'Вы должны указать конкретную запись перед удалением.',
    'LBL_ACCOUNT_ID' => 'ID контрагента:',
    'LBL_CASE_ID' => 'ID обращения:',
    'LBL_CLOSE' => 'Закрыто:',
    'LBL_CONTACT_ID' => 'ID контакта:',
    'LBL_CONTACT_NAME' => 'Контакт:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Заметки',
    'LBL_DESCRIPTION' => 'Заметка',
    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_EMAIL_ATTACHMENT' => 'Вложение E-mail',
    'LBL_FILE_MIME_TYPE' => 'Тип Mime',
    'LBL_FILE_URL' => 'URL файла',
    'LBL_FILENAME' => 'Вложение:',
    'LBL_LEAD_ID' => 'ID предварительного контакта:',
    'LBL_LIST_CONTACT_NAME' => 'Контакт',
    'LBL_LIST_DATE_MODIFIED' => 'Дата последнего изменения',
    'LBL_LIST_FILENAME' => 'Вложение',
    'LBL_LIST_FORM_TITLE' => 'Список заметок',
    'LBL_LIST_RELATED_TO' => 'Относится к',
    'LBL_LIST_SUBJECT' => 'Тема',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_MODULE_NAME' => 'Заметки',
    'LBL_MODULE_TITLE' => 'Заметки - ГЛАВНАЯ',
    'LBL_NEW_FORM_TITLE' => 'Создать заметку или вложение',
    'LBL_NOTE_STATUS' => 'Заметка',
    'LBL_NOTE_SUBJECT' => 'Тема заметки:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Вложения',
    'LBL_NOTE' => 'Заметка:',
    'LBL_OPPORTUNITY_ID' => 'ID сделки:',
    'LBL_PARENT_ID' => 'ID родителя:',
    'LBL_PARENT_TYPE' => 'Тип родителя',
    'LBL_PHONE' => 'Тел.:',
    'LBL_PORTAL_FLAG' => 'Показывать на портале?',
    'LBL_EMBED_FLAG' => 'Вставить в Е-mail?',
    'LBL_PRODUCT_ID' => 'ID товара:',
    'LBL_QUOTE_ID' => 'ID предложения:',
    'LBL_RELATED_TO' => 'Относится к',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск заметки',
    'LBL_STATUS' => 'Статус',
    'LBL_SUBJECT' => 'Тема:',
    'LNK_IMPORT_NOTES' => 'Импорт заметок',
    'LNK_NEW_NOTE' => 'Создать заметку или вложение',
    'LNK_NOTE_LIST' => 'Заметки',
    'LBL_MEMBER_OF' => 'Состоит в:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_REMOVING_ATTACHMENT' => 'Удаление вложения...',
    'ERR_REMOVING_ATTACHMENT' => 'Не удалось удалить вложение...',
    'LBL_CREATED_BY' => 'Кем создано',
    'LBL_MODIFIED_BY' => 'Изменено',
    'LBL_SEND_ANYWAYS' => 'Не указана тема письма. Все равно отправить/сохранить?',
    'LBL_NOTE_INFORMATION' => 'Основная информация', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MY_NOTES_DASHLETNAME' => 'Мои заметки',
    'LBL_EDITLAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Имя',
    'LBL_LAST_NAME' => 'Фамилия',
    'LBL_DATE_ENTERED' => 'Дата создания',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_DELETED' => 'Удалено',
);
