<div class="content">
    <h1>Change your username</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form action="<?php echo Config::get('URL'); ?>login/editUserName_action" method="post">
        <!-- btw http://stackoverflow.com/questions/774054/should-i-put-input-tag-inside-label-tag -->
        <label>
            New username: <input type="text" name="user_name" required />
        </label>
        <input type="submit" value="Submit" />
    </form>
</div>
