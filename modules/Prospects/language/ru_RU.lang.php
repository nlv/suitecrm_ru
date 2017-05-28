<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Адресаты',
    'LBL_MODULE_ID' => 'Адресаты',
    'LBL_INVITEE' => 'Отчёты',
    'LBL_MODULE_TITLE' => 'Адресаты - ГЛАВНАЯ',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск адресатов',
    'LBL_LIST_FORM_TITLE' => 'Адресаты',
    'LBL_NEW_FORM_TITLE' => 'Новый адресат',
    'LBL_PROSPECT' => 'Адресат:',
    'LBL_BUSINESSCARD' => 'Визитка',
    'LBL_LIST_NAME' => 'ФИО',
    'LBL_LIST_LAST_NAME' => 'Фамилия',
    'LBL_LIST_PROSPECT_NAME' => 'ФИО адресата',
    'LBL_LIST_TITLE' => 'Должность',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Другой E-mail',
    'LBL_LIST_PHONE' => 'Тел.',
    'LBL_LIST_PROSPECT_ROLE' => 'Роль',
    'LBL_LIST_FIRST_NAME' => 'Имя',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_ASSIGNED_TO_ID' => 'Ответственный(ая):',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_first_name' => 'LBL_LIST_FIRST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_title' => 'LBL_LIST_TITLE', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS
