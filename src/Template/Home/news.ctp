<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading"><?= $type ?></h2>
    <?php
    if ($type === 'national news') {
        ?>
        <script language="JavaScript" src="https://feed2js.org//feed2js.php?src=http%3A%2F%2Ftimesofindia.indiatimes.com%2Frssfeedsdefault.cms&chan=y&desc=1&utf=y"  charset="UTF-8" type="text/javascript"></script>

        <?php
    } else if ($type === 'international news') {
        ?>
        <table class="table">
            <tr>
                <td style="width: 50%; font-family:Verdana; font-size:14px;" valign="top">

                    <script language="JavaScript" src="https://feed2js.org//feed2js.php?src=http%3A%2F%2Frss.news.yahoo.com%2Frss%2Ftopstories"
                    type="text/javascript"></script>

                </td>
                <td style="width: 50%;font-family:Verdana; font-size:14px;" valign="top">

                    <script language="JavaScript" src="https://feed2js.org//feed2js.php?src=http%3A%2F%2Fnews.bbc.co.uk%2Frss%2Fnewsonline_world_edition%2Ffront_page%2Frss.xml"
                    type="text/javascript"></script>

                </td>
            </tr>
        </table>
        <?php
    } else {
        ?>
        <script language="JavaScript" src="https://feed2js.org//feed2js.php?src=http%3A%2F%2Feconomictimes.indiatimes.com%2Frssfeedsdefault.cms"
        type="text/javascript"></script>
        <?php
    }
    ?>
</div>
