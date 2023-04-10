<?php
//include_once 'BaseMetaBox.php';
//use BaseMetaBox;
class metaBox_VideoUrl extends BaseMetaBox
{
    public function __construct()
    {
        $this->ID = 'video_url';
        $this->title = 'لینک ویدیو';
        $this->callback = 'layout';
        $this->screen = ['post','page'];
        parent::__construct();
    }

    public function layout($post)
        // TODO: Implement layout() method.
    {
        ?>
        <label for="video_url">لینک ویدیو</label>
        <input type="text" value="<?php echo get_post_meta($post->ID, '_oop_video_url', true) ?>" name="video_url"
               id="video_url" placeholder="لینک ویدیو خود را وارد نمایید...">
    <?php }

    public function save($post_id)
    {
        // TODO: Implement save() method.
        update_post_meta($post_id, '_oop_video_url', $_POST['video_url']);

    }
}