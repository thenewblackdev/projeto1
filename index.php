<?php
/*
 * @author Luiz Fernando Lidio | The New Black Studio
 * @powered by: http://www.thenewblack.me
 * 
 *            .=     ,        =.
 *   _  _   /'/    )\,/,/(_   \ \
 *    `//-.|  (  ,\\)\//\)\/_  ) |
 *    //___\   `\\\/\\/\/\\///'  /
 * ,-"~`-._ `"--'_   `"""`  _ \`'"~-,_      Múúúúúúúúúúúúúúú!
 * \       `-.  '_`.      .'_` \ ,-"~`/     Hier gibt's nichts zu sehen!!!
 *  `.__.-'`/   (-\        /-) |-.__,'
 *    ||   |     \O)  /^\ (O/  |
 *    `\\  |         /   `\    /
 *      \\  \       /      `\ /
 *       `\\ `-.  /' .---.--.\
 *         `\\/`~(, '()      ('
 *          /(O) \\   _,.-.,_)
 *         //  \\ `\'`      /
 *        / |  ||   `""""~"`
 *      /'  |__||
 *             `o 
 * 
 * 
 */
?>

<?php require_once "head.php"; ?>

<div class="container">
    <div class="row">
        <?php require_once "menu.php"; ?>
    </div>
</div>

    <div class="container">
        <div class="row">
            <?php
                if(file_exists($_GET["arquivo"])){
                    require_once ($_GET["arquivo"]);
                }
                else{
                    require_once ("404.php");
                }
            ?>
        </div>
    </div>

<?php require_once "footer.php"?>