//END DON'T CONVERT
    'LBL_CAMPAIGN_ID' => 'Маркет. кампания (ID)',
    'LBL_EXISTING_PROSPECT' => 'Использован существующий контакт',
    'LBL_CREATED_PROSPECT' => 'Создан новый контакт',
    'LBL_EXISTING_ACCOUNT' => 'Использован существующий контрагент',
    'LBL_CREATED_ACCOUNT' => 'Создан существующий контрагент',
    'LBL_CREATED_CALL' => 'Создан новый звонок',
    'LBL_CREATED_MEETING' => 'Создана новая встреча',
    'LBL_ADDMORE_BUSINESSCARD' => 'Добавить другую визитку',
    'LBL_ADD_BUSINESSCARD' => 'Ввести визитку',
    'LBL_NAME' => 'ФИО:',
    'LBL_FULL_NAME' => 'ФИО',
    'LBL_PROSPECT_NAME' => 'ФИО адресата:',
    'LBL_PROSPECT_INFORMATION' => 'Основная информация', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MORE_INFORMATION' => 'Дополнительная информация',
    'LBL_FIRST_NAME' => 'Имя:',
    'LBL_OFFICE_PHONE' => 'Тел. (раб.):',
    'LBL_ANY_PHONE' => 'Любой тел.:',
    'LBL_PHONE' => 'Тел.:',
    'LBL_LAST_NAME' => 'Фамилия:',
    'LBL_MOBILE_PHONE' => 'Тел. (моб.):',
    'LBL_HOME_PHONE' => 'Тел. (дом.):',
    'LBL_OTHER_PHONE' => 'Другой тел.:',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основной адрес - улица:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основной адрес - город:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основной адрес - страна:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основной адрес - область:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основной адрес - индекс:',
    'LBL_ALT_ADDRESS_STREET' => 'Другой адрес - улица:',
    'LBL_ALT_ADDRESS_CITY' => 'Другой адрес - город:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Другой адрес - страна:',
    'LBL_ALT_ADDRESS_STATE' => 'Другой адрес - область:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Другой адрес - индекс:',
    'LBL_TITLE' => 'Должность:',
    'LBL_DEPARTMENT' => 'Отдел:',
    'LBL_BIRTHDATE' => 'День рождения:',
    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Другой E-mail:',
    'LBL_ANY_EMAIL' => 'Любой E-mail:',
    'LBL_ASSISTANT' => 'Помощник:',
    'LBL_ASSISTANT_PHONE' => 'Помощник - тел.:',
    'LBL_DO_NOT_CALL' => 'Не звонить:',
    'LBL_EMAIL_OPT_OUT' => 'E-mail для мусора:',
    'LBL_PRIMARY_ADDRESS' => 'Основной адрес:',
    'LBL_ALTERNATE_ADDRESS' => 'Другой адрес:',
    'LBL_ANY_ADDRESS' => 'Любой адрес:',
    'LBL_CITY' => 'Город:',
    'LBL_STATE' => 'Область или регион:', //For address fields
    'LBL_POSTAL_CODE' => 'Индекс:',
    'LBL_COUNTRY' => 'Страна:',
    'LBL_DESCRIPTION_INFORMATION' => 'Описание',
    'LBL_ADDRESS_INFORMATION' => 'Адресная информация',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_PROSPECT_ROLE' => 'Роль:',
    'LBL_OPP_NAME' => 'Название сделки:',
    'LBL_IMPORT_VCARD' => 'Импортирование vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Автоматическое создание нового контакта при импортировании файла vCard.',
    'LBL_DUPLICATE' => 'Возможно дублирующиеся потенциальные клиенты',
    'MSG_SHOW_DUPLICATES' => 'Создаваемый вами адресат возможно дублирует уже имеющуюся запись. Адресаты со схожими названиями и/или адресами электронной почты показаны ниже. <br>Нажмите на кнопку <b>Создать адресата</b> для создания новой записи или выберите существующую запись из списка.',
    'MSG_DUPLICATE' => 'Создаваемый вами адресат возможно дублирует уже имеющуюся запись. Адресаты со схожими названиями и/или адресами электронной почты показаны ниже. Нажмите кнопку "Сохранить"  для продолжения создания нового адресата или кнопку "Отказаться" для возврата в модуль.',
    'LNK_IMPORT_VCARD' => 'Создать из vCard',
    'LNK_NEW_ACCOUNT' => 'Создать контрагента',
    'LNK_NEW_OPPORTUNITY' => 'Создать сделку',
    'LNK_NEW_CASE' => 'Создать обращение',
    'LNK_NEW_NOTE' => 'Создать заметку или вложение',
    'LNK_NEW_CALL' => 'Назначить звонок',
    'LNK_NEW_EMAIL' => 'Отправить E-mail в архив',
    'LNK_NEW_MEETING' => 'Назначить встречу',
    'LNK_NEW_TASK' => 'Создать задачу',
    'LNK_NEW_APPOINTMENT' => 'Назначить встречу/звонок',
    'LNK_IMPORT_PROSPECTS' => 'Импорт адресатов',
    'NTC_DELETE_CONFIRMATION' => 'Вы уверены, что хотите удалить эту запись?',
    'NTC_REMOVE_CONFIRMATION' => 'Вы уверены, что хотите удалить этот контакт из данного обращения?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Вы уверены, что хотите удалить эту запись из личных отчётов?',
    'ERR_DELETE_RECORD' => 'Для удаления контакта вы должны указать номер записи.',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Копировать основной адрес в дополнительный',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Копировать дополнительный адрес в основной',
    'LBL_SALUTATION' => 'Приветствие',
    'LBL_SAVE_PROSPECT' => 'Сохранить адресата',
    'LBL_CREATED_OPPORTUNITY' => 'Создана новая сделка',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Создание сделки требует наличия контрагента.\n Пожалуйста, или создайте нового контрагента или выберите уже существующего.',
    'LNK_SELECT_ACCOUNT' => "Выбрать контрагента",
    'LNK_NEW_PROSPECT' => 'Создать адресата',
    'LNK_PROSPECT_LIST' => 'Адресаты',
    'LNK_NEW_CAMPAIGN' => 'Создать маркет. кампанию',
    'LNK_CAMPAIGN_LIST' => 'Рассылки',
    'LNK_NEW_PROSPECT_LIST' => 'Создать список адресатов',
    'LNK_PROSPECT_LIST_LIST' => 'Списки адресатов',
    'LNK_IMPORT_PROSPECT' => 'Импорт адресатов',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Выбрать отмеченных адресатов',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Выбрать отмеченных адресатов',
    'LBL_INVALID_EMAIL' => 'Неверный E-mail:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Адресаты',
    'LBL_PROSPECT_LIST' => 'Список адресатов',
    'LBL_CONVERT_BUTTON_KEY' => 'V',
    'LBL_CONVERT_BUTTON_TITLE' => 'Преобразовать адресата',
    'LBL_CONVERT_BUTTON_LABEL' => 'Преобразовать адресата',
    'LBL_CONVERTPROSPECT' => 'Преобразовать адресата',
    'LNK_NEW_CONTACT' => 'Новый контакт',
    'LBL_CREATED_CONTACT' => "Создан новый контакт",
    'LBL_BACKTO_PROSPECTS' => 'Вернуться к адресатам',
    'LBL_CAMPAIGNS' => 'Рассылки',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Маркетинговые кампании, проведённые с участием адресата',
    'LBL_TRACKER_KEY' => 'Ключ трекера',
    'LBL_LEAD_ID' => 'ID предварительного контакта',
    'LBL_CONVERTED_LEAD' => 'Преобразованный предварительный контакт',
    'LBL_ACCOUNT_NAME' => 'Контрагент',
    'LBL_EDIT_ACCOUNT_NAME' => 'Контрагент:',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Маркетинговые кампании',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    //For export labels
    'LBL_PHONE_HOME' => 'Тел. (дом.)',
    'LBL_PHONE_MOBILE' => 'Тел. (моб.)',
    'LBL_PHONE_WORK' => 'Тел. (раб.)',
    'LBL_PHONE_OTHER' => 'Другой тел.',
    'LBL_PHONE_FAX' => 'Факс',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Ответственный(ая)',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ответственный(ая)-ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Изменено(ID)',
    'LBL_EXPORT_CREATED_BY' => 'Создано (ID)',
    'LBL_EXPORT_EMAIL2' => 'Другой E-mail',

    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'События',
);
?>
