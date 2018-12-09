<?php
    function make_embed_element( $url ) {
        switch( $url ) {
            case 'youtube':
                $id   = $url;
                $html = '<amp-youtube width="4" height="3" layout="responsive" data-videoid="' . $id . '"></amp-youtube>';
                break;
            case 'vine':
                $id   = $url;
                $html = '<amp-vine data-vineid="' . $id . '" width="592" height="592" layout="responsive"></amp-vine>';
                break;
            case 'instagram':
                $html = '<amp-instagram layout="responsive" data-shortcode="$1" width="592" height="716"></amp-instagram>';
                break;
            case 'facebook':
                $html = '<amp-facebook width="486" height="657" layout="responsive" data-href="' . $url . '"></amp-facebook>';
                break;
            case 'twitter':
                $id   = strchr($url, '/');
                $html = '<amp-twitter width="800" height="600" layout="responsive" data-tweetid="' . $id . '" data-conversation="all" data-align="center"></amp-twitter>';
                break;
            case 'google':
                $html = '<amp-iframe layout="responsive" src="' . $url . '" width="600" height="450" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" allowfullscreen></amp-iframe>';
                break;
            default:
                $html = make_OGP_blogcard();
        }
        return $html;
    }
?>