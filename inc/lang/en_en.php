<?php
# *** LICENSE ***
# This file is part of BlogoText.
# https://github.com/BlogoText/blogotext/
#
# 2006      Frederic Nassar.
# 2010-2016 Timo Van Neerden.
# 2016-.... Mickaël Schoentgen and the community.
#
# BlogoText is free software.
# You can redistribute it under the terms of the MIT / X11 Licence.
# *** LICENSE ***

define('LANG', array(
'id' => 'en',
// Navigation
'notice' => 'Notice',
'submit' => 'Submit',
'cancel' => 'Cancel',
'send' => 'Send',
'preview' => 'Preview',
'edit' => 'Edit',
'activate' => 'Activate',
'desactivate' => 'Desactivate',
'share' => 'Share',
'infos' => 'Infos',
'search' => 'Search',
'yes' => 'Yes',
'no' => 'No',
'open' => 'Open',
'closed' => 'Closed',
'on' => 'on',
'or' => 'or',
'using' => 'with',
'rendered' => 'generated in',
'research' => 'Search result for',
// Boutons formatage commentaires
'btn-bold' => 'Bold',
'btn-ital' => 'Italic',
'btn-uder' => 'Underline',
'btn-stri' => 'Line-through',
'btn-link' => 'Insert a link',
'btn-quot' => 'Insert a quote',
'btn-img' => 'Insert an image',
'bouton-code' => 'Insert formated code',
'bouton-left' => 'Left aligned',
'bouton-center' => 'Centred',
'bouton-right' => 'Right aligned',
'bouton-justify' => 'Justify',
'bouton-liul' => 'Insert a list',
'bouton-liol' => 'Insert a ordered list',
// Labels
'label_article' => 'article',
'label_articles' => 'articles',
'label_comment' => 'comment',
'label_comments' => 'comments',
'label_link' => 'link',
'label_links' => 'links',
'label_feed_entry' => 'feed entry',
'label_feed_entrys' => 'feed entries',
'label_files' => 'files',
'label_previous' => 'Newer entries',
'label_next' => 'Older entries',
'label_dp_pseudo' => 'Pseudo: ',
'label_dp_webpage' => 'Website (optionnal): ',
'label_dp_captcha' => 'Sum of: ',
'label_dp_email' => 'E-mail (optionnal): ',
'label_dp_email_required' => 'E-mail: ',
// Commentaire
'comment_ajout' => 'Write a comment',
'comment_cookie' => 'Use a cookie to remember these informations? ',
'comment_subscribe' => 'Get email notification by email? ',
'comment_not_allowed' => 'Comments are closed for this entry.',
'no_comments' => 'No comments yet.',
'comment_is_visible' => 'Comment is visible',
'comment_is_invisible' => 'Comment is hiddent',
'comment_need_validation' => 'Your comment will be visible after approbation by the webmaster.',
// links
'link_is_public' => 'Link is public',
'link_is_private' => 'Link is private',
// Titles - liens
'post_link' => 'See online',
'post_share' => 'Share',
'blog_link' => 'Watch online',
'go_to_pref' => 'Go to the settings to change description.',
// Mois
'january' => 'January',
'february' => 'February',
'march' => 'March',
'april' => 'April',
'may' => 'May',
'june' => 'June',
'july' => 'July',
'august' => 'August',
'september' => 'September',
'october' => 'October',
'november' => 'November',
'december' => 'December',
'jan.' => 'Jan.',
'feb.' => 'Feb.',
'mar.' => 'Mar',
'apr.' => 'Apr',
'may.' => 'May',
'jun.' => 'June',
'jul.' => 'July',
'aug.' => 'Aug',
'sept.' => 'Sept',
'oct.' => 'Oct',
'nov.' => 'Nov',
'dec.' => 'Dec',
// Jours
'monday' => 'Monday',
'tuesday' => 'Tuesday',
'wednesday' => 'Wednesday',
'thurdsay' => 'Thursday',
'friday' => 'Friday',
'saturday' => 'Saturday',
'sunday' => 'Sunday',
// Erreurs
'errors' => 'Error(s)',
'err_theme_notfound' => 'Theme file is inreadable, not here or broken.',
'err_comm_author' => 'Author name is empty',
'err_comm_email' => 'Email is not correct',
'err_comm_content' => 'Comment is empty',
'err_comm_captcha' => 'Sum is wrong (use numbers)',
'err_comm_webpage' => 'URL is wrong',
'err_comm_article_id' => 'Article ID is wrong',
'err_wrong_token' => 'Security coin is wrong.',
'err_addon_name' => 'Invalid addon name.',
'err_addon_status' => 'No addon status given.',
'err_addon_enabled' => 'Could not enable the addon "%s", please check rights of the "'.DIR_ADDONS.'" folder and its children.',
'err_addon_disabled' => 'Could not disable the addon "%s", please check rights of the "'.DIR_ADDONS.'" folder and its children.',
// module / addons
'addons_settings_legend' => 'Addon settings for : ',
'addons_settings_link_title' => 'Addon settings',
'addons_settings_confirm_reset' => 'Do you really want to delete your settings ?',
'addons_confirm_buttons_action' => 'This action can take some time, please, do not refresh or close your window before the end of the reload.',
'addons_clean_cache_label' => 'Clean the cache for this addon ?',
// feed
'feed_article_comments_title' => 'Comments for ',
// Notes
'note_no_article' => 'No articles :/',
'note_no_module' => 'No modules',
'note_no_commentaire' => 'No comments',
'note_comment_closed' => 'Comments are closed',
'note_no_link' => 'No links',
'note_no_image' => 'No images',
'note_no_fichier' => 'No files',
'note_no_feed' => 'No RSS feed',
'note_no_feed_entry' => 'No RSS entry',
// placeholders
'placeholder_search' => 'Search',
//Formulaire Images
'label_upto' => 'Up to',
'label_perfile' => ' per file',
'label_codes' => 'Integration codes:',
// Chiffres 0 à 9 pour captcha
'0' => 'zero',
'1' => 'one',
'2' => 'two',
'3' => 'three',
'4' => 'four',
'5' => 'five',
'6' => 'six',
'7' => 'seven',
'8' => 'eight',
'9' => 'nine',
// Mail Notification
'mail_subject' => 'New comment on "',
'mail_message1' => 'A new comment by ',
'mail_message2' => ' has been posted on ',
'mail_message3' => ' from ',
'mail_see' => 'You can see it by following ',
'mail_link' => 'this link',
'mail_unsub' => 'To unsubscribe from the comments on that post, you can follow this link: ',
'mail_unsuball' => 'To unsubscribe from the comments on all the posts, follow this link: ',
'mail_end' => 'Also, do not reply to this email, since it is an automatic generated email.',
'mail_regards' => 'Regards',
));
