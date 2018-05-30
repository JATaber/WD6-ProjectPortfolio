<body class="off-canvas-nav-left" style="padding-top:70px;">

<div class="container">
    <div class="jumbotron">
        <?

        $videos ='';
        $channels = '';
        $playlists = '';

        foreach($data['items'] as $result){
            switch($result['id']['kind']){
                case 'youtube#video':
                    $videos .= sprintf('<li>%s (%s)</li>',
                        $result['snippet']['title'], $result['id']['videoId']);
                    break;
                case 'youtube#channel':
                    $channels .= sprintf('<li>%s (%s)</li>',
                        $result['snippet']['title'], $result['id']['channelId']);
                    break;
                case 'youtube#playlist':
                    $playlists .= sprintf('<li>%s (%s)</li>',
                        $result['snippet']['title'], $result['id']['playlistId']);
                    break;
            }
        }
        ?>
        <h3>Videos</h3>
        <ul><?echo $videos;?></ul>
        <h3>Channels</h3>
        <ul><?echo $channels;?></ul>
        <h3>Playlists</h3>
        <ul><?echo $playlists;?></ul>

    </div>
</div>