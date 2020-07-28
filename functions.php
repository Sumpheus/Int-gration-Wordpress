<style>
  <?php include 'style.css'; ?>
</style>

<?php
    add_theme_support('title-tag');

  function Barmytheme_init(){
    register_taxonomy('events', 'post', [
      'labels' => [
      'name' => 'Event',
      'singular_name' => 'Event',
      'plural_name' => 'Events',
      'all_items' => 'All events',
      'update_item' => 'Change an event',
      'add_new-item' => 'Add an event',
      'new-item_name' => 'Add an event',
      'new_menu' => 'Event',
    ],
    'show_in_rest' => true,
    'hierarchical' => true,
    'show_admin_column' => true,
  ]);
    register_post_type('events', [
       'label' => 'Events',
       'public' => true,
       'menu_position' => 2,
       'menu_icon' => 'dashicons-buddicons-groups',
       'supports' => ['title', 'editor', 'comments', 'thumbnail'],
       'has_archive' => true,
       'show_in_rest' => true,]);
}

echo Barmytheme_init();

?>
