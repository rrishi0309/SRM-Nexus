<?php

namespace eles\coreframe\inc;

/**
  * Widgets Service
  * @todo separate widgets logic from listener
  */
class widgets_service
{
  protected $db;
  protected $config;
  protected $template;
  protected $user;

  protected $phpbb_root_path;
  protected $php_ext;

  public function __construct(
    \phpbb\db\driver\driver_interface $db,
    \phpbb\config\config $config,
    \phpbb\template\template $template,
    \phpbb\user $user,
    $phpbb_root_path,
    $php_ext
    ){

    $this->db = $db;
    $this->config = $config;
    $this->template = $template;
    $this->user = $user;

    $this->phpbb_root_path = $phpbb_root_path;
    $this->php_ext = $php_ext;
  }

  /**
   * Add sitewide template vars for widgets
   * @todo: separate methods per widget
   */
  public function add_widgets_data() {

    // Forums widget
    $forum_id = request_var( 'f', 0 ); // TODO: set to 0 to display all forums ?

    $this->template->destroy_block_vars( 'jumpbox_forums' );

    $viewforum_path = $this->phpbb_root_path . 'viewforum.' . $this->php_ext;
    make_jumpbox( append_sid( $viewforum_path ), $forum_id );

    // Infotabs widget
    $config = $this->config;
    $user   = $this->user;

    $online_users = obtain_users_online();
    $user_online_strings = obtain_users_online_string( $online_users );

    $l_online_users     = $user_online_strings['l_online_users'];
    $online_userlist    = $user_online_strings['online_userlist'];
    $total_online_users = $online_users['total_online'];

    $l_online_record = $user->lang( 'RECORD_ONLINE_USERS',
      (int) $config['record_online_users'],
      $user->format_date( $config['record_online_date'], false, true)
    );

    $newest_user = $user->lang( 'NEWEST_USER', get_username_string( 'full',
      $config['newest_user_id'],
      $config['newest_username'],
      $config['newest_user_colour']
    ));

    $this->template->assign_vars( array(
      'INFOTABS_TOTAL_POSTS'         => $user->lang( 'TOTAL_POSTS_COUNT', (int) $config['num_posts'] ),
      'INFOTABS_TOTAL_TOPICS'        => $user->lang( 'TOTAL_TOPICS', (int) $config['num_topics'] ),
      'INFOTABS_TOTAL_USERS'         => $user->lang( 'TOTAL_USERS', (int) $config['num_users'] ),
      'INFOTABS_NEWEST_USER'         => $newest_user,
      'INFOTABS_TOTAL_USERS_ONLINE'  => $l_online_users,
      'INFOTABS_LOGGED_IN_USER_LIST' => $online_userlist,
      'INFOTABS_RECORD_USERS'        => $l_online_record,
    ));

    // Recent Topics
    $this->init_widget_recents();
  }

  /**
   * Recent Topics Widget
   */
  private function init_widget_recents() {
    // Number of recent topics
    $recents_nr = $this->config->offsetGet( 'c_wid_recents_nr' );
    $recents_nr = ($recents_nr) ? $recents_nr : '5';

    // Query the Databsase
    $query  = '
      SELECT
        t.topic_id,
        t.topic_title,
        t.topic_last_post_id,
        t.forum_id,
        p.post_id,
        p.poster_id,
        p.post_time,
        u.user_id,
        u.username
      FROM '
        .TOPICS_TABLE.' t, '
        .FORUMS_TABLE.' f, '
        .POSTS_TABLE.' p, '
        .USERS_TABLE.' u '.'
      WHERE
        t.topic_id = p.topic_id
        AND f.forum_id = t.forum_id
        AND t.forum_id != 4
        AND t.topic_status <> 2
        AND t.topic_visibility > 0
        AND p.post_visibility > 0
        AND p.post_id = t.topic_last_post_id
        AND p.poster_id = u.user_id
      ORDER BY p.post_id DESC
      LIMIT '
        .$recents_nr;

    $result = $this->db->sql_query( $query );
    $rows   = $this->db->sql_fetchrowset( $result );

    // Loop through results
    foreach ( $rows as $row ) {

      $author     = $row['username'];
      $date       = $this->user->format_date($row['post_time']);
      $title      = $row['topic_title'];
      $url        = append_sid( "./viewtopic.php?f=$row[forum_id]&amp;t=$row[topic_id]&amp;p=$row[post_id]#p$row[post_id]");
      $author_url = "./memberlist.php?mode=viewprofile&amp;u=$row[user_id]";

      // Add data to the template block vars
      $block_name = "c_widget_recents";

      $this->template->assign_block_vars(
        $block_name,
        array(
          'AUTHOR'     => $author,
          'AUTHOR_URL' => $author_url,
          'TIMESTAMP'  => $date,
          'TITLE'      => $title,
          'URL'        => $url,
        )
      );
    }

    $this->db->sql_freeresult( $result );
  }
}
