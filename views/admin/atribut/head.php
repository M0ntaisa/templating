
    <?php
    $content = (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_REQUEST['content'])) ? str_replace('-', '_', $_REQUEST['content']) : $_REQUEST['content'];
    if (file_exists('css/' . $content . '.php')) {
        switch ($content) {
            case $content:
                include_once 'css/' . str_replace('-', '_', $content) . '.php';
                break;
        }
    }
    ?>

    <!-- jquery cdn -->
    <script rel="preload" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>