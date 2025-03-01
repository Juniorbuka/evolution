<?php
/**
 * EVO Installer language file
 *
 * @author Pertsev Dmitriy
 * @author Safronovich Victor
 * @author Rudnykh Vitalii
 * @author Russian EVO Community
 * @version 1.4.5
 * @date 2018/10/31
 *
 * @language Russian
 * @package modx
 * @subpackage installer
 *
 * Please commit your language changes on Transifex (https://www.transifex.com/projects/p/modx-evolution/) or on GitHub (https://github.com/modxcms/evolution).
 */
setlocale (LC_ALL, 'uk_UA.UTF-8');
$_lang["agree_to_terms"] = 'Погодитись з умовами ліцензії та приступити до встановлення';
$_lang["alert_database_test_connection"] = 'Ви повинні створити базу даних або вибрати базу даних для перевірки!';
$_lang["alert_database_test_connection_failed"] = 'Невдала перевірка вибраної бази даних!';
$_lang["alert_enter_adminconfirm"] = 'Пароль адміністратора та підтвердження пароля не збігаються!';
$_lang["alert_enter_adminlogin"] = 'Введіть ім\'я адміністратора.';
$_lang["alert_enter_adminpassword"] = 'Введіть пароль адміністратора!';
$_lang["alert_enter_database_name"] = 'Введіть ім\'я бази даних!';
$_lang["alert_enter_host"] = 'Введіть хост бази даних!';
$_lang["alert_enter_login"] = 'Введіть ім\'я користувача бази даних!';
$_lang["alert_server_test_connection"] = 'Перевірте з\'єднання з сервером бази даних!';
$_lang["alert_server_test_connection_failed"] = 'З\'єднатися із сервером бази даних не вдалося!';
$_lang["alert_table_prefixes"] = 'Префікс таблиць має починатися з літери!';
$_lang["all"] = 'Всі';
$_lang["and_try_again"] = ', і спробуйте знову. Якщо вам потрібна допомога щодо виправлення цієї помилки';
$_lang["and_try_again_plural"] = ', і спробуйте знову. Якщо вам потрібна допомога у виправленні цих помилок';
$_lang["begin"] = 'Почати';
$_lang["btnback_value"] = 'Назад';
$_lang["btnclose_value"] = 'Закрити';
$_lang["btnnext_value"] = 'Далі';
$_lang["cant_write_config_file"] = 'Програма інсталяції не змогла записати файл конфігурації. Скопіюйте вищезгадане у файл ';
$_lang["cant_write_config_file_note"] = 'Як тільки ви це зробите, ви можете увійти до панелі керування, перейшовши в браузері за адресою Адреса_Вашого_Сайта/[+MGR_DIR+]/.';
$_lang["checkbox_select_options"] = 'Параметри вибору прапорців:';
$_lang["checking_iconv"] = 'Перевірка доступності <span class="mono">iconv</span>: ';
$_lang["checking_iconv_note"] = 'Необхідно встановити/увімкнути розширення iconv. Будь ласка, зверніться до адміністратора сервера, щоб зробити це.';
$_lang["checking_if_cache_exist"] = 'Перевірка існування теки <span class="mono">/assets/cache</span> та <span class="mono">/assets/cache/rss</span>: ';
$_lang["checking_if_cache_file_writable"] = 'Перевірте можливість запису у файл <span class="mono">/assets/cache/siteCache.idx.php</span>: ';
$_lang["checking_if_cache_file2_writable"] = 'Перевірте можливість запису у файл <span class="mono">/assets/cache/sitePublishing.idx.php</span>: ';
$_lang["checking_if_cache_writable"] = 'Перевірка можливості запису до тек <span class="mono">/assets/cache</span> та <span class="mono">/assets/cache/rss</span>: ';
$_lang["checking_if_config_exist_and_writable"] = 'Перевірка існування та можливості запису у файл <span class="mono">/[+MGR_DIR+]/includes/config.inc.php</span>: ';
$_lang["checking_if_export_exists"] = 'Перевірка існування теки <span class="mono">/assets/export</span>: ';
$_lang["checking_if_export_writable"] = 'Перевірка можливості запису до теки <span class="mono">/assets/export</span>: ';
$_lang["checking_if_images_exist"] = 'Перевірка існування тек <span class="mono">/assets/images</span>, <span class="mono">/assets/files</span>,  <span class="mono">/assets/backup</span> и <span class="mono">/assets/.thumbs</span>: ';
$_lang["checking_if_images_writable"] = 'Перевірка можливості запису до тек <span class="mono">/assets/images</span>, <span class="mono">/assets/files</span>,  <span class="mono">/assets/backup</span> и <span class="mono">/assets/.thumbs</span>: ';
$_lang["checking_mysql_strict_mode"] = 'Перевірка MySQL на строгий режим strict sql_mode: ';
$_lang["checking_mysql_version"] = 'Перевірка версії MySQL: ';
$_lang["checking_pgsql_version"] = 'Перевірка версії PostgreSQL: ';
$_lang["checking_php_version"] = 'Перевірка версії PHP: ';
$_lang["checking_registerglobals"] = 'Перевірка параметрів PHP Register_Globals: ';
$_lang["checking_registerglobals_note"] = 'Конфігурація PHP робить ваш сайт більш сприйнятливим до XSS-атак. Ви повинні самостійно, або зв\'язавшись з адміністрацією хостингу, вимкнути Register_Globals. Зазвичай це робиться одним із наступних шляхів: вносяться виправлення в php.ini файл, додаються правила у файл .htaccess, який знаходиться в корені папки Evolution CMS, або додаванням свого php.ini до кожної папки всередині папки Evolution CMS (їх дуже багато). Ви можете продовжити інсталяцію Evolution CMS, але обміркуйте це попередження.';
$_lang["checking_sessions"] = 'Перевірка налаштувань сесій: ';
$_lang["checking_table_prefix"] = 'Перевірка префіксу таблиць `';
$_lang["choose_language"] = 'Оберіть мову';
$_lang["chunks"] = 'Чанки';
$_lang["config_permissions_note"] = 'При новій Linux/Unix установці, створіть порожній файл <span class="mono">config.inc.php</span> у папці <span class="mono">/[+MGR_DIR+]/includes/</span> з правами 0666.';
$_lang["connection_screen_collation"] = 'Зіставлення:';
$_lang["connection_screen_connection_method"] = 'Метод зіставлення:';
$_lang["connection_screen_database_connection_information"] = 'Параметры базы данных';
$_lang["connection_screen_database_connection_note"] = 'Введіть ім\'я бази даних для Evolution CMS. Якщо у вас ще немає бази даних, програма установки спробує створити базу даних для вас. Залежно від конфігурації MySQL або прав користувача бази даних, процес може завершитися невдачею.';
$_lang["connection_screen_database_host"] = 'Хост бази даних:';
$_lang["connection_screen_database_type"] = 'Тип бази даних:';
$_lang["connection_screen_database_info"] = 'Інформація бази даних';
$_lang["connection_screen_database_login"] = 'Ім\'я користувача:';
$_lang["connection_screen_database_name"] = 'Ім\'я бази даних:';
$_lang["connection_screen_database_pass"] = 'Пароль:';
$_lang["connection_screen_database_test_connection"] = 'Натисніть тут, щоб створити базу даних або перевірити, що така база існує';
$_lang["connection_screen_default_admin_email"] = 'E-mail адміністратора:';
$_lang["connection_screen_default_admin_login"] = 'Ім\'я адміністратора:';
$_lang["connection_screen_default_admin_note"] = 'Тепер ви повинні ввести дані про головний запис адміністратора. Ви можете ввести своє ім\'я та пароль, який ви навряд чи забудете. Вам знадобляться ці дані, щоб увійти до панелі керування після закінчення установки.';
$_lang["connection_screen_default_admin_password"] = 'Пароль адміністратора:';
$_lang["connection_screen_default_admin_password_confirm"] = 'Підтвердити пароль:';
$_lang["connection_screen_default_admin_user"] = 'Адміністратор за замовчуванням';
$_lang["connection_screen_defaults"] = 'Налаштування за замовчуванням менеджера';
$_lang["connection_screen_server_connection_information"] = 'Параметри підключення та входу на сервер бази даних';
$_lang["connection_screen_server_connection_note"] = 'Введіть дані для входу в базу даних і перевірте їх.';
$_lang["connection_screen_server_test_connection"] = 'Натисніть тут для перевірки з\'єднання з вашим сервером бази даних та отримання порівняння кодування';
$_lang["connection_screen_table_prefix"] = 'Префікс таблиць:';
$_lang["creating_database_connection"] = 'Перевірка з\'єднання з базою даних: ';
$_lang["database_alerts"] = 'Увага, помилка!';
$_lang["database_connection_failed"] = 'Помилка з\'єднання з базою даних!';
$_lang["database_connection_failed_note"] = 'Перевірте параметри з\'єднання та спробуйте ще раз.';
$_lang["database_use_failed"] = 'Неможливо вибрати базу даних!';
$_lang["database_use_failed_note"] = 'Перевірте, чи є у вас необхідні права доступу до бази даних.';
$_lang["default_language"] = 'Мова за замовчуванням менеджера';
$_lang["default_language_description"] = 'Це мова, яка за умовчанням використовуватиметься менеджером в адміністративній панелі Evolution CMS.';
$_lang["depedency_create"] = 'Залежності створено ';
$_lang["depedency_update"] = 'Залежності оновлено';
$_lang["during_execution_of_sql"] = ' під час виконання SQL запиту ';
$_lang["encoding"] = 'utf-8';
$_lang["error"] = 'помилки';
$_lang["errors"] = 'помилок';
$_lang["failed"] = 'ПОМИЛКА!';
$_lang["guid_set"] = 'GUID ключ';
$_lang["help"] = 'Допомога!';
$_lang["help_link"] = 'https://evo.im/forums.html';
$_lang["help_title"] = 'Допомога у встановленні на форумах Evolution CMS';
$_lang["iagree_box"] = 'Я згоден з умовами <a href="../assets/docs/license.txt" target="_blank">ліцензії</a>. З українським перекладом тексту ліцензії можна познайомитись на сторінці <a href="https://uk.wikipedia.org/wiki/GNU_General_Public_License" target="_blank">GNU General Public License</a>.';
$_lang["install"] = 'Встановити';
$_lang["install_overwrite"] = 'Встановити/Переписати';
$_lang["install_results"] = 'Результати встановлення';
$_lang["install_update"] = 'Встановити/Оновити';
$_lang["installation_error_occured"] = 'Наступна помилка виникла під час встановлення';
$_lang["installation_install_new_copy"] = 'Встановити нову копію ';
$_lang["installation_install_new_note"] = 'Увага, вибір цього варіанта може перезаписати дані у вашій базі даних.';
$_lang["installation_mode"] = 'Режим встановлення';
$_lang["installation_new_installation"] = 'Нова установка';
$_lang["installation_note"] = '<strong>Увага:</strong> Після входу в панель керування ви повинні відредагувати та зберегти системну конфігурацію Evolution CMS, перш ніж дивитися сайт, вибравши <strong>Інструменти</strong> -> Конфігурація в панелі керування.';
$_lang["installation_successful"] = 'Встановлення успішно завершено!';
$_lang["installation_upgrade_advanced"] = 'Розширене оновлення установки';
$_lang["installation_upgrade_advanced_note"] = 'Для розширеного керування базою даних з різним набором символів.<br /><b>Ви повинні знати повну назву вашої бази даних, ім\'я користувача, пароль, деталі підключення та таблицю зіставлення.</b>';
$_lang["installation_upgrade_existing"] = 'Оновлення існуючої установки';
$_lang["installation_upgrade_existing_note"] = 'Оновлення ваших файлів та бази даних.';
$_lang["installed"] = 'Інстальовано';
$_lang["installing_demo_site"] = 'Інсталяція прикладу веб-сайту: ';
$_lang["language_code"] = 'uk';
$_lang["loading"] = 'Завантажується...';
$_lang["modules"] = 'Модулі';
$_lang["modx_footer1"] = '&copy; 2005 - 2024 <a href="https://evo.im/" target="_blank" style="color: green; text-decoration:underline">Evolution CMS</a> a fast, feature-rich content management system. Всі права захищені. Evolution CMS ліцензовано GNU GPL.';
$_lang["modx_footer2"] = 'Evolution CMS &mdash; вільне програмне забезпечення. Ми заохочуємо вас бути творчими та використовувати Evolution CMS як ви вважаєте за доцільне. Якщо ви внесете зміни та вирішите розповсюджувати ваш змінений варіант Evolution CMS, то повинні зберігати та розповсюджувати вихідний код безкоштовно.';
$_lang["modx_install"] = 'Evolution CMS &raquo; Встановлення';
$_lang["modx_requires_php"] = ', а Evolution CMS необхідний PHP [+min_version+] або пізніший';
$_lang["mysql_5051"] = ' версія MySQL – 5.0.51!';
$_lang["mysql_5051_warning"] = 'Відомі проблеми з MySQL 5.0.51. Рекомендуємо оновити базу даних перед продовженням інсталяції.';
$_lang["mysql_old_version"] = 'Якщо ви використовуєте версію MySQL нижче ніж 5.7.6, то движок таблиць буде MyISAM, в нових версіях движок буде InnoDB. <br> Рекомендуємо оновити ваш MySQL';
$_lang["pgsql_5051_warning"] = 'Рекомендована версія PostgeSQL 10.0 та вище. Рекомендуємо оновити базу даних перед продовженням установки.';
$_lang["mysql_version_is"] = ' Ваша версія MySQL: ';
$_lang["pgsql_version_is"] = ' Ваша версія PostgreSQL: ';
$_lang["no"] = 'Ні';
$_lang["none"] = 'Жоден';
$_lang["not_found"] = 'не знайдений';
$_lang["ok"] = 'OK!';
$_lang["optional_items"] = 'Додаткові елементи';
$_lang["optional_items_note"] = 'Будь ласка, виберіть параметри встановлення та натисніть кнопку `Інсталювати`:';
$_lang["php_security_notice"] = '<legend>Повідомлення безпеки</legend><p>Незважаючи на те, що Evolution CMS буде працювати на вашій версії PHP, використовувати його з цією версією PHP вкрай не рекомендується. Ваша версія PHP уразлива через численні проломи в захисті. Оновіть PHP до 5.6 або пізнішої безпеки для вашого сайту.</p>';
$_lang["please_correct_error"] = '. Виправте цю помилку';
$_lang["please_correct_errors"] = '. Виправте ці помилки';
$_lang["plugins"] = 'Плагіни';
$_lang["preinstall_validation"] = 'Перевірка перед встановленням';
$_lang["recommend_collation"] = 'utf8mb4_general_ci';
$_lang["recommend_collations_order"] = 'utf8mb4_unicode_ci,utf8mb4_general_ci,utf8_unicode_ci,utf8_general_ci,utf8mb4_bin,utf8_bin,utf8mb4_unicode_520_ci,utf8_unicode_520_ci,utf8_general_mysql500_ci';
$_lang["recommend_setting_change_title"] = 'Рекомендована зміна налаштування';
$_lang["recommend_setting_change_validate_referer_confirmation"] = 'Змінити інсталяцію: <em>Перевірити заголовки HTTP_REFERER?</em>';
$_lang["recommend_setting_change_validate_referer_description"] = 'Ваш сайт не налаштований на перевірку серверних заголовків HTTP_REFERER у вхідних запитах до системи керування. Ми рекомендуємо включити цей параметр, щоб знизити ризик CSRF (Cross Site Request Forgery - підробка міжсайтових запитів) атак.';
$_lang["remove_install_folder_auto"] = 'Видалити папку та файли програми інсталяції з мого сайту <br />(Для виконання цієї операції необхідні права на запис до папки install).';
$_lang["remove_install_folder_manual"] = 'Будь ласка, видаліть папку &quot;<b>install</b>&quot; перш ніж увійти до панелі керування.';
$_lang["resetting_database"] = 'Оновити базу даних демо-сайту: ';
$_lang["retry"] = 'Повторити';
$_lang["running_database_updates"] = 'Оновлення бази даних: ';
$_lang["sample_web_site"] = 'Приклад веб-сайту';
$_lang["sample_web_site_note"] = 'Обережно! Встановлення цього параметра <b>перепише</b> існуючі ресурси та елементи.';
$_lang["session_problem"] = 'Було виявлено проблему в сесії сервера. Будь ласка, зв\'яжіться з адміністратором сервера для її усунення.';
$_lang["session_problem_try_again"] = 'Повторити?';
$_lang["setup_cannot_continue"] = 'На жаль, інсталяція не може бути продовжена через ';
$_lang["setup_couldnt_install"] = 'Програма встановлення Evolution CMS не змогла встановити/змінити деякі таблиці бази даних.';
$_lang["setup_database"] = 'Програма встановлення зараз спробує встановити базу даних:<br />';
$_lang["setup_database_create_connection"] = 'Створення підключення до бази даних: ';
$_lang["setup_database_create_connection_failed"] = 'Не вдалося з\'єднатися із базою даних!';
$_lang["setup_database_create_connection_failed_note"] = 'Перевірте параметри підключення та спробуйте знову.';
$_lang["setup_database_creating_tables"] = 'Створення таблиць бази даних: ';
$_lang["setup_database_creation"] = 'Створення бази даних `';
$_lang["setup_database_creation_failed"] = 'Не вдалося створити базу даних!';
$_lang["setup_database_creation_failed_note"] = ' - програма установки не змогла створити базу даних!';
$_lang["setup_database_creation_failed_note2"] = 'Програма встановлення не змогла створити базу даних і немає бази даних з таким ім\'ям. Можливо, у вас немає прав на створення бази. Перевірте параметри бази даних і спробуйте ще раз.';
$_lang["setup_database_selection"] = 'Вибір бази даних `';
$_lang["setup_database_selection_failed"] = 'Помилка вибору бази даних...';
$_lang["setup_database_selection_failed_note"] = 'Бази даних немає. Програма встановлення спробує створити її.';
$_lang["snippets"] = 'Сніпети';
$_lang["some_tables_not_updated"] = 'Деякі таблиці не було оновлено. Можливо через попередні модифікації';
$_lang["status_checking_database"] = 'Перевірка бази даних: ';
$_lang["status_connecting"] = ' Підключення: ';
$_lang["status_failed"] = 'помилка!';
$_lang["status_failed_could_not_create_database"] = 'помилка - не вдається створити базу даних';
$_lang["status_failed_database_collation_does_not_match"] = 'помилка - зіставлення бази даних відповідає; використовуйте SET NAMES або виберіть %s';
$_lang["status_failed_table_prefix_already_in_use"] = 'помилка – префікс таблиці вже використовується!';
$_lang['status_failed_mysqli'] = 'помилка - розширення mysqli для php не встановлено';
$_lang["status_passed"] = 'успіх - база даних обрана';
$_lang["status_passed_database_created"] = 'успіх - база даних створена';
$_lang["status_passed_server"] = 'успіх - зіставлення бази даних доступне';
$_lang["strict_mode"] = ' сервер MySQL працює у строгому режимі strict sql_mode!';
$_lang["strict_mode_error"] = 'Деякі можливості Evolution CMS не можуть працювати належним чином, якщо режим sql_mode STRICT_TRANS_TABLES не вимкнено. Ви можете задати режим через внесення змін до файлу my.cnf або зв\'язатися з адміністратором бази даних.';
$_lang["summary_setup_check"] = 'Програма інсталяції виконає кілька тестів, щоб переконатися, що все готове до встановлення.';
$_lang["system_configuration"] = 'Конфігурація системи';
$_lang["system_configuration_validate_referer_description"] = 'Рекомендується встановити <strong>Перевірити заголовки HTTP_REFERER</strong>, яка може захистити ваш сайт від атак CSRF, але при деяких конфігураціях сервера система керування може бути недоступною.';
$_lang["table_prefix_already_inuse"] = ' - такий префікс таблиць вже використовується у базі даних!';
$_lang["table_prefix_already_inuse_note"] = 'Продовження установки неможливе. Вже існують таблиці із зазначеним префіксом, змініть префікс таблиць та спробуйте знову.';
$_lang["table_prefix_not_exist"] = ' - немає такого префікса таблиць у базі даних!';
$_lang["table_prefix_not_exist_note"] = 'Продовження установки неможливе, оскільки немає таблиць із зазначеним префіксом, змініть префікс таблиць і спробуйте знову.';
$_lang["templates"] = 'Шаблони';
$_lang["to_log_into_content_manager"] = 'Щоб увійти до панелі керування ([+MGR_DIR+]/index.php), натисніть кнопку `Закрити`.';
$_lang["toggle"] = 'Переключити';
$_lang['tvs'] = 'Параметри (TV)';
$_lang["unable_install_chunk"] = 'Неможливо встановити чанк. Файл';
$_lang["unable_install_module"] = 'Неможливо встановити модуль. Файл';
$_lang["unable_install_plugin"] = 'Неможливо встановити плагін. Файл';
$_lang["unable_install_snippet"] = 'Неможливо встановити сніпет. Файл';
$_lang["unable_install_template"] = 'Неможливо встановити шаблон. Файл';
$_lang["upgrade_note"] = '<strong>Увага:</strong> Перш ніж відкрити ваш сайт, вам необхідно увійти в панель керування, потім переглянути та зберегти системну конфігурацію.';
$_lang["upgraded"] = 'Оновлено';
$_lang["validate_referer_title"] = 'Перевірити серверні заголовки HTTP_REFERER?';
$_lang["visit_forum"] = ', відвідайте <a href="https://evo.im/forums.html" target="_blank">форум Evolution CMS</a>.';
$_lang["warning"] = 'Попередження!';
$_lang["welcome_message_start"] = 'Виберіть тип установки:';
$_lang["welcome_message_text"] = 'Ця програма проведе вас через весь процес встановлення.';
$_lang["welcome_message_welcome"] = 'Ласкаво просимо до програми встановлення Evolution CMS.';
$_lang["writing_config_file"] = 'Запис конфігураційного файлу: ';
$_lang["yes"] = 'Так';
$_lang["you_running_php"] = ' - ви використовуєте PHP ';
