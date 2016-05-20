<?php
/**
*
* gallery [Russian]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
	'ADD_UPLOAD_FIELD'				=> 'Добавить несколько файлов',
	'ALBUM'							=> 'Альбом',
	'ALBUM_IS_CATEGORY'				=> 'Вы обращаетесь не к альбому, а к категории.<br />Нельзя загружать фотографии в категорию.',
	'ALBUM_LOCKED'					=> 'Альбом закрыт',
	'ALBUM_NAME'					=> 'Альбом',
	'ALBUM_NOT_EXIST'				=> 'Запрошенный альбом не существует.',
	'ALBUM_PERMISSIONS'				=> 'Права доступа',
	'ALBUM_REACHED_QUOTA'			=> 'Вы исчерпали лимит количества фотографий в альбоме и более не можете их загружать. Свяжитесь с администрацией для получения дополнительных сведений.',
	'ALBUM_UPLOAD_NEED_APPROVAL'	=> 'Фотографии загружены.<br /><br />Опубликованы они будут после одобрения администратором или модератором.',
	'ALBUM_UPLOAD_NEED_APPROVAL_ERROR'	=> 'Часть фотографий загружена.<br /><br />Опубликованы они будут после одобрения администратором или модератором.<br /><br /><p class="error">%s</p>',
	'ALBUM_UPLOAD_SUCCESSFUL'		=> 'Фотография загружена',
	'ALBUM_UPLOAD_SUCCESSFUL_ERROR'	=> 'Часть фотографий загружена.<br /><br /><span class="error">%s</span>',
	'ALBUMS_MARKED'					=> 'Все альбомы отмечены как просмотренные.',
	'ALL'							=> 'Все',
	'ALL_IMAGES'					=> 'Все фото',
	'ALLOW_COMMENTS'				=> 'Разрешить комментарии к фотографии.',
	'ALLOW_COMMENTS_ARY'			=> array(
		0	=> 'Разрешить комментарии к фотографии.',
		2	=> 'Разрешить комментарии к фотографиям.',
	),
	'ALLOWED_FILETYPES'				=> 'Разрешённые типы файлов',
	'APPROVE'						=> 'Одобрить',
	'DISAPPROVE'					=> 'Не одобрять',
	'APPROVE_IMAGE'					=> 'Одобрить фото',
	//@todo
	'ALBUM_COMMENT_CAN'				=> 'Вы <strong>можете</strong> оставлять комментарии',
	'ALBUM_COMMENT_CANNOT'			=> 'Вы <strong>не можете</strong> оставлять комментарии',
	'ALBUM_DELETE_CAN'				=> 'Вы <strong>можете</strong> удалять свои фото',
	'ALBUM_DELETE_CANNOT'			=> 'Вы <strong>не можете</strong> удалять свои фото',
	'ALBUM_EDIT_CAN'				=> 'Вы <strong>можете</strong> редактировать свои фото',
	'ALBUM_EDIT_CANNOT'				=> 'Вы <strong>не можете</strong> редактировать свои фото',
	'ALBUM_RATE_CAN'				=> 'Вы <strong>можете</strong> оценивать фото',
	'ALBUM_RATE_CANNOT'				=> 'Вы <strong>не можете</strong> оценивать фото',
	'ALBUM_UPLOAD_CAN'				=> 'Вы <strong>можете</strong> загружать новые фото',
	'ALBUM_UPLOAD_CANNOT'			=> 'Вы <strong>не можете</strong> загружать новые фото',
	'ALBUM_VIEW_CAN'				=> 'Вы <strong>можете</strong> просматривать фото',
	'ALBUM_VIEW_CANNOT'				=> 'Вы <strong>не можете</strong> просматривать фото',
	'BAD_UPLOAD_FILE_SIZE'			=> 'Загружаемый вами файл слишком большой',
	'BBCODES'						=> 'BBCodes',
	'BROWSING_ALBUM'				=> 'Сейчас этот альбом просматривают: %1$s',
	'BROWSING_ALBUM_GUEST'			=> 'Сейчас этот альбом просматривают %1$s пользователей и %2$d гость',
	'BROWSING_ALBUM_GUESTS'			=> 'Сейчас этот альбом просматривают %1$s пользователей и гости: %2$d',
	'CHANGE_AUTHOR'					=> 'Сменить автора',
	'CHANGE_IMAGE_STATUS'			=> 'Изменить статус',
	'CHARACTERS'					=> 'символов',
	'CLICK_RETURN_ALBUM'			=> '%sВернуться в альбом%s',
	'CLICK_RETURN_IMAGE'			=> '%sВернуться к фотографии%s',
	'CLICK_RETURN_INDEX'			=> '%sВернуться на главную страницу галереи%s',
	'COMMENT'						=> 'Комментарий',
	'COMMENT_IMAGE'					=> 'Оставить комментарий к фотографии в альбоме %s',
	'COMMENT_LENGTH'				=> 'Введите здесь комментарий (не более <strong>%d</strong> символов).',
	'COMMENT_ON'					=> 'Комментировать',
	'COMMENT_STORED'				=> 'Комментарий сохранён.',
	'COMMENT_TOO_LONG'				=> 'Комментарий слишком длинный.',
	'COMMENTS'						=> 'Комментарии',
	'CONTEST_COMMENTS_STARTS'		=> 'Комментарии к снимкам в этом конкурсе разрешены с %s.',
	'CONTEST_ENDED'					=> 'Конкурс завершился %s.',
	'CONTEST_ENDS'					=> 'Конкурс завершится %s.',
	'CONTEST_RATING_STARTED'		=> 'Голосование для этого конкурса началось %s.',
	'CONTEST_RATING_STARTS'			=> 'Голосование для этого конкурса начнётся %s.',
	'CONTEST_RATING_ENDED'			=> 'Голосование для этого конкурса закончилось %s.',
	'CONTEST_RATING_HIDDEN'			=> 'скрыто',
	'CONTEST_RESULT'				=> 'Конкурс',
	'CONTEST_RESULT_1'				=> 'Победитель',
	'CONTEST_RESULT_2'				=> 'Второй',
	'CONTEST_RESULT_3'				=> 'Третий',
	'CONTEST_RESULT_HIDDEN'			=> 'Оценка этого фото скрыта до завершения конкурса %s.',
	'CONTEST_STARTED'				=> 'Конкурс начался %s.',
	'CONTEST_STARTS'				=> 'Конкурс начнётся %s.',
	'CONTEST_USERNAME'				=> '<strong>Конкурс</strong>',
	'CONTEST_USERNAME_LONG'			=> '<strong>Конкурс</strong> » Имя пользователя скрыто до окончания конкурса %s.',
	'CONTEST_IMAGE_DESC'			=> '<strong>Конкурс</strong> » Описание фотографии скрыто до окончания конкурса %s.',
	'CONTEST_WINNERS_OF'			=> 'Победитель конкурса «%s»',
	'CONTINUE'						=> 'Продолжить',
	'DATABASE_NOT_UPTODATE'			=> 'Версия таблиц базы данных галереи не соответствует версии её файлов. Обновите базу данных.',
	'DELETE_COMMENT'				=> 'Удалить комментарий',
	'DELETE_COMMENT2'				=> 'Удалить комментарий?',
	'DELETE_COMMENT2_CONFIRM'		=> 'Подтвердите удаление комментария',
	'DELETE_IMAGE'					=> 'Удалить',
	'DELETE_IMAGE2'					=> 'Удалить фото?',
	'DELETE_IMAGE2_CONFIRM'			=> 'Подтвердите удаление фотографии',
	'DELETED_COMMENT'				=> 'Комментарий удалён',
	'DELETED_COMMENT_NOT'			=> 'Комментарий не удалён',
	'DELETED_IMAGE'					=> 'Фотография удалена',
	'DELETED_IMAGE_NOT'				=> 'Фотография не удалена',
	'DESC_TOO_LONG'					=> 'Описание слишком длинное',
	'DESCRIPTION_LENGTH'			=> 'Введите описание (не более <strong>%d</strong> символов).',
	'DETAILS'						=> 'Информация',
	'DISALLOWED_EXTENSION'			=> 'Изображение с таким расширением не разрешено',
	'DONT_RATE_IMAGE'				=> 'Нет оценки',
	'EDIT_COMMENT'					=> 'Редактировать комментарий',
	'EDIT_IMAGE'					=> 'Редактировать',
	'EDITED_TIME_TOTAL'				=> 'Последний раз редактировалось пользователем %s %s; всего редактировалось раз: %d',
	'EDITED_TIMES_TOTAL'			=> 'Последний раз редактировалось пользователем %s %s; всего редактировалось раз: %d',
	'FILE'							=> 'Файл',
	'FILE_SIZE'						=> 'Размер файла',
	'FILETYPE_MIMETYPE_MISMATCH'	=> 'Тип файла «<strong>%1$s</strong>» не соответствует mime-типу (%2$s).',
	'FILETYPES_GIF'					=> 'gif',
	'FILETYPES_JPG'					=> 'jpg',
	'FILETYPES_PNG'					=> 'png',
	'FILETYPES_ZIP'					=> 'zip',
	'FULL_EDITOR'					=> 'Редактировать',
	'GALLERY_IMAGE'					=> 'Фото',
	'GALLERY_IMAGES'				=> 'Фотографии',
	'GALLERY_VIEWS'					=> 'Просмотры',
	'IGNORE_NOTUPTODATE_MESSAGE'	=> 'Напомнить через неделю',
	'IMAGE_ALREADY_REPORTED'		=> 'Фото уже обжаловано.',
	'IMAGE_BBCODE'					=> 'BBCode',
	'IMAGE_COMMENTS_DISABLED'		=> 'Комментарии отключены на этой странице.',
	'IMAGE_DAY'						=> '%.2f фото в день',
	'IMAGE_DESC'					=> 'Описание',
	'IMAGE_HEIGHT'					=> 'Высота фото',
	'IMAGE_INSERTED'				=> 'Фото вставлено',
	'IMAGE_LOCKED'					=> 'Фото блокировано. Вы не можете оставлять к нему комментарии.',
	'IMAGE_NAME'					=> 'Название',
	'IMAGE_NOT_EXIST'				=> 'Фото не найдено.',
	'IMAGE_PCT'						=> '%.2f%% всех фотографий',
	'IMAGE_STATUS'					=> 'Статус',
	'IMAGE_URL'						=> 'Ссылка на фото',
	'IMAGE_VIEWS'							=> 'Просмотров',
	'IMAGE_WIDTH'					=> 'Ширина фото',
	'IMAGES_REPORTED_SUCCESSFULLY'	=> 'Фото обжаловано',
	'IMAGES_UPDATED_SUCCESSFULLY'	=> 'Данные о фотографии обновлены',
	'INSERT_IMAGE_POST'				=> 'Вставить фото в сообщение',
	'INVALID_USERNAME'				=> 'Неверное имя пользователя',
	'INVALID_IMAGE'					=> 'Изображение не найдено',
	'FILE_DISALLOWED_EXTENSION'		=> 'Неразрешенный тип файла',
	'FILE_WRONG_FILESIZE'			=> 'Некорректный размер файла',
	'LAST_COMMENT'					=> 'Последний комментарий',
	'LAST_IMAGE'					=> 'Последнее фото',
	'LAST_IMAGE_BY'					=> 'Автор',
	'LOGIN_EXPLAIN_UPLOAD'			=> 'Вы должны быть зарегистрированы и авторизованы для загрузки фотографий в этот альбом.',
	'MARK_ALBUMS_READ'				=> 'Отметить альбомы как просмотренные',
	'MAX_DIMENSIONS'				=> 'Максимальное разрешение',
	'MAX_FILE_SIZE'					=> 'Максимальный размер файла (байт)',
	'MAX_HEIGHT'					=> 'Максимальная высота (точек)',
	'MAX_WIDTH'						=> 'Максимальная ширина (точек)',
	'MISSING_COMMENT'				=> 'Не введено сообщение',
	'MISSING_IMAGE_NAME'			=> 'Вы должны указать название фотографии.',
	'MISSING_MODE'					=> 'Не выбран режим',
	'MISSING_REPORT_REASON'			=> 'Укажите причину жалобы.',
	'MISSING_SLIDESHOW_PLUGIN'		=> 'Не найден плагин слайдшоу. Свяжитесь с администратором конференции для получения дополнительной информации.',
	'MISSING_SUBMODE'				=> 'Не выбран подрежим.',
	'MISSING_USERNAME'				=> 'Не введено имя пользователя',
	'MOVE_TO_ALBUM'					=> 'Переместить в альбом',
	'MOVE_TO_PERSONAL'				=> 'Переместить в личный альбом',
	'MOVE_TO_PERSONAL_MOD'			=> 'Если «Да», фото будет помещено в личный альбом пользователя. Если у пользователя нет личного альбома, альбом будет создан автоматически.',
	'MOVE_TO_PERSONAL_EXPLAIN'		=> 'Если «Да», фото будет помещено в ваш личный альбом. Если у вас нет личного альбома — он будет создан автоматически.',
	'NEW_COMMENT'					=> 'Новый комментарий',
	'NEW_IMAGES'					=> 'Новое фото',
	'NEWEST_PGALLERY'				=> 'Последний личный альбом: %s',
	'NO_ALBUMS'						=> 'Нет альбомов',
	'NO_COMMENTS'					=> 'пока нет',
	'NO_IMAGES'						=> 'Нет фотографий',
	'NO_IMAGES_FOUND'				=> 'Фото не найдены.',
	'NO_NEW_IMAGES'					=> 'Нет новых фотографий',
	'NO_IMAGES_LONG'				=> 'Этот альбом пуст.',
	'NOT_ALLOWED_FILE_TYPE'			=> 'Этот тип файла не разрешён',
	'NOT_RATED'						=> 'не оценено',
	'NO_WRITE_ACCESS'				=> 'Директория для загрузки фото не имеет прав на запись файлов.<br>Пожалуйста, связитесь с администратором!',
	'ORDER'							=> 'Порядок',
	'ORIG_FILENAME'					=> 'Использовать название файла в качестве названия фотографии',
	'OUT_OF_RANGE_VALUE'			=> 'Значение выходит за допустимые рамки',
	'OWN_IMAGES'					=> 'Ваши фото',
	'PERCENT'						=> '%',
	'PERSONAL_ALBUMS'				=> 'Личные альбомы',
	'PIXELS'						=> 'пикселей',
	'PLUGIN_CLASS_MISSING'			=> 'Ошибка плагина: класс «%s» не найден.',
	'POST_COMMENT'					=> 'Оставить комментарий',
	'POST_COMMENT_RATE_IMAGE'		=> 'Оставить комментарий и оценить фото',
	'POSTER'						=> 'Автор',
	'QUOTA_REACHED'					=> 'Вы исчерпали свой лимит количества загруженных фотографий.',
	'QUOTE_COMMENT'					=> 'Цитировать комментарий',
	'RANDOM_IMAGES'					=> 'Случайные фото',
	'RATE_IMAGE'					=> 'Оценить фото',
	'RATES_COUNT'					=> 'Количество голосов',
	'RATING'						=> 'Оценка',
	'RATING_STRINGS'				=> array(
		0	=> 'не оценено',
		1	=> '%2$s (1 голос)',
		2	=> '%2$s (%1$s голосов)',
	),
	'RATING_STRINGS_USER'			=> array(
		1	=> '%2$s (1 голос, ваша оценка: %3$s)',
		2	=> '%2$s (%1$s голосов, ваша оценка: %3$s)',
	),
	'RATING_SUCCESSFUL'				=> 'Фото оценено.',
	'READ_REPORT'					=> 'Читать жалобу',
	'RECENT_COMMENTS'				=> 'Последние комментарии',
	'RECENT_IMAGES'					=> 'Последние фото',
	'REPORT_IMAGE'					=> 'Обжаловать фото',
	'RETURN_ALBUM'					=> '%sВернуться в альбом%s',
	'ROTATE_IMAGE'					=> 'Повернуть фото',
	'ROTATE_LEFT'					=> '270°',
	'ROTATE_NONE'					=> 'нет',
	'ROTATE_RIGHT'					=> '90°',
	'ROTATE_UPSIDEDOWN'				=> '180°',
	'RETURN_TO_GALLERY'				=> 'Вернуться в галерею',
	'SEARCH_ALBUM'					=> 'Искать в альбоме…',
	'SEARCH_ALBUMS'					=> 'Искать в альбомах',
	'SEARCH_ALBUMS_EXPLAIN'			=> 'Выберите один или несколько альбомов, в которых будет произведён поиск. Поиск во вложенных альбомах производится автоматически, если вы не отключили соответствующую опцию ниже.',
	'SEARCH_COMMENTS'				=> 'Только комментарии',
	'SEARCH_CONTEST'				=> 'Победители конкурса',
	'SEARCH_IMAGE_COMMENTS'			=> 'Названия фотографий, описания и комментарии',
	'SEARCH_IMAGE_VALUES'			=> 'Названия фотографий и описания',
	'SEARCH_IMAGENAME'				=> 'Названия фотографий',
	'SEARCH_RANDOM'					=> 'Случайные фото',
	'NO_SEARCH_RESULTS_RANDOM'		=> 'Нет изображений или вы не имеете права просматривать их!',
	'SEARCH_RECENT'					=> 'Последние фото',
	'NO_SEARCH_RESULTS_RECENT'		=> 'Нет изображений или вы не имеете права просматривать их!',
	'SEARCH_RECENT_COMMENTS'		=> 'Последние комментарии',
	'NO_SEARCH_RESULTS_RECENT_COMMENTS'	=> 'Нет последних комментариев или вы не можете их просматривать!',
	'SEARCH_SUBALBUMS'				=> 'Поиск во вложенных альбомах',
	'SEARCH_TOPRATED'				=> 'Фото с наивысшей оценкой',
	'SEARCH_USER_IMAGES'			=> 'Найти все фото пользователя',
	'SEARCH_USER_IMAGES_OF'			=> 'Фотографии %s',
	'SELECT_ALBUM'					=> 'Выберите альбом',
	'SHOW_PERSONAL_ALBUM_OF'		=> 'Фотоальбом пользователя %s',
	'SLIDE_SHOW'					=> 'Слайдшоу',
	'SLIDE_SHOW_HIGHSLIDE'			=> 'Чтобы начать слайдшоу, нажмите на название одной из фотографий, а затем на кнопку «Пуск»:',
	'SLIDE_SHOW_LYTEBOX'			=> 'Чтобы начать слайдшоу, нажмите на название одной из фотографий:',
	'SLIDE_SHOW_SHADOWBOX'			=> 'Чтобы начать слайдшоу, нажмите на название одной из фотографий:',
	'SORT_ASCENDING'				=> 'По возрастанию',
	'SORT_DEFAULT'					=> 'По умолчанию',
	'SORT_DESCENDING'				=> 'По убыванию',
	'STATUS'						=> 'Статус',
	'SUBALBUMS'						=> 'Вложенные альбомы',
	'SUBALBUM'						=> 'Вложенный альбом',
	'THUMBNAIL_SIZE'				=> 'Размер миниатюры (точек)',
	'TOTAL_COMMENTS_SPRINTF'		=> array(
		0	=> 'Комментариев: <strong>0</strong>',
		1	=> 'Комментариев: <strong>%d</strong>',
		2	=> 'Комментариев: <strong>%d</strong>',
	),
	'TOTAL_IMAGES'					=> 'Фотографий',
	'TOTAL_IMAGES_SPRINTF'			=> array(
		0	=> 'Нет фотографий',
		1	=> '%d фото',
		2	=> '%d фоток',
	),
	'TOTAL_PEGAS_SHORT_SPRINTF'		=> array(
		0	=> 'Нет личных альбомов',
		1	=> '%d личный альбом',
		2	=> 'Личных альбомов: %d',
	),
	'TOTAL_PEGAS_SPRINTF'		=> array(
		0	=> 'Личных альбомов: <strong>0</strong>',
		1	=> 'Личных альбомов: <strong>%d</strong>',
		2	=> 'Личных альбомов: <strong>%d</strong>',
	),
	'UNLOCK_IMAGE'					=> 'Разблокировать фото',
	'UNWATCH_ALBUM'					=> 'Отписаться от альбома',
	'UNWATCH_IMAGE'					=> 'Отписаться от комментариев',
	'UNWATCH_PEGAS'					=> 'Не подписываться на новые личные альбомы',
	'UNWATCHED_ALBUM'				=> 'Вы больше не будете получать сообщения о новых фото в этом альбоме.',
	'UNWATCHED_ALBUMS'				=> 'Вы больше не будете получать сообщения о новых фото в этих альбомах.',
	'UNWATCHED_IMAGE'				=> 'Вы больше не будете получать сообщения о новых комментариях к этому фото.',
	'UNWATCHED_IMAGES'				=> 'Вы больше не будете получать сообщения о новых комментариях к этим фото.',
	'UNWATCHED_PEGAS'				=> 'Автоматическая подписка на новые личные альбомы отключена.',
	'UPLOAD_ERROR'					=> 'Во время загрузки «%1$s» произошла ошибка:<br />&raquo; %2$s',
	'UPLOAD_IMAGE'					=> 'Добавить фото',
	'UPLOAD_IMAGE_SIZE_TOO_BIG'		=> 'Разрешение фотографии слишком велико',
	'UPLOAD_NO_FILE'				=> 'Вы должны ввести путь и название файла',
	'UPLOADED_BY_USER'				=> 'Автор',
	'UPLOADED_ON_DATE'				=> 'Дата',
	'USE_SAME_NAME'					=> 'Использовать единое название и описание для всех фотографий.',
	'USE_NUM'						=> 'Впишите {NUM} для автоматической нумерации. Начать нумерацию с: ',
	'USER_REACHED_QUOTA'			=> array(
		0	=> 'Вы не можете более загружать фотографии.<br />Свяжитесь с администрацией для получения дополнительных сведений.',
		1	=> 'Вы не можете загрузить более чем <strong>одно</strong> фото.<br />Свяжитесь с администрацией для получения дополнительных сведений.',
		2	=> 'Вы не можете загрузить более чем <strong>%s</strong> фотографий.<br />Свяжитесь с администрацией для получения дополнительных сведений.',
	),
	'USER_REACHED_QUOTA_SHORT'		=> array(
		0	=> 'Вы не можете более загружать фотографии.',
		1	=> 'Вы не можете загрузить более чем <strong>одно</strong> фото.',
		2	=> 'Вы не можете загрузить более чем <strong>%s</strong> фотографий.',
	),
	'USERNAME_BEGINS_WITH'			=> 'Имя пользователя начинается с',
	'USERS_PERSONAL_ALBUMS'			=> 'Личные альбомы',
	'VISIT_GALLERY'					=> 'Личный альбом',
	'VIEW_ALBUM'					=> 'Просмотр альбома',
	'VIEW_ALBUM_IMAGES'				=> array(
		1	=> '1 фото',
		2	=> '%s фото',
	),
	'VIEW_IMAGE'					=> 'Просмотр фото',
	'VIEW_IMAGE_COMMENTS'			=> array(
		1	=> '1 комментарий',
		2	=> '%s комментариев',
	),
	'VIEW_LATEST_IMAGE'				=> 'Просмотр последнего фото',
	'VIEW_SEARCH_RECENT'			=> 'Последние фото',
	'VIEW_SEARCH_RANDOM'			=> 'Случайные фото',
	'VIEW_SEARCH_COMMENTED'			=> 'Последние комментарии',
	'VIEW_SEARCH_CONTESTS'			=> 'Победители конкурсов',
	'VIEW_SEARCH_TOPRATED'			=> 'Фото с наивысшей оценкой',
	'VIEW_SEARCH_SELF'				=> 'Ваши фото',
	'VIEWING_ALBUM'					=> 'Просмотр альбома %s',
	'VIEWING_IMAGE'					=> 'Просмотр фотографий из альбома %s',
	'WATCH_ALBUM'					=> 'Подписка на альбом',
	'WATCH_IMAGE'					=> 'Подписка на комментарии',
	'WATCH_PEGAS'					=> 'Подписка на новые личные альбомы',
	'WATCHING_ALBUM'				=> 'Теперь вы будете получать уведомления о новых фото в этом альбоме.',
	'WATCHING_IMAGE'				=> 'Теперь вы будете получать уведомления о новых комментариях к этому фото.',
	'WATCHING_PEGAS'				=> 'Вы автоматически подписаны на все новые личные альбомы.',
	'YOUR_COMMENT'					=> 'Ваш комментарий',
	'YOUR_PERSONAL_ALBUM'			=> 'Ваш личный альбом',
	'YOUR_RATING'					=> 'Ваша оценка',
	'IMAGES_MOVED'					=> array(
		1	=>	'Фото перемещено',
		2	=> 	'%s фото перемещено',
	),
	'WRONG_FILESIZE'	=> 'Размер файла превышает лимит!',
	'QUICK_MOD'		=> 'Выбрать действие',
	'UNREAD_IMAGES'		=> 'Непросмотренные фото',
	'NO_UNREAD_IMAGES'	=> 'Нет непросмотренных фото',

	// Versions 1.2.1 addiotions
	'GALLERY_DROP'		=> 'Перетащите сюда ваши фото',
));
